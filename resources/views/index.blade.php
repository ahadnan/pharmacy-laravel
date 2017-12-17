@extends('layouts.front')

@section('content')
    @foreach ($products->chunk(4) as $productChunk)
        <section id="medicine-section ">
            <div class="row">
        @foreach ($productChunk as $product)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
            {{-- <div class="col-lg-4 col-md-4 col-sm-6 mb-4"> --}}
                <div class="card">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('uploads/products/pills.png') }}">
                        <div class="card-block text-center">
                            <a href="{{ route('product.single',['id' => $product->id ]) }}">
                                <h5 class="card-title">{{ $product->name }}</h5>
                            </a>
                            <p class="card-text">
                                <table>
                                    <tr>
                                        <td>Price:</td>
                                        <td>৳ {{ $product->price }}</td>
                                    </tr>
                                    <tr>
                                        <td>Availability:</td>
                                        <td>{{ $product->availability }}</td>
                                    </tr>
                                </table>
                            </p>
                            <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
            </div>
        </section>
    @endforeach
@endsection
