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


<h1 class="products-title text-center">All Users</h1>

<div class="container">

        @if ($message = Session::get('success'))
        <div class="form-group">
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ session('success') }}</strong>
            </div>
        </div>
        @endif

<div class="row admin-user">
    <div class="col-md-1"><strong>Id</strong></div>
    <div class="col-md-5"><strong>Email</strong></div>
    <div class="col-md-2"><strong>Name</strong></div>
    <div class="col-md-2"><strong>User type</strong></div>
    <div class="col-md-1"><strong>Delete</strong></div>
    <div class="col-md-1"><strong>ChangeTo</strong></div>
</div>


@foreach($users as $user)
@if($user->id != Auth::id())
<hr><div class="row admin-user">
    <div class="col-md-1">{{ $user->id }}</div>
    <div class="col-md-5">{{ $user->email }}</div>
    <div class="col-md-2">{{ $user->name }}</div>
    <div class="col-md-2">
        @if ($user->is_admin)
        Admin
        @else
        Normal user
        @endif
    </div>
    <div class="col-md-1">
    <form action="/delete/user/{{$user->id}}" method="POST" class="porduct-delete">
        @csrf
        <button type="submit" class="btn btn-danger float-left" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o"></i></button>
    </form>
    </div>
    <div class="col-md-1">
        @if ($user->is_admin)
        <form action="/permission/user/{{$user->id}}" method="POST" class="porduct-delete">
            @csrf
            <input type="text" name="state" value="normal" style="display: none;">
            <button type="submit" class="btn btn-primary float-left">Normal</button>
        </form>
        @else
        <form action="/permission/user/{{$user->id}}" method="POST" class="porduct-delete">
            @csrf
            <input type="text" name="state" value="admin" style="display: none;">
            <button type="submit" class="btn btn-success float-left">Admin</button>
        </form>
        @endif
    </div>
</div>
@endif
@endforeach
<hr></div>


@endsection
