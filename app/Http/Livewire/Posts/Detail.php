<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Post;

class Detail extends Component
{
    public $post;

    public function mount($id)
    {
        $this->post = Post::findOrFail($id);
    }

    public function render()
    {
        $post = $this->post;
        return view('livewire.posts.detail', compact('post'));
    }
}
