@extends('layouts.front')

@section('content')
    <style>
    table td { padding:10px
    }
    </style>

    <section id="order-section">
        <div>
           <h3><span style='color:green'>{{ucwords(Auth::user()->name)}}</span>,  Your Orders</h3>
            <table class="table table-striped ">
                <thead class="bg-inverse">
                    <tr>
                        <th>Date</th>
                        <th>Delivery Address</th>
                        <th>Order Total</th>
                        <th>Order Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$order->created_at}}</td>
                            <td>{{$order->user->address}}</td>
                            <td>{{$order->total}}</td>
                            <td>
                                @if ($order->delivered == 1)
                                    {{'delivered'}}
                                @else
                                    {{'pending'}}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5>Product Details</h5>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                    @foreach($order->orderItems as $item)
                                        <tr>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->pivot->qty}}</td>
                                            <td>{{$item->pivot->total}}</td>
                                        </tr>

                                    @endforeach
                                </table>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </section>
@endsection
