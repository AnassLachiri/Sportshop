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




<h1 class="products-title text-center">All Orders</h1>


<div class="container">
<div class="row admin-order">
    <div class="col-md-1" >Id</div>
    <div class="col-md-2">Product Name</div>
    <div class="col-md-2">Quantity</div>
    <div class="col-md-2">User</div>
    <div class="col-md-2">Adresse</div>
    <div class="col-md-2">Order state</div>
    
</div>
</div>


<div class="container">
@foreach($orders as $ord)
@if($ord->id = $order->id)

<hr>
<div class="row admin-order">
    <div class="col-md-1">
    {{ $ord['id'] }}
    </div>

    <div class="col-md-2">
    <a href="/product/{{ $prod['product_id'] }}">{{$prod['name']}}</a>
    </div>

    <div class="col-md-2">
    {{ $ord['quantity'] }}
    </div>

    <div class="col-md-2">
    <a href="/admin/user/{{ $use['user_id'] }}">{{$use['name']}}</a>
    </div>

    <div class="col-md-2">
    {{ $ord['address'] }}
    </div>

    <div class="col-md-2">
        @if ($ord['is_delivered'])
        <button type="button" class="btn btn-success">delivered</button>
        @else
        <button type="button" class="btn btn-warning">pending</button>
        @endif
    </div> 
</div>

@endif
@endforeach
<hr></div>
@endsection