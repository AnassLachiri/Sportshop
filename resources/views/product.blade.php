@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center product">
        <div class="col-md-5 image">
            <img src="/img/product_img/{{$product->id}}.jpg" alt="Product">
        </div>
        <div class="col-md-7">
            <form action="/product/" method="POST" class="product-info" id="product-form">
            @csrf
            <h3 class="product-title">{{ $product->name }}</h3>
            <p class="product-description">{{ $product->description }}</p><br>

            Quantity available : {{ $product->quantity }}<br>
            Price : {{ $product->price }}$<br>
            <label for="quantity">Choose your quantity :</label>
            <select name="quantity" id="quantity" class="product-quantity">
                @for($i = 1; $i <= $product->quantity; $i++)
                <option value="{{ $i }}"> {{ $i }} </option>
                @endfor
            </select><br><br>

            @auth
            <input type="text" name="user_id" value="{{ Auth::id() }}" style="display:none;">
            <input type="text" name="product_id" value="{{ $product->id }}" style="display:none;">

            @else
            <input type="text" name="user_id" value="-1" style="display:none;">
            <input type="text" name="product_id" value="{{ $product->id }}" style="display:none;">
            @endauth


            <button type="submit" class="btn btn-primary order-btn" name="submit" value="order">Order Now</button>
            <button type="submit" class="btn btn-primary order-btn" name="submit" value="cart">Add to cart</button>

            </form>
        </div>
    </div>
</div>
@endsection
