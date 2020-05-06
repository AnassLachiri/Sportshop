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
@if ($message = Session::get('delete_error'))
        <div class="form-group">
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ session('delete_error') }}</strong>
            </div>
        </div>
        @endif
<div class="row admin-order">
    <div class="col-md-1">Image</div>
    <div class="col-md-3">Category Id</div>
    <div class="col-md-6">Category Id</div>
    <div class="col-md-1">Modify</div>
    <div class="col-md-1">Delete</div>
</div>
</div>


<div class="container">
@foreach($categories as $category)


<hr>
<div class="row admin-order">
    <div class="col-md-1" style="background-image: url(/storage/category_images/{{ $category['image'] }});background-size: cover; background-position: center;"></div>
    <div class="col-md-3">{{ $category['id'] }}</div>
    <div class="col-md-6"><a href="/category/{{ $category['id'] }}">{{$category['name']}}</a></div>
    <div class="col-md-1">
    <a href="/admin/category/{{$category['id']}}" class="porduct-modify"><button type="submit" class="btn btn-primary float-left"><i class="fa fa-cog"></i></button></a>
    </div>
    <div class="col-md-1">
    <form action="/delete/category/{{$category['id']}}" method="POST" class="porduct-delete">
        @csrf
        <button type="submit" class="btn btn-danger float-left" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o"></i></button>
    </form>
    </div>
</div>



@endforeach
<hr></div>







<div class="container new-product">
    <h1 class="new-product-title">Add new Category</h1>
<form action="/create/category/" method="POST" enctype="multipart/form-data">
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
    <input type="text" class="form-control" id="product-name" placeholder="Category name" name="name">
  </div>

  <div class="form-group">
    <label for="category-image">Category Image</label>
    <input type="file" class="form-control-file" id="category-image" name="image">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Add Category</button>
</form>

</div>

@endsection
