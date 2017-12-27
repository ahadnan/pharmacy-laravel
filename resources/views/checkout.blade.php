@extends('layouts.front')

@section('content')
    <!--Guest Checkout start-->

    <div class="container checkout ">

        <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <h2 class="checkout-heading">Create an Account</h2>
                <hr>

                <!--<div class="form-check">
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

                <button class="btn btn-ck" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Checkout as a guest
                </button>
                <button class="btn btn-ck" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                    Returning customer for Payment
                </button>


                <!--<a href="contact.html" class="btn btn-ck" role="button">Returning customer </a>-->

                <div class="collapse" id="collapseExample">
                    <div class="container guest-checkout">

                        <div class="row">
                            {{-- <form class="" action="index.html" method="post"> --}}

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                                <h2>Personal Information</h2>

                                <form class="" action="cart.checkout" method="post">

                                    <div class="form-group row">
                                        <label for="first_name" class="col-sm-4 col-form-label">First Name*</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="first_name" class="form-control"  value="" placeholder="First Name" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="last_name" class="col-sm-4 col-form-label">Last Name*</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="last_name" class="form-control"  value="" placeholder="Last Name" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="Address" class="col-sm-4 col-form-label">Address*</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="Address" class="form-control"  value="" placeholder="Address" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="area" class="col-sm-4 col-form-label">Area*</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="area" class="form-control"  value="" placeholder="Area" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="post_code" class="col-sm-4 col-form-label">Post_code*</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="post_code" class="form-control"  value="" placeholder="Post code" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phone_number" class="col-sm-4 col-form-label">Phone Number*</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="phone_number" class="form-control"  value="" placeholder="Phone Number" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-4 col-form-label">Email*</label>
                                        <div class="col-sm-8">
                                            <input type="email" name="email" class="form-control"  placeholder="Email">
                                        </div>
                                    </div>
                                    <button class="btn btn-confirm" type="submit">Confirm Order</button>
                                </form>
                            </div>
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

                            </div>

                            {{-- </form> --}}
                        </div>
                    </div>
                </div>
                <!--returning customer  payment method-->

                <div class="collapse" id="collapseExample1">
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




        </div>
    </div>

    <!--<section>
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
    </section>-->




    <!--Guest Checkout end-->
@endsection
