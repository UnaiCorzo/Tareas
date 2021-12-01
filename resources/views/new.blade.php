@extends('index')

@section('contenido')

    <form method="post" class="col-4 mt-4" action="/tarea">
        {{csrf_field()}}
        <p class="lead">Nueva tarea</p>
        <label><b>Tarea</b></label><br>
        <input type="text" name="nombre" class="form-control"><br>
        <label><b>Usuario</b></label><br>
        <select id="usuario" name="usuario">
            @foreach ($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
            @endforeach
        </select><br>
        @yield("error")
        <br>
        <button class="btn bg-secondary text-white" type="submit">+ Añadir</button>
    </form>

    <br>

    <form method="post" class="col-4 mt-4" action="/usuario">
        {{csrf_field()}}
        <p class="lead">Nuevo usuario</p>
        <label><b>Nombre</b></label><br>
        <input type="text" name="nombre" class="form-control">
        <label><b>Apellido</b></label><br>
        <input type="text" name="apellido" class="form-control">
        <br>
        <button class="btn bg-secondary text-white" type="submit">+ Añadir</button>
    </form>

@endsection
