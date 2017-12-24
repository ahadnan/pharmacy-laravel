<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function getSignup()
    {
        return view('user.signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|confirmed',
            'city' => 'required',
            'address' => 'required',
            'zip' => 'required',
            'phone' => 'required',
            'delivery_address' => 'string|nullable',
            'delivery_phone' => 'string|nullable'
        ]);

        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
            'zip' => $request->input('zip'),
            'password' => bcrypt($request->input('password')),
            'delivery_address' => $request->input('delivery_address'),
            'delivery_phone' => $request->input('delivery_phone')
        ]);

        $user->save();

        Auth::login($user);

        return redirect()->route('index');
    }

    public function postSignin(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // user login + admin login
        // For admin login there is a extra logic use in
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]))
        {
            $user = User::where('email', $request->email)->first();

            if ($user->is_admin())
            {
                return redirect()->route('products.index');
            }
            return redirect()->route('index');
        }
        return redirect()->back();
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
