<?php

namespace App\Http\Livewire;

use App\Events\PostLiked;
use Livewire\Component;

class Post extends Component
{
    public $post;

    public function getListeners()
    {
        return [
            'echo:posts.' . $this->post->id . ',PostLiked' => 'refreshPost',
            'echo:users.' . $this->post->user_id . ',ProfilePhotoUpdated' => 'refreshPost',
        ];
    }

    public function refreshPost($post)
    {
        $this->post = $this->post->fresh();
    }

    public function storeLike()
    {
        $like = $this->post->likes()->make();
        $like->user()->associate(auth()->user());

        $like->save();

        broadcast(new PostLiked($this->post));
    }

    public function render()
    {
        return view('livewire.post');
    }
}
