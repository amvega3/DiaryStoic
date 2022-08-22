<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;

class Questions extends Component
{
    public $showingModal = true;
    public $listeners = [
        'hideMe' => 'hideModal'
    ];
 
    public function render()
    {
        
        $questions = Question::all();
        // dd($questions);
        return view('livewire.question',compact('questions'));

    }
    public function showModal(){
        $this->showingModal = true;   
        $this->showingModal = !$this->showingModal;           
    }
    public function store()
    {
        // $this->validate();
        Question::create([
            'question' => $this->question,

             
        ]);
        $this->default();

    }
    public function default(){

        $this->reset(['questios','fecha','tipo','especie','raza','sexo','propietario','accion']);
    }
}
