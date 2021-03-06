<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Auth;
use App\Cart;
use App\Category;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::where('user_id' , Auth::id() )->orderBy('created_at', 'desc')->get();
        $products = Product::All();

        return view('orders',['orders' => $orders, 'products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if(request('origin')=='cart'){
            $cart_items = Cart::where('product_id',request('product_id'))->where('user_id', request('user_id'))->get();
            if(count($cart_items)!=0){
                foreach($cart_items as $cart_item){
                    $cart_item->delete();
                }
            }
        }

        $product = Product::findOrFail(request('product_id'));

        if( ($product->quantity - request('quantity')) < 0){
            return view('checkout', ['product' => $product, 'quantity' => $product->quantity, 'sold_out' => True]);
        }

        $product->quantity = ($product->quantity - request('quantity'));
        $product->save();

        $orders = Order::where('product_id',request('product_id'))
                        ->where('user_id', request('user_id'))
                        ->where('address', request('address'))
                        ->where('country', request('country'))->get();
        if(count($orders)!=0){
            foreach($orders as $order){
                $order->quantity = $order->quantity + request('quantity');
                $order->save();
            }
        }else{
            $order = new Order;
            $order->product_id = request('product_id');
            $order->user_id = request('user_id');
            $order->quantity = request('quantity');
            $order->country = request('country');
            $order->address = request('address');
            $order->save();
        }


        return redirect("/product/$order->product_id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function deliver($id)
    {
        $order = Order::findOrFail($id);
        $order->is_delivered = TRUE;
        $order->save();

        return back();
    }

    public function orderIndex($id){
        $users = User::all();
        $products = Product::all();
        $orders = Order::all();
        $categories = Category::all();


        $order = Order::findOrFail($id);
        $product = Product::findOrFail($order->product_id);
        $user= User::findOrFail($order->user_id);



        return view('admin-order', ['users' => $users, 'products' => $products, 'orders' => $orders, 'categories' => $categories,'order'=>$order,'product'=>$product,'user'=>$user]);


    }
}
