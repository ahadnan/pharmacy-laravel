@extends('layouts.front')

@section('content')
    <!-- CART SECTION -->
    <section id="cart-section">
        <div>
            <h1> In Your Cart : {{ Cart::content()->count() }} Item</h1>
            <table class="table table-striped">
                <thead class="bg-inverse">
                    <tr>
                        <th>Image</th>
                        <th>Medicine Name</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Total price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach (Cart::content() as $pdt)
                        <tr>
                            <th >
                                <a class="thumbnail pull-left" href="#"> <img class="media-object" src="{{ asset($pdt->model->image) }}" alt="product" style="width: 72px; height: 72px;">
                                </a>
                            </th>
                            <td>{{ $pdt->name }}</td>
                            <td>{{ $pdt->price }}</td>
                            {{-- <td> <input type="number" class="text-center" value="{{ $pdt->qty }}" placeholder="1" min="1"></td> --}}
                            <td>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a href="{{ route('cart.decr', ['id' => $pdt->rowId, 'qty' => $pdt->qty ]) }}">
                                            <button type="button"  class="btn btn-default" onclick="onMinus()">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </a>
                                    </span>

                                    <input type="text" id="count" class="form-control" name="qty" style="width: 4px" value="{{ $pdt->qty }}" min="1" max="10">

                                    <span class="input-group-btn">
                                        <a href="{{ route('cart.incr', ['id' => $pdt->rowId, 'qty' => $pdt->qty ]) }}">
                                            <button type="button" class="btn btn-default" onclick="onPlus()">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </a>
                                    </span>
                                </div>
                            </td>
                            <td>{{ $pdt->total() }}</td>
                            <td class="text-center"><a href="{{ route('cart.delete', ['id' => $pdt->rowId ]) }}">
                                {{-- <span class="fa fa-close"></span> --}}
                                <button type="button" class="close btn btn-xs btn-danger">&times;</button>
                            </a>
                            </td>
                        </tr>

                    @endforeach


                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="text-right">
                                <table>
                                    <tr>
                                        <td> <strong> Cart Total: </strong></td>
                                        <td> <strong>{{ Cart::total() }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td> <strong>Delivery Cost:</strong></td>
                                        <td><strong>0.00</strong></td>
                                    </tr>
                                    <tr>
                                        <td> <strong>Grand Total:</strong></td>
                                        <td><strong>{{ Cart::total()}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-warning">
                                                <span class="fa fa-chevron-circle-left"></span> Continue Shopping
                                            </button>
                                        </td>
                                        <td><button type="button" class="btn btn-success">
                                            Checkout <span class="fa fa-check"></span>
                                            </button>
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>


        <br>
        <br>
        <br>
    </section>
@endsection
