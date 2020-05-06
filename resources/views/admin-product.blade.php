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







<div class="container new-product">
    <h1 class="new-product-title">Modify products</h1>
<form action="/modify/product/" method="POST" enctype="multipart/form-data">
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
    <input type="text" class="form-control" id="product-name" placeholder="Product name" name="name" value="{{$product->name}}">
  </div>
  <div class="form-group">
    <label for="product-description">Product Description</label>
    <textarea class="form-control" id="product-description" rows="3" name="description">{{$product->description}}</textarea>
  </div>
  <div class="form-group">
    <label for="product-category">Product Category</label>
    <select class="form-control" id="product-category" name="category">
        @foreach($categories as $category)
        @if($product->category_id == $category->id)
        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
        @else
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endif
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="product-quantity">Product Quantiy</label>
    <input type="number" min="0" class="form-control" id="product-quantity" placeholder="Product quantity" name="quantity" value="{{$product->quantity}}">
  </div>
  <div class="form-group">
    <label for="product-price">Product Price ( in $ )</label>
    <input type="number" step="any" min="0" class="form-control" id="product-price" placeholder="Product price" name="price" value="{{$product->price}}">
  </div>
  <div class="form-group">
    <label for="product-image">Product Image ( jpg )</label>
    <input type="file" class="form-control-file" id="product-image" name="image">
  </div>
  <input type="text" name="id" value="{{$product->id}}" style="display: none;">
  <button type="submit" class="btn btn-primary" name="submit">Add Product</button>
</form>

</div>



@endsection
