<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Answer;
use App\Models\Question;

class Answers extends Component
{
    public $showingModal = false;
    public $showingModal_answers = false;
    public $message = '';
    public $answer_All;
    public $ques;
    public $listeners = [
        'hideMe' => 'hideModal'
    ];
    public function callFunction()
    {
        $this->message = "You clicked on button";
    }

    public $answers1, $answers2, $answers3, $answers4, $answers5;
    protected $rules = [

        'answers1'  => 'required',
        'answers2' => 'required',
        'answers3'  => 'required',
        'answers4'  => 'required',
        'answers5'  => 'required',
    ];
    protected $messages = [

        'answers1.required'  => 'Esta pregunta es requerida',
        'answers2.required'  => 'Esta pregunta es requerida ',
        'answers3.required'  => 'Esta pregunta es requerida ',
        'answers4.required'  => 'Esta pregunta es requerida',
        'answers5.required'  => 'Esta pregunta es requerida'
    ];
    public function render()
    {
        $answers = Answer::all();
        $questions= Question::all();
        if ($this->showingModal_answers) {
            $data = $this->answer_All;

        }
        else
        {

            $data = null;
        }
        // dd($question);

        return view('livewire.answers',compact('answers','data','questions'));

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
        
        $this->validate();
        $this->showingModal = false;
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

        $this->answer_All = Answer::where('created_at',$date->created_at)->get();
        $this->showingModal_answers=true;
    }

}
