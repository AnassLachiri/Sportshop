<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DateTime;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchIndex(Request $request)
    {
        $this->validate($request, [
            'category' => 'required',
            'search_text' => 'required',
        ]);

        $category = request('category');
        $search_text = request('search_text');
        $products = [];

        if($category == 'all'){
            $products = Product::where('name', 'LIKE', '%'.$search_text.'%')->get();
        }else{
            $category_id = Category::findOrFail($category)->id;
            $products = Product::where('category_id', $category_id)->where('name', 'LIKE', '%'.$search_text.'%')->get();
        }

        return view('search', ['products' => $products, 'search_text' => $search_text]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'image' => 'image|required',
        ]);


        $pr = Product::where('name',request('name'))->get();


        if(count( $pr ) > 0){
            return back()
            ->with('error','This product exists in the database already!!');
        }elseif(!$request->hasFile('image')){
            return back()
            ->with('error','This product must have an image!!');
        }else{
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename .'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/product_images', $fileNameToStore);
        }

        $product = new Product;
        $product->name = request('name');
        $product->description = request('description');
        $product->category_id = request('category');
        $product->price = request('price');
        $product->quantity = request('quantity');
        $product->image = $fileNameToStore;
        $product->save();

        return back()
            ->with('success','You have successfully upload new product.');
    }


    public function modify(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'image' => 'image',
            'id' => 'required'
        ]);

        $product = Product::findOrFail(request('id'));

        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename .'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/product_images', $fileNameToStore);
            $product->image = $fileNameToStore;
        }

        $product->name = request('name');
        $product->description = request('description');
        $product->category_id = request('category');
        $product->price = request('price');
        $product->quantity = request('quantity');
        $product->updated_at = new DateTime;
        $product->save();

        return back()
            ->with('success','You have successfully modified the product.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('product', ['product' => $product]);
    }

    public function manageSubmit()
    {
        $product_id = request('product_id');
        $user_id = request('user_id');
        $quantity = request('quantity');
        $submit = request('submit');

        if($quantity == 0){
            return back()
                ->with('out_of_stock', 'This product is out stock for now!!');
        }

        if($user_id == -1){
            return redirect("/product/$product_id");
        }

        if($submit == 'cart'){

            $cart_items = Cart::where('product_id',$product_id)->where('user_id', $user_id)->get();
            if(count($cart_items)!=0){
                $cart_items[0]->quantity = $cart_items[0]->quantity + $quantity;
                $cart_items[0]->save();
            }else{
                $cart = new Cart;
                $cart->product_id = $product_id;
                $cart->user_id = $user_id;
                $cart->quantity = $quantity;
                $cart->save();
            }
            return redirect("/product/$product_id");
        }elseif($submit == 'order'){
            if(request('origin') == 'cart'){
                return redirect("/checkout/$product_id/$quantity")->with('origin', 'cart');
            }else{
                return redirect("/checkout/$product_id/$quantity");
            }
        }


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        Storage::delete( 'public/product_images/'. $product->image );

        $product->delete();

        return redirect('/admin/products');
    }
}
