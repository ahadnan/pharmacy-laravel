<?php

namespace App\Http\Controllers;

use Auth;
use Cart;
use App\Order;
use App\Address;
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

    // public function postCheckout(Request $request)
    // {
    //     $oldCart = Cart::content();
    //     $cart = new Cart($oldCart);
    //
    //     $order = new Order;
    //     $order->cart = serialize($cart);
    //     $order->address = $request->input('address');
    //     $order->area = $request->input('area');
    //     $order->zip = $request->input('zip');
    //     $order->payment = $request->get('payment');
    //
    //     Auth::user()->orders()->save($order);
    //
    //     Session::flash('success','Purchase Successfully');
    //
    //     Cart::destroy();
    //
    //     return redirect()->route('index');
    //
    // }

    // Address Controller for address table
    public function store(Request $request)
    {
        Auth::user()->address()->create($request->all());

        //Create the order
        Order::createOrder();

        Session::flash('success','Purchase Successfully');

        Cart::destroy();

        return redirect()->route('index');
    }
}
