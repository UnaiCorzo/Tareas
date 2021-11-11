@extends('index')

@section('contenido')
    <h3>Lista de tareas</h3>

    <form method="post" class="col-4 mt-4" action="/tarea">
        {{csrf_field()}}
        <p class="lead">Nueva tarea</p>
        <label><b>Tarea</b></label><br>
        <input type="text" name="nombre" class="form-control"><br>
        <input type="submit" value="+ Añadir">
    </form>

    <div class="mt-5">
        <p class="lead">Tareas actuales</p>
        <label><b>Tarea</b></label><br>
        <table>
            @if (count($tareas) > 0)
                @foreach ($tareas as $tarea)
                    <tr>
                        <td>{{ $tarea->nombre }}</td>
                    </tr>
                @endforeach
            @endif
        </table>
    </div>
@endsection
