<?php

namespace App\Http\Livewire;

use App\Models\Role;
use Livewire\Component;

class RolesAdministracion extends Component
{
    public $accion = 'store';
    public function render()
    {
        $roles = Role::all();
        return view('livewire.roles-administracion', compact('roles'));
    }
}
