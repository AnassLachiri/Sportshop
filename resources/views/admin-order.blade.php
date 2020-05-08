@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-3">
      <a class="card-counter primary" style="display: block;" href="/admin/products" >
        <i class="fa fa-code-fork"></i>
        <span class="count-numbers">{{ count($products) }}</span>
        <span class="count-name">Products</span>
        </a>
    </div>

    <div class="col-md-3">
      <a class="card-counter danger"  style="display: block" href="/admin/categories">
        <i class="fa fa-ticket"></i>
        <span class="count-numbers">{{ count($categories) }}</span>
        <span class="count-name">Categories</span>
    </a>
    </div>

    <div class="col-md-3">
      <a class="card-counter success" style="display: block" href="/admin/orders">
        <i class="fa fa-database"></i>
        <span class="count-numbers">{{ count($orders) }}</span>
        <span class="count-name">Orders</span>
    </a>
    </div>

    <div class="col-md-3">
      <a class="card-counter info" style="display: block" href="/admin/users">
        <i class="fa fa-users"></i>
        <span class="count-numbers">{{ count($users) }}</span>
        <span class="count-name">Users</span>
    </a>
    </div>
  </div>
</div>

<div class="container">

    <div class="card order">
    <div class="card-header text-center">
    <a href="/product/{{ $product->id }}">{{ $product->name }}</a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <img src="/storage/product_images/{{ $product->image }}" alt="Product">
                @if(!$order->is_delivered)
                <form action="/delete/order/{{$order->id}}" method="POST" class="porduct-delete order-deliver-form">
                    @csrf
                    <button type="submit" class="btn btn-danger float-left" onclick="return confirm('Are you sure?')">Deliver Order Now</button>
                </form>
                @endif
            </div>
            <div class="col-md-9">
                <p class="card-title">
                {{ $product->description }}
                </p>
                <p class="card-text">
                Address : {{ $order->address }}<br>
                Country : {{ $order->country }}<br>
                Quantity wanted : {{ $order->quantity }}<br>
                Total price : {{ ($order->quantity * $product->price) }}$<br>
                User : {{ $user->name }}<br>
                Email : {{ $user->email }}<br>
                </p>
                @if($order->is_delivered)
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
</div>

@endsection
