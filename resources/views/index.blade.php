@extends('layouts.front')

@section('content')
    <h2 class="title text-center">
        @if (isset($msg))
            {{ $msg }}
        @endif
    </h2><hr>
    @if ($products->isEmpty())
        <h4>Sorry, Products not found</h4>

    @else
    @foreach ($products->chunk(4) as $productChunk)
        <section id="medicine-section ">
            <div class="row">
        @foreach ($productChunk as $product)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
            {{-- <div class="col-lg-4 col-md-4 col-sm-6 mb-4"> --}}
                <div class="card">
                    <div class="card">
                        {{-- <img class="card-img-top" src="{{ asset('uploads/products/pills.png') }}"> --}}
                        <img class="card-img-top" src="{{ asset($product->image) }}">
                        <div class="card-block text-center">
                            <a href="{{ route('product.single',['id' => $product->id ]) }}">
                                <h5 class="card-title">{{ $product->name }}</h5>
                            </a>
                            <p class="card-text">
                                <table>
                                    <tr>
                                        <td><b>Price :</b></td>
                                        <td>৳ {{ $product->price }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Availability :</b></td>
                                        <td>{{ $product->availability }}</td>
                                    </tr>
                                </table>
                            </p>
                            <a href="{{ route('cart.rapid.add', ['id' => $product->id ]) }}" class="btn btn-success">
                                Add to Cart <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
            </div>
        </section>
    @endforeach

    @endif
    <!-- Pagination -->

    <div class="col-lg-12">
        {{ $products->links() }}
    </div>

@endsection
