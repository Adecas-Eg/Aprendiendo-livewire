<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostEditForm extends Form
{
    #[Rule('required | exists:categories,id', message: ' el campo categoria es requerido')]
    public $category_id = "";

    #[Rule('required', attribute: 'cel titulo es requerido')]
    public $title;

    #[Rule('required ')]
    public $content;

    #[Rule('required | array')]
    public $tags = [];


    public $postId;

    public $open = false;




    public function edit($postId)
    {
        $this->open = true;
        $this->postId = $postId;
        $post = Post::find($postId);

        $this->category_id = $post->category_id;
        $this->title = $post->title;
        $this->content = $post->content;
        $this->content = $post->tags->pluck('id')->toArray();
       
    }

    public function update()
    {
        $post = Post::find($this->postId);
        $post->update($this->only('category_id', 'title', 'content'));
        $post->tags()->sync($this->tags);
        $this->open = false;
        $this->reset();
    }
}
