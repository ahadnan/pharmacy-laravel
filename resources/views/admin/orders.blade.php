@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="text-center">Orders</h3>

                        <ol>
                            @foreach($orders as $order)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <li>
                                            <h4 class="text-center">Order by <strong>{{$order->user->name}} </strong>
                                                <br><strong> Total Price : {{$order->total}}</strong>
                                                <br><strong> Address : {{$order->user->address}}</strong>
                                                <br><strong> Phone : {{$order->user->phone}}</strong>
                                                {{-- <br><strong> Payment Method : {{$order->address->payment}}</strong> --}}
                                            </h4>

                                            <form action="{{route('toggle.deliver',$order->id)}}" method="POST" class="pull-right" id="deliver-toggle">
                                                {{csrf_field()}}
                                                <label for="delivered">Delivered</label>
                                                <input type="checkbox" value="1" name="delivered"  {{$order->delivered==1?"checked":"" }}>
                                                <input class="btn btn-info btn-sm" type="submit" value="Submit">
                                            </form>

                                            <div class="clearfix"></div>

                                        </li>
                                    </div>

                                    <div class="panel-body">
                                        <h5>Items</h5>
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
                                    </div>
                                </div>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
