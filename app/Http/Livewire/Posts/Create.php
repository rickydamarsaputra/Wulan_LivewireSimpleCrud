<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Post;

class Create extends Component
{
    public $name, $body;

    public function createPost()
    {
        $this->validate([
            'name' => 'required',
            'body' => 'required'
        ]);
        $post = Post::create([
            'name' => $this->name,
            'body' => $this->body
        ]);
        session()->flash('message', "$post->name Has Been Created!");
        return redirect()->route('post.index');
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
