@extends('layouts.front')

@section('content')
    <div class="row featurette">
        <div class="product-details-info col-md-7 push-md-5">
            <h2 class="product-details-info-title">{{ $product->name }}</h2>
            <p class="lead product-details-info-price"><b>Price : </b>$ {{ $product->price }}</p>
            <p class="lead product-details-info-text"><b>Availability : </b> {{ $product->availability }}</p>
            <p class="lead product-details-info-text"><b>Brand : </b>{{ $product->brand }}</p>
            <p class="lead product-details-info-text"><b>Product Code : </b>{{ $product->productcode }}</p>

            <div class="quantity">
                <a href="#" class="quantity-minus">-</a>
                <input title="Qty" class="email input-text qty text" type="text" value="2">
                <a href="#" class="quantity-plus">+</a>
            </div>

            {{-- <a href="19_cart.html" class="btn btn-medium btn--primary">
                <span class="text">Add to Cart</span>
                <i class="seoicon-commerce"></i>
                <span class="semicircle"></span>
            </a> --}}

            <a href="#" class="btn btn-success">Add to Cart</a>

        </div>
        <div class="col-md-5 pull-md-7">
            <img class="featurette-image img-fluid mx-auto" src="{{ asset($product->image) }}" alt="Generic placeholder image">
        </div>
    </div>
@endsection
