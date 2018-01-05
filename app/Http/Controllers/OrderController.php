<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function orders($type='')
    {
        if ($type == 'pending') {
            $orders = Order::where('delivered','0')->get();
        }elseif($type == 'delivered') {
            $orders = Order::where('delivered','1')->get();
        }else {
            $orders = Order::all();
        }

        return view('admin.orders',compact('orders'));
    }

    public function toggledeliver(Request $request,$orderId)
    {
        $order = Order::find($orderId);

        if($request->has('delivered')){
            // $time=Carbon::now()->addMinute(1);
            //
            // Mail::to($order->user)->later($time,new OrderShipped($order));

            $order->delivered=$request->delivered;
        }else{
            $order->delivered="0";
        }
        $order->save();

        return back();
    }
}
