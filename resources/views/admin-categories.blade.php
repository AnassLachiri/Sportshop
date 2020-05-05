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

@foreach($categories as $category)
<h1 class="products-title text-center">the category: {{$category->name}}</h1>
@foreach($products as $product)
@if($category->id == $product->category_id)
<hr><div class="row admin-product">
    <div class="col-md-2 product-img" style="background-image: url('/img/product_img/{{$product->id}}.jpg');"></div>
    <div class="col-md-8 product-text">
        <h3 class="product-name"><a href="/product/{{$product->id}}">{{$product->name}}</a></h3>
        <p class="product-description">{{ $product->description }}</p>
        Quantity In Stock : {{$product->quantity}}
    </div>
    <div class="col-md-2 product-btns">
    <a href="/admin/product/{{$product->id}}" class="porduct-modify"><button type="submit" class="btn btn-primary float-left"><i class="fa fa-cog"></i></button></a>
    <form action="/delete/product/{{$product->id}}" method="POST" class="porduct-delete">
        @csrf
        <button type="submit" class="btn btn-danger float-left"><i class="fa fa-trash-o"></i></button>
    </form>
    </div>
</div>
@endif
@endforeach
@endforeach
@endsection