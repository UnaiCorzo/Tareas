@extends('advanced')

@section ('res2')

<ul class="mt-3 ms-3">
    @foreach ($tareas as $tarea)
    <li class="pe-5 me-5"><b>Tarea: </b>{{ $tarea->nombre }} - <b>Usuario: </b>{{ App\Models\Usuario::find($tarea->usuario_id)->nombre }}</li>
    @endforeach
</ul>

@endsection