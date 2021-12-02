@extends('index')

@section('contenido')

<form method="post" class="col-4 mt-4" action="/tarea">
    {{csrf_field()}}
    <p class="lead">Nueva tarea</p>

    <label><b>Tarea</b></label><br>
    <input type="text" name="nombre_" class="@error('nombre_') @enderror form-control"><br>

    @error('nombre_')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label><b>Usuario</b></label><br>
    <select id="usuario" name="usuario" class="@error('usuario') @enderror form-select mb-4">
        <option value="">Selecciona</option>
        @foreach ($usuarios as $usuario)
        <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
        @endforeach
    </select>

    @error('usuario')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <br>
    <button class="btn bg-secondary text-white" type="submit">+ Añadir</button>
</form>

<br>

<form method="post" class="col-4 mt-4" action="/usuario">
    {{csrf_field()}}
    <p class="lead">Nuevo usuario</p>

    <label><b>Nombre</b></label><br>
    <input type="text" name="nombre" class="@error('nombre') @enderror form-control"><br>

    @error('nombre')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label><b>Apellido</b></label><br>
    <input type="text" name="apellido" class="@error('apellido') @enderror form-control mb-4">

    @error('apellido')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <br>
    <button class="btn bg-secondary text-white" type="submit">+ Añadir</button>
</form>

@endsection