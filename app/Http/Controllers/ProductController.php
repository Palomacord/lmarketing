<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductController extends Controller
{
    public function product(Request $request){
        $product = new Products;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->weight = $request->input('weight');
        $product->price = $request->input('price');
        $product->min_stock = $request->input('min_stock');
        $product->max_stock = $request->input('max_stock');
        $product->quantity = $request->input('quantity');
        if($product->name){
            $product->save();
        }

        return view('site.product');
    }
}
