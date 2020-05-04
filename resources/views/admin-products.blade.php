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

@foreach($products as $product)


@endforeach

@endsection
