@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center product">
        <div class="col-md-5 image">
            <img src="/storage/product_images/{{$product->image}}" alt="Product">
        </div>
        <div class="col-md-7">
            @if ($message = Session::get('out_of_stock'))
            <div class="form-group">
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ session('out_of_stock') }}</strong>
                </div>
            </div>
            @endif
            <form action="/product/" method="POST" class="product-info" id="product-form">
            @csrf
            <h3 class="product-title">{{ $product->name }}</h3>
            <p class="product-description">{{ $product->description }}</p><br>

            Quantity available : {{ $product->quantity }}<br>
            Price : {{ $product->price }}$<br>
            <label for="quantity">Choose your quantity :</label>
            <select name="quantity" id="quantity" class="product-quantity">
                @for($i = 1; $i <= $product->quantity; $i++)
                <option value="{{ $i }}"> {{ $i }} </option>
                @endfor
            </select><br><br>

            @auth
            <input type="text" name="user_id" value="{{ Auth::id() }}" style="display:none;">
            <input type="text" name="product_id" value="{{ $product->id }}" style="display:none;">

            @else
            <input type="text" name="user_id" value="-1" style="display:none;">
            <input type="text" name="product_id" value="{{ $product->id }}" style="display:none;">
            @endauth


            <button type="submit" class="btn btn-primary order-btn" name="submit" value="order">Order Now</button>
            <button type="submit" class="btn btn-primary order-btn" name="submit" value="cart">Add to cart</button>

            </form>
        </div>
    </div>
</div>
<br><br>
<div class="container"><hr></div>
<br><br>

<div class="container comments">
    <div class="card">
        <h5 class="card-header"><i class="fa fa-comments" aria-hidden="true"></i> Comments Box - Write your opinion about the product</h5>
        @auth
        <div class="card-body">
            <form action="/comment/" method="POST" class="input-group">
            @csrf
                <input type="text" name="content" class="form-control" placeholder="Place your comment here" aria-label="Recipient's username" aria-describedby="button-addon2">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Comment</button>
                </div>
            </form>
        </div>
        @endauth

        @foreach($comments as $comment)
        <div class="card-body">
            <hr style="margin-top: 0;padding-top: 0;">
            <p class="card-text" style="margin-left: 20px;margin-right: 10px; font-size: 20px;"> <span style="font-weight: bold; font-size: 25px">~</span> {{ $comment->content }}</p>
            <span style="padding-left: 50px;"><i class="fa fa-user" aria-hidden="true" style="margin-left: 50px; margin-right: 10px"></i> By <strong>{{ $comment->username }}</strong> , {{ $comment->created_at }}</span>
        </div>
        @endforeach
    </div>
</div>
@endsection
