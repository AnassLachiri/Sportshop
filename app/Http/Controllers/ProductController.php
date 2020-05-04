<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(Product $product)
    {
    }
}
