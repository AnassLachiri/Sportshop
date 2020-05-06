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
<div>










@for($i=0;$i < 60 ;$i++)
&nbsp;
@endfor
</div>

<link href="/css/main.css" rel="stylesheet">

<h1 class="new-product-title">All the categories</h1>
@foreach($categories as $category)
&nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
<div class="container">
<li class="list-group-item">
<div class="container">
    <div class="row">
        
        <div class="col-md-3">
        
            <div class="customDivxx"><img src="/storage/image/{{$category->image}}" class="img-circleimg-responsive" alt="" /></div>

            
        </div>
        <div class="col-md-3">
          &nbsp;
                &nbsp;
                &nbsp;
            <div class="customDiv">the category: {{$category->name}}</div>
        </div>
        
        <div class="col-md-3">
            <div class="customDiv">
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
            <button type="button" class="btn btn-primary btn-lg" title="Edit">modify</button>
            <button type="button" class="btn btn-danger btn-lg" title="Delete">delete</button>
            
            </div>
        </div>
    </div>
</div>
</li>
</div>
@endforeach


<div>
@for($i=0;$i < 10 ;$i++)
&nbsp;
@endfor
</div>



<div class="container new-product">
    <h1 class="new-product-title">Add new Category</h1>
<form action="/create/category/" method="POST" enctype="multipart/form-data">
@csrf
        

        
  <div class="form-group">
    <label for="category-name">Category Name</label>
    <input type="text" class="form-control" id="product-name" placeholder="Category name" name="name">
  </div>
  
  <div class="form-group">
    <label for="category-image">Category Image ( type: jpg et taille: 80x80 )</label>
    <input type="file" class="form-control-file" id="category-image" name="image">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Add Category</button>
</form>

</div>

@endsection
