@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Dashboard
                    </div>
                    <div class="panel-body">
                        <h4 class="text-center">Purchases Report</strong>
                        </h4>
                        <hr>

                        <table class="table">
                            <thead>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Address
                                </th>
                                <th>
                                    City
                                </th>
                                <th>
                                    Phone
                                </th>
                                <th>
                                    Purchased
                                </th>
                                {{-- <th>
                                    q
                                </th> --}}
                            </thead>
                            <tbody>

                                @foreach ($orders as $order)
                                    {{-- @if ($user->admin == 0) --}}
                                        <tr>
                                            <td>{{ $order->user->name }}</td>
                                            <td>{{ $order->user->email }}</td>
                                            <td>{{ $order->user->address }}</td>
                                            <td>{{ $order->user->city }}</td>
                                            <td>{{ $order->user->phone }}</td>
                                            <td>{{ $order->total }}</td>
                                            {{-- <td>{{ $pivot->qty }}</td> --}}
                                        </tr>
                                    {{-- @endif --}}
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
