<?php

namespace App\Http\Livewire;

use App\Models\Post as ModelsPost;
use Livewire\Component;

class Post extends Component
{
    public $title , $subtitle , $author , $description , $path_image;
    public function render()
    {
        $posts = ModelsPost::all();
        return view('livewire.post', compact('posts'));
    }
}
