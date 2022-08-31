<?php

namespace App\Http\Livewire;

use App\Models\Post as ModelsPost;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;


class Post extends Component
{
    use WithFileUploads;

    public $photo;
    public $title = 'test', $subtitle, $author, $description, $path_image;
    public $like = false, $add = false, $likeFlag = false;

    public function render()
    {
        $userActual = auth()->user()->id;
        $posts = ModelsPost::select("*")
        ->orderBy("titulo", "desc")
        ->get();



        return view('livewire.post', compact('posts'));
    }
    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);
    }
    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
            'title'  => 'required',
            'subtitle' => 'required',
            'description' => 'required',
        ]);
        ModelsPost::create([
            'titulo' => $this->title,
            'subtitulo' => $this->subtitle,
            'autor_id' => auth()->user()->id,
            'descripcion' => $this->description,
            'path_image' => $this->photo->getClientOriginalName()

        ]);
        $this->photo->storeAs('public/images', $this->photo->getClientOriginalName());
        $this->add = false;
        session()->flash('message', 'Post creado Correctamente');

    }
    public function updateLike(ModelsPost $post)
    {
        $this->like = !$this->like;
        $this->likeFlag = true;
        if ($this->like) {
            $like = $post->like + 1;

        } else {
            $like = $post->like - 1;

        }
    }
    public function destroy(ModelsPost $post)
    {
        $delete = Storage::disk('public')->delete('/images/' . $post->path_image);
        return $post->delete();
    }
}
