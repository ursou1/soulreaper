<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $session = $request->session()->get('cart');
        //dd ($cart);
        return view('cart');
    }

    public function add($id)
    {
        $product = Product::find($id);
        $cart = session()->get('cart');
        if(!$cart)
        {
            $cart = [
                $id =>[
                    "id" => $product->id,
                    "title" => $product->title,
                    "count" => 1,
                    "image" => $product->image,
                    "cost" => $product->cost
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->route('cart');
        }

        if(isset($cart[$id]))
        {
            $cart[$id]['count']++;
            session()->put('cart', $cart);
        }
        else
        {
            $cart[$id] = [
                "title" => $product->title,
                "count" => 1,
                "image" => $product->image,
                "cost" => $product->cost
            ];
        }
        session()->put('cart', $cart);
        return redirect()->route('cart');
    }

    public function remove($id)
    {
        $cart = session()->get('cart');
        if(isset($cart[$id]))
        {
            unset($cart[$id]);
        }
    }

}
