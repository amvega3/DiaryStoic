<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\View\Component;

class post_Component extends Component
{
    public $titulo = 'hola';
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Post $posts , $titulo)
    {
        $this->posts = $posts;
        $this->titulo = $titulo;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post_-component');
    }
}
