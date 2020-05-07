<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Storage;
use DateTime;

class CategoryController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'name'=>'required',
        'image'=>'image|required'
        ]);

        $categories = Category::where('name',request('name'))->get();

        if(count( $categories ) > 0){
            return back()
            ->with('error','This category exists in the database already!!');
        }elseif(!$request->hasFile('image')){
            return back()
            ->with('error','This category must have an image!!');
        }else{
            $filenameWithExt = $request->file('image')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('image')->getClientOriginalExtension();

            $fileNameToStore= $filename.'_'.time().'.'.$extension;

            $path = $request->file('image')->storeAs('public/category_images', $fileNameToStore);


        }

        $cat = new Category;
        $cat->name = $request->input('name');
        $cat->image = $fileNameToStore;
        $cat->save();


        return back()
            ->with('success','You have successfully created a new category.');



    }



    public function modify(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'image' => 'image',
            'id' => 'required'
        ]);

        $category = Category::findOrFail(request('id'));

        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename .'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/category_images', $fileNameToStore);
            $product->image = $fileNameToStore;
        }

        $category->name = request('name');
        $category->updated_at = new DateTime;
        $category->save();

        return back()
            ->with('success','You have successfully modified the category.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($category_id){
        $products = Product::all();
        $category_name = Category::findOrFail($category_id)->name;
        return view('category', ['products' => $products,'category_id'=>$category_id, 'category_name' => $category_name]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $pass = FALSE;
        $products = Product::All();
        foreach($products as $product){
            if($product->category_id == $category->id){
                $pass = TRUE;
            }
        }

        if($pass){
            return back()
            ->with('delete_error',"You can't delete a category that is used by other products");
        }else{
            Storage::delete( 'public/category_images/'. $category->image );
            $category->delete();
            return back();
        }
    }



}
