<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cart;
use Auth;

class Order extends Model
{
    protected $fillable=['total','delivered'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function orderItems()
    {
        return $this->belongsToMany('App\Product')
                    ->withPivot('qty','total')
                    ->withTimestamps();
    }

    public static function createOrder()
    {
        $user=Auth::user();
        $order=$user->orders()->create([
            'total'=>Cart::total(),
            'delivered'=>0
        ]);

        $cartItems=Cart::content();
        foreach ($cartItems as $cartItem)
        {
            $order->orderItems()->attach($cartItem->id,[
                'qty'=>$cartItem->qty,
                'total'=>$cartItem->qty*$cartItem->price
            ]);
        }
    }
}
