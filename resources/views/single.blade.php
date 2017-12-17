@extends('layouts.front')

@section('content')
    <div class="row featurette">
        <div class="product-details-info col-md-7 push-md-5">
            <h2 class="product-details-info-title">{{ $product->name }}</h2>
            <p class="lead product-details-info-price"><b>Price : </b>$ {{ $product->price }}</p>
            <p class="lead product-details-info-text"><b>Availability : </b> {{ $product->availability }}</p>
            <p class="lead product-details-info-text"><b>Brand : </b>{{ $product->brand }}</p>
            <p class="lead product-details-info-text"><b>Product Code : </b>{{ $product->productcode }}</p>

            <div class="col-sm-4 col-xs-12">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button"  class="btn btn-default" onclick="onMinus()">
                        <i class="fa fa-minus" aria-hidden="true"></i>
                    </button>
                </span>

                <input type="text" id="count" class="form-control" style="width: 4px" value="1" min="1" max="10">

                <span class="input-group-btn">
                    <button type="button" class="btn btn-default" onclick="onPlus()">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                </span>
            </div>

            <a href="#" class="btn btn-primary mt-3">Add To Cart</a>
            </div>
        </div>
        <script>
        var count = 0;
        function onPlus() {
            count++;
            document.getElementById('count').setAttribute("value", count);
        }
         function onMinus() {
            count--;
            document.getElementById('count').setAttribute("value", count);
        }
        </script>
        <div class="col-md-5 pull-md-7">
            <img class="featurette-image img-fluid mx-auto" src="{{ asset($product->image) }}" alt="Generic placeholder image">
        </div>
    </div>
@endsection
