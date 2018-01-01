<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;

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

}
