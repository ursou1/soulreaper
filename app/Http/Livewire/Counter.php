<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public function render()
    {
        return view('livewire.counter');
    }

    public $count = 0;
    public $name = "";
    public $ok = false;

    public function increment()
    {
        $this->count++;
    }


}
