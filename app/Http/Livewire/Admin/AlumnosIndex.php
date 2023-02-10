<?php

namespace App\Http\Livewire\Admin;

use App\Models\Alumno;
use Livewire\Component;

class AlumnosIndex extends Component
{
    public function render()
    {

        $alumnos = Alumno::orderBy('idAula', 'asc')->get();
        // $alumnos = Alumno::orderBy('idAula', 'asc')->paginate();

        return view('livewire.admin.alumnos-index', compact('alumnos'));
    }
}
