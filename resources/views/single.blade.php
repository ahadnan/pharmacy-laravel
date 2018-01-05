@extends('layouts.front')

@section('content')
    <div class="row featurette">
        <div class="product-details-info col-md-7 push-md-5">
            <h3 class="product-details-info-title">{{ $product->name }}</h3>
            <p class="lead product-details-info-price"><b><strong>Price : </strong></b>$ {{ $product->price }}</p>
            <p class="lead product-details-info-text"><b><strong>Availability : </strong></b> {{ $product->availability }}</p>
            <p class="lead product-details-info-text"><b><strong>Brand : </strong></b>{{ $product->brand }}</p>
            <p class="lead product-details-info-text"><b><strong>Product Code : </strong></b>{{ $product->productcode }}</p>

            <div class="col-sm-4 col-xs-12">
                <form action="{{ route('cart.add') }}" method="post">
                    {{ csrf_field() }}

                    <div class="input-group">
                        <span class="input-group-btn">
                            <button type="button"  class="btn btn-default" onclick="onMinus()">
                                <i class="fa fa-minus" aria-hidden="true"></i>
                            </button>
                        </span>

                        <input type="text" id="count" class="form-control" name="qty" style="width: 4px" value="1" min="1" max="10">

                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default" onclick="onPlus()">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </span>
                    </div>

                    <input type="hidden" name="pdt_id" value="{{ $product->id }}">

                    <div class="form-group">
                        <button class="form-control btn btn-primary btn-md mt-3">
                            Add To Cart
                        </button>
                    </div>
                </form>
            </div>

        </div>

        <div class="col-md-5 pull-md-7">
            <img class="featurette-image img-fluid mx-auto" src="{{ asset($product->image) }}" alt="Generic placeholder image">
        </div>
        <script>
        var count = 1;
        function onPlus() {
            count++;
            document.getElementById('count').setAttribute("value", count);
        }
        function onMinus() {
            if (count !== 1) {
                count--;
                document.getElementById('count').setAttribute("value", count);
            }
        }
        </script>
    </div>
@endsection
