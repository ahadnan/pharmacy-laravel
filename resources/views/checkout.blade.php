@extends('layouts.front')

@section('content')
    <!--Checkout start-->

    <div class="container checkout ">

        <!--<div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <h2 class="checkout-heading">Create an Account</h2>

                <div class="form-check">
                    <label class="form-check-label ">
                        <input class="form-check-input" type="Checkbox" name="exampleRadios" id="exampleRadios2" value="option2" data-toggle="collapse" data-target="#collapseExample"    aria-controls="collapseExample" checked >
                        Checkout as a Guest
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1" >
                         Returning Customer
                    </label>
                </div>-->

                <!--<button class="btn btn-ck" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Checkout as a guest </button>
                <button class="btn btn-ck" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                Returning customer for Payment </button>-->


                <!--<a href="contact.html" class="btn btn-ck" role="button">Returning customer </a>-->

                <!--<div class="collapse" id="collapseExample">
                    <div class="container guest-checkout">-->

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="Checkbox" name="exampleRadios" id="exampleRadios2" value="option1" >
                                            Deliver To a Different Address?
                                    </label>
                                </div>

                                <h2 class="checkout-heading">Delivery Information</h2>

                                <form action="{{ route('cart.checkout') }}" method="post">
                                    {{ csrf_field() }}

                                    {{-- <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="name" class="form-control"  value="" placeholder="Name" >
                                        </div>
                                    </div> --}}

                                    {{-- <div class="form-group row">
                                        <label for="last_name" class="col-sm-4 col-form-label">Last Name*</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="last_name" class="form-control"  value="" placeholder="Last Name" >
                                        </div>
                                    </div> --}}

                                    <div class="form-group row">
                                        <label for="address" class="col-sm-4 col-form-label">Delivery Address</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="address" class="form-control"  value="" placeholder="Address" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="area" class="col-sm-4 col-form-label">Area</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="area" class="form-control"  value="" placeholder="Area" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="zip" class="col-sm-4 col-form-label">Post_code</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="zip" class="form-control"  value="" placeholder="Post code" >
                                        </div>
                                    </div>

                                    {{-- <div class="form-group row">
                                        <label for="phone_number" class="col-sm-4 col-form-label">Phone Number*</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="phone_number" class="form-control"  value="" placeholder="Phone Number" >
                                        </div>
                                    </div> --}}
                                    {{-- <div class="form-group row">
                                        <label for="email" class="col-sm-4 col-form-label">Email*</label>
                                        <div class="col-sm-8">
                                            <input type="email" name="email" class="form-control"  placeholder="Email">
                                        </div>
                                    </div> --}}

                                    <h2 class="checkout-heading"> Payment Method</h2>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="payment" value="cashOnDelivery" checked>
                                            Cash on Delivery
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="payment" value="bcash">
                                                bcash
                                        </label>
                                    </div>
                                    <br><br>
                                    <button class="btn btn-success" type="submit">Confirm Order</button>
                                </form>
                            </div>
                            <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <h2 class="checkout-heading"> Payment Method</h2>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="Checkbox" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        Cash on Delivery
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="Checkbox" name="exampleRadios" id="exampleRadios2" value="option2" >
                                            bcash
                                    </label>
                                </div>

                            </div>-->
                        </div>
                    <!--</div>
                </div>-->
                <!--returning customer  payment method-->

                <!--<div class="collapse" id="collapseExample1">
                    <div class="container payment-method">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <h2 class="checkout-heading"> Payment Method</h2>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="Checkbox" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        Cash on Delivery
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="Checkbox" name="exampleRadios" id="exampleRadios2" value="option2" >
                                        bcash
                                    </label>
                                </div>
                                <button class="btn btn-confirm" type="submit">Confirm Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    </div>

@endsection
