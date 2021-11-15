@extends('index')

@section('contenido')

    <form method="post" class="col-4 mt-4" action="/tarea">
        {{csrf_field()}}
        <p class="lead">Nueva tarea</p>
        <label><b>Tarea</b></label><br>
        <input type="text" name="nombre" class="form-control">
        @yield("error")
        <br>
        <button class="btn bg-secondary text-white" type="submit">+ Añadir</button>
    </form>

@endsection
