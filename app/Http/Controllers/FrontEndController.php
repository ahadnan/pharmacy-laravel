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

    public function search(Request $request)
    {
        $term = $request->term;
        $products = Product::where('name','LIKE','%'.$term.'%')->get();
        if (count($products) == 0) {
            $searchResult[] = 'No Medicine Found';
        }
        else {
            foreach ($products as $key => $value) {
                $searchResult[] = $value->name;
                // $searchId[] = $value->id;
            }
        }
        return $searchResult;

        // return view("product.single,['id' => $product->id ]")->with($product->name, $searchResult)->with($product->id, $searchId);
        // $product->name = $searchResult;

        // return view("product.single,['id' => $product->id ]",[
        //     $product->name => $searchResult,
        //     $product->id => $searchId
        // ]);

    }

}
