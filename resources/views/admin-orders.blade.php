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
<hr>
<div class="row admin-order">
    <div class="col-md-1" >Id</div>
    <div class="col-md-4">Product Name</div>
    <div class="col-md-2">User</div>
    <div class="col-md-2">Quantity</div>
    <div class="col-md-2">State</div>
    <div class="col-md-1"></div>
</div>
</div>


<div class="container">
@foreach($infos as $info)


<hr>
<div class="row admin-order">
    <div class="col-md-1">{{ $info['id'] }}</div>
    <div class="col-md-4"><a href="/product/{{ $info['product_id'] }}">{{$info['product_name']}}</a></div>
    <div class="col-md-2"><a href="/admin/user/{{ $info['user_id'] }}">{{$info['user_name']}}</a></div>
    <div class="col-md-2">{{ $info['quantity'] }}</div>
    <div class="col-md-2">
        @if ($info['is_delivered'])
        Delivred
        @else
        Pending
        @endif
    </div>
    <div class="col-md-1"><a href="/admin/order/{{$info['id']}}" class="porduct-modify"><i class="fa fa-cog"></i></a></div>
</div>



@endforeach
<hr></div>

@endsection
