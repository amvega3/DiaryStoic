<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Answer;

class Answers extends Component
{
    public $showingModal = true;
    public $listeners = [
        'hideMe' => 'hideModal'
    ];
    public $answers1, $answers2, $answers3, $answers4, $answers5;
    public function render()
    {
        return view('livewire.answers');

    }
    public function showModal(){
        $this->showingModal = true;   
        $this->showingModal = !$this->showingModal;           
    }
    public function store()
    {
        // $this->validate();
        $this->showModal = false;
        // Answer::create([
        //     'user_id'=> 1,
        //     'answer' => $this->answers1,
        //     'question_id' => 1 
            
  
        // ]);
        
        // Answer::create([
        //     'user_id'=> 1,
        //     'answer' => $this->answers2,
        //     'question_id' => 2 
  
        // ]);
        
        // Answer::create([
        //     'user_id'=> 1,
        //     'answer' => $this->answers3,
        //     'question_id' => 3
  
        // ]);
        // Answer::create([
        //     'user_id'=> 1,
        //     'answer' => $this->answers4,
        //     'question_id' => 4
  
        // ]);
    
        // Answer::create([
        //     'user_id'=> 1,
        //     'answer' => $this->answers5,
        //     'question_id' => 5
  
        // ]);

        // $this->default();

    }
    public function default(){

        $this->reset(['user_id','answers1','answers2','answers3','answers4','answers5','question_id']);
    }

}
