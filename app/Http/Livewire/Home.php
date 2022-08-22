<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $readyToLoad = false;
    public $sms = '';
    public $active = true;

    public function render()
    {
        if (!$this->readyToLoad) {
            $this->sms = 'Bienvenido';
        }
        return view('livewire.home');
    }
    public function cargadoListo()
    {
        $this->readyToLoad = true;
    }
}
