@extends('layouts.app')

@section('content')
<div class="container">

    @if(count($cart)==0)
    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">No Products in your cart!!</h4>
    <p>You still didn't add anything to your cart yet!! Browse products and order items that you like!!</p>
    </div>
    @else
    @for ($i = 0; $i < count($cart); $i++)

    <div class="card order">
    <div class="card-header text-center">
        <a href="/product/{{ $cart[$i]['product_id'] }}">{{ $i + 1 }} - {{ $products[$cart[$i]['product_id']-1]['name'] }}</a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <img src="/img/product_img/{{$products[$cart[$i]['product_id']-1]['id']}}.jpg" alt="Product">
            </div>
            <div class="col-md-9">
                <p class="card-title">
                {{$products[$cart[$i]['product_id']-1]['description']}}
                </p>
                <p class="card-text">
                    Quantity wanted : {{ $cart[$i]['quantity'] }}<br>
                    Total price : {{ $cart[$i]['quantity'] * $products[$cart[$i]['product_id']-1]['price'] }}$<br>
                </p>
                <form action="/product" method="POST" class="checkout">
                @csrf
                    <input type="text" name="quantity" value="{{ $cart[$i]['quantity'] }}" style="display:none;">
                    <input type="text" name="origin" value="cart" style="display:none;">
                    <input type="text" name="user_id" value="{{ Auth::id() }}" style="display:none;">
                    <input type="text" name="product_id" value="{{ $cart[$i]['product_id'] }}" style="display:none;">
                    <button type="submit" class="btn btn-primary order-btn" name="submit" value="order">Checkout this order Now</button>
                </form>
            </div>
        </div>
    </div>
    </div>


    @endfor

    @endif



</div>
@endsection
