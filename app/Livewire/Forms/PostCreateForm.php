<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostCreateForm extends Form
{

    //las reglas con live se ponen 
    #[Rule('required | exists:categories,id', message: ' el campo categoria es requerido')]
    public $category_id = "";

    #[Rule('required | min:3 | max:25' , attribute: 'cel titulo es requerido')]
    public $title;

    #[Rule('required ')]
    public $content;

    #[Rule('required | array')]
    public $tags = [];

    public function save()
    {
        $this->validate();
        $post = Post::create($this->only('category_id', 'title', 'content'));
        $post->tags()->attach($this->tags);
        $this->reset();
    }
}
