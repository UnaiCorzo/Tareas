<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class ControladorTareas extends Controller
{
    function nuevo(Request $request) {
        Tarea::create([
            'nombre' => $request->get('nombre'),
        ]);

        return redirect("/");   
    }
}
