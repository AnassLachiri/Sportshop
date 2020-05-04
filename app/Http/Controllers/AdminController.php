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

        return view('admin-orders', ['users' => $users, 'products' => $products, 'orders' => $orders,
        'categories' => $categories]);
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
