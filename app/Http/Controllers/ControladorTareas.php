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
        $validate = $request->validate(
            [
                'nombre_' => ['required'],
                'usuario' => ['required'],
            ],
            [
                'nombre_.required' => "'Tarea' no introducida",
                'usuario.required' => "'Usuario' no seleccionado",
            ]
        );

        Tarea::create([
            'nombre' => $validate['nombre_'],
            'usuario_id' => $validate['usuario'],
        ]);

        return redirect('nuevo');
    }

    public function nuevoUsuario(Request $request)
    {
        $validate = $request->validate(
            [
                'nombre' => ['required'],
                'apellido' => ['required'],
            ],
            [
                'nombre.required' => "'Nombre' no introducido",
                'apellido.required' => "'Apellido' no introducido",
            ]
        );

        Usuario::create([
            'nombre' => $validate['nombre'],
            'apellido' => $validate['apellido'],
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

    public function mostrarAvanzado(Request $request)
    {
        if ($request->get('usuario') == "x" && $request->get('fecha') == null) {
            $tareas = DB::table('tareas')->get();
        } else if ($request->get('fecha') == null) {
            $tareas = DB::table('tareas')->where('usuario_id', $request->get('usuario'))->get();
        } else if ($request->get('usuario') == "x") {
            $tareas = DB::table('tareas')->whereDate('updated_at', '>=', $request->get('fecha'))->get();
        } else {
            $tareas = DB::table('tareas')->whereDate('updated_at', '>=', $request->get('fecha'))->where('usuario_id', $request->get('usuario'))->get();
        }
        return view('result2', ['usuarios' => DB::table('usuarios')->get(), 'tareas' => $tareas]);
    }
}
