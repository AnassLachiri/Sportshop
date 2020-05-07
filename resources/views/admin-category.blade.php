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
    <h1 class="new-product-title">Modify The Category</h1>
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <img src="/storage/category_images/{{$category->image}}" alt="{{$category->name}}" class="product_modify_img">
    </div>
    <div class="col-md-4"></div>
    </div>
<form action="/modify/category/" method="POST" enctype="multipart/form-data">
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
    <label for="category-name">Category Name</label>
    <input type="text" class="form-control" id="product-name" placeholder="Category name" name="name" value="{{ $category->name }}">
  </div>

  <div class="form-group">
    <label for="category-image">Category Image</label>
    <input type="file" class="form-control-file" id="category-image" name="image">
  </div>
  <input type="text" name="id" value="{{$category->id}}" style="display: none;">
  <button type="submit" class="btn btn-primary" name="submit">Add Category</button>
</form>

</div>

@endsection
