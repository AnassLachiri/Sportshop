@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center product-category">

    @foreach($products as $product)
    @if($product->category_id == $category_id)



    <div class="col-md-3">
	<figure class="card card-product">
		<div class="img-wrap" style="background-size: cover; background-position: center; background-image: url('/img/product_img/{{$product->id}}.jpg');">

		</div>
		<figcaption class="info-wrap">
			<h6 class="title text-dots"><a href="/product/{{$product->id}}">{{ $product->name }}</a></h6>
			<div class="action-wrap">
				<a href="/product/{{$product->id}}" class="btn btn-primary btn-sm float-right"> See The Product </a>
				<div class="price-wrap h5">
					<span class="price-new">$ {{ $product->price }}</span>
				</div> <!-- price-wrap.// -->
			</div> <!-- action-wrap -->
		</figcaption>
	</figure> <!-- card // -->
</div>


    @endif
    @endforeach

    </div>
</div>

@endsection
