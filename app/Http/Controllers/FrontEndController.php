<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', ['products' => Product::paginate(8)]);
    }

    public function singleProduct($id)
    {
        return view('single', ['product' => Product::find($id)]);
    }

}
