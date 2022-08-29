<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Answer;

class Answers extends Component
{
    public $showingModal = false;
    public $showingModal_answers = false;
    public $message = '';
    public $answer_All;
    public $listeners = [
        'hideMe' => 'hideModal'
    ];
    public function callFunction()
    {
        $this->message = "You clicked on button";
    }
    
    public $answers1, $answers2, $answers3, $answers4, $answers5;
    public function render()
    {
        $answers = Answer::all();
        // dd($questions);
        
        return view('livewire.answers',compact('answers'));

    }
    public function showModal(){
        $this->showingModal = true;   
        $this->showingModal = !$this->showingModal;           
    }
    public function showModal_answer(){
        $this->showingModal_answers = true;   
        $this->showingModal_answers = !$this->showingModal_answers;      
                     
    }
    public function store()
    {
        // $this->validate();
        Answer::create([
            'user_id'=> auth()->user()->id,
            'answer' => $this->answers1,
            'question_id' => 1,
            'pathaudio'=> " "          
  
        ]);
        
        Answer::create([
            'user_id'=> auth()->user()->id,
            'answer' => $this->answers2,
            'question_id' => 2,
            'pathaudio'=> " "
  
        ]);
        
        Answer::create([
            'user_id'=> auth()->user()->id,
            'answer' => $this->answers3,
            'question_id' => 3,
            'pathaudio'=> " "
  
        ]);
        Answer::create([
            'user_id'=> auth()->user()->id,
            'answer' => $this->answers4,
            'question_id' => 4,
            'pathaudio'=> " "
  
        ]);
    
        Answer::create([
            'user_id'=> auth()->user()->id,
            'answer' => $this->answers5,
            'question_id' => 5,
            'pathaudio'=> " "
  
        ]);

        $this->default();

    }
    public function default(){

        $this->reset(['answers1','answers2','answers3','answers4','answers5']);
    }

    public function showAllAnswers(Answer $date){
        $this->showingModal_answers=true;
        $answer_All = Answer::find($date->id)->get();
        #dd($answer_All);
        return view('livewire.answers',compact('answer_All'));
    }

}
