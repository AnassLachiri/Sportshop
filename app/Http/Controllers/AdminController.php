<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Category;
use App\Order;

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

    public function ordersIndex()
    {
        $users = User::all();
        $products = Product::all();
        $orders = Order::all();
        $categories = Category::all();

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

    public function usersIndex()
    {
        $users = User::all();
        $products = Product::all();
        $orders = Order::all();
        $categories = Category::all();

        return view('admin-users', ['users' => $users, 'products' => $products, 'orders' => $orders,
        'categories' => $categories]);
    }
}
