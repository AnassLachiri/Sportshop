<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Category;
use App\Order;
use App\Cart;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        $products = Product::all();
        $orders = Order::all();
        $categories = Category::all();

        return view('admin', ['users' => $users, 'products' => $products, 'orders' => $orders,
        'categories' => $categories]);
    }

    public function productsIndex()
    {
        $users = User::all();
        $products = Product::all();
        $orders = Order::all();
        $categories = Category::all();

        return view('admin-products', ['users' => $users, 'products' => $products, 'orders' => $orders,
        'categories' => $categories]);
    }

    public function productIndex($id){
        $users = User::all();
        $products = Product::all();
        $orders = Order::all();
        $categories = Category::all();

        $product = Product::findOrFail($id);
        return view('admin-product', ['users' => $users, 'products' => $products, 'orders' => $orders,
        'categories' => $categories, 'product' => $product]);
    }

    public function ordersIndex()
    {
        $users = User::all();
        $products = Product::all();
        $orders = Order::all();
        $categories = Category::all();
        $infos = [];

        for($i = 0 ; $i < count( $orders ) ; $i++){
            $infos[$i]['id'] = $orders[$i]->id;
            $infos[$i]['product_id'] = $orders[$i]->product_id;
            $infos[$i]['product_name'] = Product::findOrFail($orders[$i]->product_id)->name;
            $infos[$i]['user_id'] = $orders[$i]->user_id;
            $infos[$i]['user_name'] = User::findOrFail($orders[$i]->user_id)->name;
            $infos[$i]['quantity'] = $orders[$i]->quantity;
            $infos[$i]['is_delivered'] = $orders[$i]->is_delivered;
        }

        return view('admin-orders', ['users' => $users, 'products' => $products, 'orders' => $orders,
        'categories' => $categories, 'infos' => $infos]);
    }

    public function categoriesIndex()
    {
        $users = User::all();
        $products = Product::all();
        $orders = Order::all();
        $categories = Category::all();

        return view('admin-categories', ['users' => $users, 'products' => $products, 'orders' => $orders,
        'categories' => $categories]);
    }

    public function categoryIndex($id)
    {
        $users = User::all();
        $products = Product::all();
        $orders = Order::all();
        $categories = Category::all();

        $category = Category::findOrFail($id);

        return view('admin-category', ['users' => $users, 'products' => $products, 'orders' => $orders,
        'categories' => $categories, 'category'=> $category]);
    }

    public function usersIndex()
    {
        $users = User::all();
        $products = Product::all();
        $orders = Order::all();
        $categories = Category::all();

        return view('admin-users', ['users' => $users, 'products' => $products, 'orders' => $orders,
        'categories' => $categories]);
    }

    public function permissionUser($id){
        $state = request('state');
        $user = User::findOrFail($id);
        if($state=='normal'){
            $user->is_admin = FALSE;
        }elseif($state=='admin'){
            $user->is_admin = TRUE;
        }
        $user->save();
        return back();
    }

    public function destroyUser($id){
        $user = User::findOrFail($id);

        $orders = Order::all();
        foreach($orders as $order){
            if($order->user_id == $id){
                $order->delete();
            }
        }

        $carts = Cart::all();
        foreach($carts as $cart){
            if($cart->user_id == $id){
                $cart->delete();
            }
        }

        $user->delete();
        return back()
        ->with('success',"The user is deleted successfully!!");

    }
}
