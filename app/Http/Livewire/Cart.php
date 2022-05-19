<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use App\Models\Product;
use Livewire\Component;

class Cart extends Component
{
   public $cart = array();

    public function render()
    {
        $this->cart = session()->get('cart');
        return view('livewire.cart');
    }

    public function mount()
    {
        $cart = session()->get('cart');
        if(!isset($cart) or is_null(($cart))){
            $this->cart = [];
        }
        else{
            $this->cart = $cart;
        }
    }

    public function remove($id)
    {
        $cart = session()->get('cart');
        if(isset($cart[$id])){
            unset($cart[$id]);
        }
        return view('livewire.cart');
    }
}
