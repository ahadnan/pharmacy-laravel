<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
use App\User;
use App\Order;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function requested()
    {
        return view('admin.requested', ['uploads' => Upload::all()]);
    }
    public function user()
    {
        // return view('admin.user', ['users' => User::all()]);
        return view('admin.user', ['orders' => Order::all()]);
    }

}
