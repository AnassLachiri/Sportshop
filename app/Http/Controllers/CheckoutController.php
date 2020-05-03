<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function show($id, $quantity)
    {
        $product = Product::findOrFail($id);
        return view('checkout', ['product' => $product, 'quantity' => $quantity]);
    }
}
