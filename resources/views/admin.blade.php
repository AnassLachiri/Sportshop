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

<br><br>
<div class="container">
<div class="row">
<div class="col-md-6">
    <div class="card">
    <div class="card-header">
        <h3 class="text-center">Products by category</h3>
    </div>
    <div class="card-body">
    @foreach($products_by_category as $product_by_category)
    <h5> {{ $product_by_category['name'] }}</h5>
    <div class="progress">
        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: {{ $product_by_category['progress'] }}%;" aria-valuenow="{{ $product_by_category['progress'] }}" aria-valuemin="0" aria-valuemax="100">{{ $product_by_category['progress'] }}%</div>
    </div><br>
    @endforeach
    </div>
</div>

</div>
<div class="col-md-6">
    <div class="card">
    <div class="card-header">
        <h3 class="text-center">Orders by state</h3>
    </div>
    <div class="card-body">
        @foreach($orders_by_state as $order_by_state)
        <h5> {{ $order_by_state['state'] }}</h5>
        <div class="progress">
            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: {{ $order_by_state['progress'] }}%;" aria-valuenow="{{ $order_by_state['progress'] }}" aria-valuemin="0" aria-valuemax="100">{{ $order_by_state['progress'] }}%</div>
        </div><br>
        @endforeach
    </div>
</div>

</div>
</div>
</div>

@endsection
