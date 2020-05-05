<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class WelcomeController extends Controller
{
    public function index()
    {
        $categories = Category::All();

        for($i = 0; $i<count($categories); $i++){
            $products[$i] = Product::where('category_id', $categories[$i]->id)->get();
        }

        return view('welcome', ['products' => $products, 'categories' => $categories]);
    }
}
