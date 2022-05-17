<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
//        $request->session()->put('product','phone');
//        session(['product2' => 'phone2']);
        $session = $request->session()->get('cart');
        dd ($session);
        return view('cart');
    }


}
