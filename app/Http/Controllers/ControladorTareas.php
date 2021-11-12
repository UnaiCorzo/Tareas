<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class ControladorTareas extends Controller
{
    function nuevaTarea(Request $request) {
        Tarea::create([
            'nombre' => $request->get('nombre'),
        ]);

        return redirect("/show");   
    }

    function nuevo() {
        return view('new');
    }

    function borrar($id) {
        Tarea::destroy($id);
        return redirect('/show');
    }
}
