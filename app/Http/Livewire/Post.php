<?php

namespace App\Http\Livewire;

use App\Models\Post as ModelsPost;
use Livewire\Component;

class Post extends Component
{
    public $title = 'test' , $subtitle , $author , $description , $path_image;
    public $like = false;
        public function render()
    {
        $posts = ModelsPost::all();
        return view('livewire.post', compact('posts'));
    }
}
