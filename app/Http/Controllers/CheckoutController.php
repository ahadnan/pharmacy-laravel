<?php

namespace App\Http\Controllers;

use Cart;
use Session;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        if(Cart::content()->count() == 0)
        {
            Session::flash('info','Your cart is still empty, do some shopping');
            return redirect()->back();
        }
        return view('checkout');
    }
}
