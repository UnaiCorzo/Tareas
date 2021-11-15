<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class ControladorTareas extends Controller
{
    function nuevaTarea(Request $request) {
        if ($request->get('nombre') == "") {
            return view("error");
        }
        Tarea::create([
            'nombre' => $request->get('nombre'),
        ]);

        return redirect("nuevo");   
    }

    function nuevo() {
        return view('new');
    }

    function borrar($id) {
        Tarea::destroy($id);
        return redirect('show');
    }

    function buscarTareas() {
        return view('search');
    }

    function mostrarTareas(Request $request) {
        $filter = $request->get('mask');
        $tareas = Tarea::where('nombre', 'like', '%'.$filter.'%')->get();
        return view('result')->with('tareas', $tareas);
    }
}
