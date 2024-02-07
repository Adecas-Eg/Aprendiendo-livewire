<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\PostCreateForm;
use App\Livewire\Forms\PostEditForm;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Formulario extends Component
{
    public $categories, $tags;
    public $posts;

    public PostCreateForm $postCreate;
   

    public PostEditForm $postEdit;




    public function mount()
    {
        $this->categories = Category::get();
        $this->tags = Tag::get();
        $this->posts = Post::get();
    }


    public function  edit($postId){
        $this->resetValidation();
        $this->postEdit->edit($postId);

    }
   

    public function update()
    {
        $this->postEdit->update();
        $this->dispatch('post-created','Articulo modificado');


    }/*  */
    public function save()
    {
        //logica en PostCreateForm
        $this->postCreate->save();
        $this->posts =  Post::all();

        //eventos

        $this->dispatch('post-created','Nuevo articulo creado');
    }
    public function render()
    {
        return view('livewire.posts.formulario');
    }
}
