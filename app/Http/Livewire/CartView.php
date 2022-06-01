<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class CartView extends Component
{
    protected $listeners = ['cartChanged' => 'mount'];
    public $cart = array();
    public function render()
    {
        $this->cart = session()->get('cart');
        return view('livewire.cart-view');
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
            session()->put('cart', $cart);
        }
        $this->render();
        $this->emit('cartChanged');
    }

    public function increment($id)
    {
        $product = Product::find($id);
        $cart = session()->get('cart');

        if(isset($cart[$id])){
            $cart[$id]['count']++;
            session()->put('cart', $cart);
        }
        $this->emit('cartChanged');
    }

    public function decrement($id)
    {
        $product = Product::find($id);
        $cart = session()->get('cart');

        if(isset($cart[$id]) && $cart[$id]['count'] > 1){
            $cart[$id]['count']--;
            session()->put('cart', $cart);
        }
        $this->emit('cartChanged');

    }
}
