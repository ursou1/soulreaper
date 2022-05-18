<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use App\Models\Product;

class Cart
{
   public $cart = array(0);

    public function render()
    {
        return view('livewire.cart');
    }

    public function mount()
    {
       $this->cart = session()->get('cart');

    }

    public function index(Request $request)
    {
        $session = $request->session()->get('cart');

    }
}
