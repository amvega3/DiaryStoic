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
        $answers = DB::table('answers')     
        ->select(
            'answers.id as id', 
            'answers.created_at as fecha',
            'answers.answer as answer'
            
        )
        >orderBy('fecha', 'desc');

        
        // $questions = Question::all();
        // // dd($questions);
        return view('livewire.question',compact('answers'));

    }
    public function showModal(){
        $this->showingModal = true;   
        $this->showingModal = !$this->showingModal;           
    }
   
}
