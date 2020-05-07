<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::where('user_id' , Auth::id() )->orderBy('created_at', 'desc')->get();
        $products = Product::All();

        return view('cart',['cart' => $cart, 'products' => $products]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
