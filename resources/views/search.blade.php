@extends('index')

@section ('buscar')

    <form method="post" class="col-4 mt-4" action="/resultado">
        {{csrf_field()}}
        {{ method_field('get') }}
        <p class="lead">Buscar tarea</p>
        <label><b>Tarea</b></label><br>
        <input type="text" name="mask" class="form-control">
        @yield("error")
        <br>
        <button class="btn bg-secondary text-white" type="submit">Buscar</button>
    </form>
    
    @yield('res')

@endsection
