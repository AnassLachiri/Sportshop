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
    @for ($j = 0; $j < count($products); $j++)
    @if ($products[$j]['id'] == $cart[$i]['product_id'])

    <div class="card order">
    <div class="card-header text-center">
        <a href="/product/{{ $cart[$i]['product_id'] }}">{{ $i + 1 }} - {{ $products[$j]['name'] }}</a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <img src="/storage/product_images/{{$products[$j]['image']}}" alt="Product">
            </div>
            <div class="col-md-9">
                <p class="card-title">
                {{$products[$j]['description']}}
                </p>
                <p class="card-text">
                    Quantity wanted : {{ $cart[$i]['quantity'] }}<br>
                    Total price : {{ $cart[$i]['quantity'] * $products[$j]['price'] }}$<br>
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


    @endif
    @endfor
    @endfor

    @endif



</div>
@endsection
