@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center product">
        <div class="col-md-3 image">
            <img src="/img/product_img/{{ $product->id }}.jpg" alt="Product">
        </div>
        <div class="col-md-9">
            <h3 class="product-title">{{ $product->name }}</h3>
            <p class="product-description">{{ $product->description }}</p><br>

            Quantity wanted : {{ $quantity }}<br>
            Total price : {{ ($quantity * $product->price) }}$<br>

        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <form action="/order" method="POST" class="checkout-form">
            @csrf
                <div class="form-group">
                    <label for="address">Your Address</label>
                    <input type="text" class="form-control" name="address" id="address" aria-describedby="emailHelp" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="country">Your Country</label>
                    <input type="text" class="form-control" name="country" id="country" placeholder="Country">
                </div>
                <input type="text" name="user_id" value="{{ Auth::id() }}" style="display:none;">
                <input type="text" name="product_id" value="{{ $product->id }}" style="display:none;">
                <input type="text" name="quantity" value="{{ $quantity }}" style="display:none;">
                <button type="submit" class="btn btn-primary">Complete Order</button>
            </form>
            </div>
        </div>
    </div>


</div>
@endsection
