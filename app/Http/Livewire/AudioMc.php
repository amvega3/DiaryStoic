<?php

namespace App\Http\Livewire;
use App\Models\Question;


use Livewire\Component;

class AudioMc extends Component
{
    public function render()
    {
        return view('livewire.audio-mc');
        $questions = Question::all();
        // dd($questions);
        return view('livewire.audio-mc',compact('questions'));
    }
}
