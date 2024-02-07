<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class Father extends Component
{

    
      
    public $name = "adrian castro";
    public function render()
    {
        return view('livewire.father');
    }
}
