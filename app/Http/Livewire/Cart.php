<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use App\Models\Product;
use Livewire\Component;

class Cart extends Component
{
   public $cart = array();
   public $totalCount = 0;
    protected $listeners = ['cartChanged' => 'mount'];
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
        $this->totalCount = $this->getTotalCount();
    }

    public function remove($id)
    {
        $cart = session()->get('cart');

        if(isset($cart[$id])){
            unset($cart[$id]);
             session()->put('cart', $cart);
        }

        $this->emit('cartChanged');
        $this->dispatchBrowserEvent('alert', ['type'=> 'succes', 'message' => 'Товар удален']);
    }

    public function getTotal()
    {
        $total = 0;
        $cart = session()->get('cart');
        foreach ($cart as $id => $details){
            $total += $details['cost'] * $details['count'];
        }
        return number_format($total, 2);
    }

    public function getTotalCount()
    {
        $count = 0;
        $cart = session()->get('cart');
        if(!isset($cart) or is_null($cart))
        {
            return $count;
        }
        foreach ($cart as $id => $details){
            $count += $details['count'];
        }
        return $count;
    }
}
