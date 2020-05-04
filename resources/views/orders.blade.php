@extends('layouts.app')

@section('content')
<div class="container">

    @if(count($orders)==0)
    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">No orders!!</h4>
    <p>You still didn't order anything yet!! Browse products and order items that you like!!</p>
    </div>
    @else
    @for ($i = 0; $i < count($orders); $i++)

    <div class="card order">
    <div class="card-header text-center">
    <a href="/product/{{ $orders[$i]['product_id'] }}">{{ $i + 1 }} - {{ $products[$orders[$i]['product_id']-1]['name'] }}</a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <img src="/img/product_img/{{$products[$orders[$i]['product_id']-1]['id']}}.jpg" alt="Product">
            </div>
            <div class="col-md-9">
                <p class="card-title">
                {{$products[$orders[$i]['product_id']-1]['description']}}
                </p>
                <p class="card-text">
                Address : {{ $orders[$i]['address'] }}<br>
                Country : {{ $orders[$i]['country'] }}<br>
                Quantity wanted : {{ $orders[$i]['quantity'] }}<br>
                    Total price : {{ $orders[$i]['quantity'] * $products[$orders[$i]['product_id']-1]['price'] }}$<br>
                </p>
                @if($orders[$i]['is_delivered'])
                <div class="alert alert-success delivered" role="alert">
                Product Delivred
                </div>
                @else
                <div class="alert alert-primary pending" role="alert">
                Product Pending
                </div>
                @endif
            </div>
        </div>
    </div>
    </div>


    @endfor

    @endif



</div>
@endsection
