@extends('search')

@section ('res')

<ul class="mt-3 ms-3">
    @foreach ($tareas as $tarea)
    <li class="pe-5 me-5">{{ $tarea->nombre }}</li>
    @endforeach
</ul>

@endsection