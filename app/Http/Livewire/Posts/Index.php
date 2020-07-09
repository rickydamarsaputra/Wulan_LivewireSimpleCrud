<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use Livewire\WithPagination;
use App\Post;

class Index extends Component
{
    use WithPagination;

    public function deletePost($id)
    {
        $post = Post::findOrFail($id);
        session()->flash('message', "$post->name Has Been Deleted!");
        $post->delete();
        return redirect()->back();
    }

    public function render()
    {
        $posts = Post::latest()->paginate(6);
        return view('livewire.posts.index', compact('posts'));
    }
}
