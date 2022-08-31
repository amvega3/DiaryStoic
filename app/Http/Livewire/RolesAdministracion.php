<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Livewire\WithPagination;
use Spatie\Permission\Models\Permission;

class RolesAdministracion extends Component
{
    use WithPagination;
    public $search = '';
    public $modal = false;
    public $abrir = true, $act;
    public $permisos;
    public $acumulador = [];
    public $acumulador2 = [];
    public $acumulador3 = [];
    public $permisos_items = [];
    public $check = 1;
    public $role_activo, $var;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $rules = [
        'name' => 'required',
    ];
    public function asignar(Role $dis)
    {
        $this->role_activo = $dis;
        $this->acumulador = [];
        $this->acumulador2 = [];
        $this->acumulador3 = [];
        $this->modal = true;
        $this->permisos = $dis;
        $this->var = $dis->permissions;
        foreach ($this->var as $per) {
            $this->acumulador2[] = $per;
            $this->acumulador[] = $per->id;
        }
        $per = Permission::all();
        foreach ($per as $p) {
            if (in_array($p->id, $this->acumulador)) {
                $this->permisos_items[$p->id] = $p->id;
            } else {
                $p = Permission::find($p->id);
                $this->acumulador2[] = $p;
                $this->permisos_items[$p->id] = '';
            }
        }
    }
    public function guardar()
    {
        // $this->acumulador3 = $this->permisos_items;

        foreach ($this->permisos_items as $item) {
            if ($item != false) {
                if ($item != '') {
                    $this->acumulador3[] = $item;
                }
            }
        }
        $this->role_activo->revokePermissionTo($this->var);
        $sync_perm = $this->role_activo->syncPermissions($this->acumulador3);
        $this->modal = false;
    }
    protected $validationAttributes = [];
    protected $messages = [
        'name.required' => "Ingrese nombre Obligatorio"
    ];
    public function render()
    {
        $roles = Role::where('name', 'like', '%' . $this->search . '%')->paginate(10);
        $permissions = Permission::all();
        return view('livewire.roles-administracion', compact('roles', 'permissions'));
    }
    public $accion = "store";
    public $name = '', $guard_name, $role_id, $test = "0";
    public function store()
    {
        $this->accion = "store";
        $this->validate();
        Role::create([
            'name' => $this->name,
            'description' => $this->guard_name,
            'guard_name' => 'web'
        ]);

        $this->reset(['name', 'guard_name', 'accion']);
    }
    public function edit(Role $role)
    {
        $this->accion = "update";
        $this->name = $role->name;
        $this->guard_name = $role->description;
        $this->role_id = $role->id;
    }
    public function update()
    {
        $this->validate();
        $role = Role::find($this->role_id);
        $role->update([
            'name' => $this->name,
            'description' => $this->guard_name,
        ]);
        $this->reset(['name', 'guard_name', 'accion']);
    }
    function
    default()
    {
        $this->reset(['name', 'guard_name', 'accion']);
    }
    public function destroy(Role $role)
    {
        $role->delete();
    }
}

