<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Answers extends Component
{
    public function render()
    {
        return view('livewire.questions');

    }

    public function store()
    {
        // $this->validate();
        Question::create([
            'answer' => $this->answer,
            'question_id' => $this->question_id  

             
        ]);
        $this->default();

    }
    public function default(){

        $this->reset(['questios','question_id']);
    }

}
