<?php

namespace App\Livewire;

use Livewire\Attributes\Modelable;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class Chield extends Component
{
    public $prueba = 'hola';
    #[Modelable]
    public $name;
    public function render()
    {
        return view('livewire.chield');
    }
}
