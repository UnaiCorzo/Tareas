<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class ControladorTareas extends Controller
{
    function nuevaTarea(Request $request) {
        if ($request->get('nombre') == "") {
            return view("error");
        }
        Tarea::create([
            'nombre' => $request->get('nombre'),
            'usuario_id' => $request->get('usuario'),
        ]);

        return redirect("nuevo");   
    }

    function nuevoUsuario(Request $request) {
        Usuario::create([
            'nombre' => $request->get('nombre'),
            'apellido' => $request->get('apellido'),
        ]);

        return redirect("nuevo");
    }

    function nuevo() {
        return view('new', ['usuarios' => DB::table('usuarios')->get()]);
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
        $tareas = DB::table('tareas')->where('nombre', 'like', '%'.$filter.'%')->get();
        return view('result', ['tareas' => $tareas]);
    }
}
