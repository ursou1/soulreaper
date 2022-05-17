<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function  index()
    {
        $products = Product::Paginate(15);
        return view('shop-list-right-sidebar', ['products'=> $products]);
    }

    public function singleProduct(Request $request, $slug){
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('single-product',['product'=>$product]);
    }
}
