@extends('layouts.app')

@section('content')

<div class="welcome-header">
    <div class="blackish">
        <div class="welcome-text">
            Welcome To SportShop
        </div>
    </div>
</div>


<br><br>

<div class="container">

@for($i = 0; $i< count( $categories ); $i++)

<hr><h3 class="category-name"><a href="/category/{{$categories[$i]->id}}">{{ $categories[$i]->name }}</a></h3><br>

        <div class="row product-category">
            @if( count( $products[$i] ) > 3 )
            @for($j = 0; $j < 3; $j++)

            <div class="col-md-3">
                <figure class="card card-product">
                    <div class="img-wrap" style="background-size: cover; background-position: center; background-image: url('/img/product_img/{{ $products[$i][$j]->id }}.jpg');">

                    </div>
                    <figcaption class="info-wrap">
                        <h6 class="title text-dots"><a href="/product/{{ $products[$i][$j]->id }}">{{ $products[$i][$j]->name }}</a></h6>
                        <div class="action-wrap">
                            <a href="/product/{{ $products[$i][$j]->id }}" class="btn btn-primary btn-sm float-right"> See The Product </a>
                            <div class="price-wrap h5">
                                <span class="price-new">$ {{ $products[$i][$j]->price }}</span>
                            </div> <!-- price-wrap.// -->
                        </div> <!-- action-wrap -->
                    </figcaption>
                </figure> <!-- card // -->
            </div>

            @endfor
            @else
            @for($j = 0; $j < count( $products[$i] ); $j++)

            <div class="col-md-3">
                <figure class="card card-product">
                    <div class="img-wrap" style="background-size: cover; background-position: center; background-image: url('/img/product_img/{{ $products[$i][$j]->id }}.jpg');">

                    </div>
                    <figcaption class="info-wrap">
                        <h6 class="title text-dots"><a href="/product/{{ $products[$i][$j]->id }}">{{ $products[$i][$j]->name }}</a></h6>
                        <div class="action-wrap">
                            <a href="/product/{{ $products[$i][$j]->id }}" class="btn btn-primary btn-sm float-right"> See The Product </a>
                            <div class="price-wrap h5">
                                <span class="price-new">$ {{ $products[$i][$j]->price }}</span>
                            </div> <!-- price-wrap.// -->
                        </div> <!-- action-wrap -->
                    </figcaption>
                </figure> <!-- card // -->
            </div>

            @endfor


            @endif


            <div class="col-md-3">
                <figure class="card card-product">
                    <div class="img-cat" style="background-size: cover; background-position: center; background-image: url('/img/product_img/2.jpg');">
                        <div class="whitish">
                            <a href="/category/{{ $categories[$i]->id }}">More +</a>
                        </div>
                    </div>
                </figure> <!-- card // -->
            </div>

        </div>

@endfor

</div>


@endsection
