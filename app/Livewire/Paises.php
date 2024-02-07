<?php

namespace App\Livewire;

use Livewire\Component;

class Paises extends Component
{

    public $open = false;

    public $pais;
    public $paises= [
        'peru',
        'colombia',
        'argentina',
    ];
    public $active;
    public $count=0;

    public function aumen(){
        $this->count++;
    }


    public function changeActive($pais){
        $this->active = $pais;
    }

    public function delete($index){
        unset($this->paises[$index]);
    }
    public function save(){
        array_push($this->paises, $this->pais);
        $this->reset('pais');
    }

    public function render()
    {
        return view('livewire.paises');
    }
}
