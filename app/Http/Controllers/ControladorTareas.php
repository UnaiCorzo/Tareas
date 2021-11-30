<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControladorTareas extends Controller
{
    public function nuevaTarea(Request $request)
    {
        if ($request->get('nombre') == "") {
            return view("error");
        }
        Tarea::create([
            'nombre' => $request->get('nombre'),
            'usuario_id' => $request->get('usuario'),
        ]);

        return redirect("nuevo");
    }

    public function nuevoUsuario(Request $request)
    {
        Usuario::create([
            'nombre' => $request->get('nombre'),
            'apellido' => $request->get('apellido'),
        ]);

        return redirect("nuevo");
    }

    public function nuevo()
    {
        return view('new', ['usuarios' => DB::table('usuarios')->get()]);
    }

    public function borrar($id)
    {
        Tarea::destroy($id);
        return redirect('show');
    }

    public function buscarTareas()
    {
        return view('search');
    }

    public function buscarAvanzado()
    {
        return view('advanced', ['usuarios' => DB::table('usuarios')->get()]);
    }

    public function mostrarTareas(Request $request)
    {
        $filter = $request->get('mask');
        $tareas = DB::table('tareas')->where('nombre', 'like', '%' . $filter . '%')->get();
        return view('result', ['tareas' => $tareas]);
    }
}
