<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{

    public function index()
    {
        // $products = Product::all();

        // return view('index', ['products' => Product::paginate(8)]);
        return view('index', ['products' => Product::orderBy('id', 'DESC')->paginate(8)]);
    }

    public function singleProduct($id)
    {
        return view('single', ['product' => Product::find($id)]);
    }

    public function search(Request $request)
    {
        // $term = $request->term;
        // $products = Product::where('name','LIKE','%'.$term.'%')->get();
        // if (count($products) == 0) {
        //     $searchResult[] = 'No Medicine Found';
        // }
        // else {
        //     foreach ($products as $key => $value) {
        //         $searchResult[] = $value->name;
        //     }
        // }
        // return $searchResult;


        $search = $request->searchItem;
        if ($search == '') {
            return view('index', ['products' => Product::paginate(8)]);
        }
        else {
            $products = Product::where('name','LIKE','%'.$search.'%')->paginate(2);
            return view('index', ['msg' =>'Results : '. $search] , compact('products'));
        }

    }

}
