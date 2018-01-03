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
                        <ul>
                            @foreach ($uploads as $upload)
                                <li>
                                    <h4 class="text-center">Order by <strong>{{$upload->name}} </strong>
                                    </h4>
                                    <hr>
                                    <table class="table table-bordered">
                                        <tr>

                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Download</th>
                                            <th>Message</th>
                                        </tr>

                                            <tr>
                                                <td>{{$upload->email}}</td>
                                                <td>{{$upload->address}}</td>
                                                <td>{{$upload->phone}}</td>
                                                <td>
                                                    <a href="uploads/prescription{{$upload->image}}" download="{{$upload->image}}">
                                                        <i class="icon-download-alt"> </i>Download File
                                                          {{-- {{$upload->image}} --}}
                                                    </a>
                                                </td>
                                                <td>{{$upload->message}}</td>
                                            </tr>


                                    </table>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
