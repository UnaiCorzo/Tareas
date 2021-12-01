@extends('index')

@section ('avanzado')

<form method="post" class="col-4 mt-4" action="/resultado/advanced">
    {{csrf_field()}}
    <p class="lead">Buscar Avanzado</p>
    <label><b>Fecha</b></label><br>
    <input type="date" name="fecha" class="form-control"><br>
    <label><b>Usuario</b></label><br>
    <select id="usuario" name="usuario">
        <option value="x">Todos</option>
        @foreach ($usuarios as $usuario)
        <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
        @endforeach
    </select><br>
    @yield("error")
    <br>
    <button class="btn bg-secondary text-white" type="submit">Buscar</button>
</form>

@yield('res2')

@endsection