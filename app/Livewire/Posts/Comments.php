<?php

namespace App\Livewire\Posts;

use Livewire\Attributes\On;
use Livewire\Component;

class Comments extends Component
{

    public$comments = [
    ];

    //recibir una accion de respuesta por otro componente
    #[On('post-created')]
    public function addComment($comment)
    {
        array_unshift($this->comments,$comment);
    }

    public function render()
    {
        return view('livewire.posts.comments');
    }
}
