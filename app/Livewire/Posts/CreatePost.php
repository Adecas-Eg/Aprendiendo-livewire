<?php

namespace App\Livewire\Posts;

use App\Models\User;
use Livewire\Component;

class CreatePost extends Component
{

   //permite almacedar dato sprimitivos   almacena los datos normakes


    //como collectiones,modelos,datedtime, practicamente todos los tipos estos dlos desydrata 

    public  $title;

    public $name,$email;
    public  $titlle = "Hola mundo desde el componente";

    public function mount( User $user){
     /*    $this->name = $user->name;
        $this->name = $user->email; */
        $this->fill(
            $user->only(['name','email'])
        );

    }
    public function save(){
    }
    public function render()
    {
        
        return view('livewire.posts.create-post');
    }
}
