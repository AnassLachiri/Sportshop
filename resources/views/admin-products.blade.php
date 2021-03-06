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






<h1 class="products-title text-center">All products</h1>

<div class="container">
@foreach($products as $product)
<hr><div class="row admin-product">
    <div class="col-md-2 product-img" style="background-image: url('/storage/product_images/{{$product->image}}');"></div>
    <div class="col-md-8 product-text">
        <h3 class="product-name"><a href="/product/{{$product->id}}">{{$product->name}}</a></h3>
        <p class="product-description">{{ $product->description }}</p>
        Quantity In Stock : {{$product->quantity}}
    </div>
    <div class="col-md-2 product-btns">
    <a href="/admin/product/{{$product->id}}" class="porduct-modify"><button type="submit" class="btn btn-primary float-left"><i class="fa fa-cog"></i></button></a>
    <form action="/delete/product/{{$product->id}}" method="POST" class="porduct-delete">
        @csrf
        <button type="submit" class="btn btn-danger float-left" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o"></i></button>
    </form>
    </div>
</div>
@endforeach
<hr></div>




<div class="container new-product">
    <h1 class="new-product-title">Add new Product</h1>
<form action="/create/product/" method="POST" enctype="multipart/form-data">
@csrf
        @if ($message = Session::get('error'))
        <div class="form-group">
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ session('error') }}</strong>
            </div>
        </div>
        @endif

        @if ($message = Session::get('success'))
        <div class="form-group">
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ session('success') }}</strong>
            </div>
        </div>
        @endif
  <div class="form-group">
    <label for="product-name">Product Name</label>
    <input type="text" class="form-control" id="product-name" placeholder="Product name" name="name">
  </div>
  <div class="form-group">
    <label for="product-description">Product Description</label>
    <textarea class="form-control" id="product-description" rows="3" name="description"></textarea>
  </div>
  <div class="form-group">
    <label for="product-category">Product Category</label>
    <select class="form-control" id="product-category" name="category">
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="product-quantity">Product Quantiy</label>
    <input type="number" min="0" class="form-control" id="product-quantity" placeholder="Product quantity" name="quantity">
  </div>
  <div class="form-group">
    <label for="product-price">Product Price ( in $ )</label>
    <input type="number" step="any" min="0" class="form-control" id="product-price" placeholder="Product price" name="price">
  </div>
  <div class="form-group">
    <label for="product-image">Product Image</label>
    <input type="file" class="form-control-file" id="product-image" name="image">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Add Product</button>
</form>

</div>



@endsection
