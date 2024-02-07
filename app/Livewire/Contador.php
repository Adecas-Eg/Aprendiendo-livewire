<?php

namespace App\Livewire;

use Livewire\Component;

class Contador extends Component
{
    public $count = 0;

    public function dec($c=1){
        $this->count-=$c;
    }
    public function inc($c=1){
        $this->count+=$c;
    }
    public function render()
    {
        return view('livewire.contador');
    }
}
