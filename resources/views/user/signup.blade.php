@extends('layouts.front')

@section('content')
    <section id="authentication">
        @if ($errors->count() > 0)
            <ul class="list-group">
                @foreach ($errors->all() as $error)
                    <li class="list-group-item text-danger">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        @endif
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Existing Customers</h4>
                        <small class="">sign in with the form below</small>
                        {{-- <form action="{{ route('login.custom') }}" method="post"> --}}
                        <form action="{{ route('user.signin') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" id="email" class="form-control" placeholder="email*" name="email" value="{{ old('email')}}">
                            </div>
                            <div class="form-group">
                                <input type="password" id="password" class="form-control" name="password" placeholder="password*">
                            </div>
                            <small>if you forgot your password just enter your email and click <a href="#">here </a></small>
                            <br>
                            <button type="submit" class="btn btn-primary mt-1">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Register New Account</h4>
                        <form action="{{ route('user.signup') }}" method="post">
                            {{ csrf_field() }}
                            <div class="input-group pb-2">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name*" value="{{ old('name')}}">
                                <input type="text" class="form-control" id="email" name="email" placeholder="E-mail*" value="{{ old('email')}}">

                            </div>
                            <div class="input-group pb-2">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone*" value="{{ old('phone')}}">
                                <input type="text" class="form-control" id="city" name="city" placeholder="City/Area*" value="{{ old('city')}}">
                            </div>
                            <div class="input-group pb-2 ">
                                <input type="text" class="form-control" id="address" name="address" placeholder="Address*" value="{{ old('address')}}">
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="PostCode*" value="{{ old('zip')}}">
                            </div>
                            <div class="input-group pb-2">
                                <input type="text" class="form-control" id="delivery_address" name="delivery_address" placeholder="Delivery Address" value="{{ old('delivery_address')}}">
                                <input type="text" class="form-control" id="delivery_phone" name="delivery_phone" placeholder="Delivery Phone" value="{{ old('delivery_phone')}}">
                            </div>
                            <div class="input-group pb-2">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password*">
                                <input type="password" class="form-control" id="password" name="password_confirmation" placeholder="Confirm Password*">
                            </div>

                            <button type="submit" class="btn btn-primary">Sign UP</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
