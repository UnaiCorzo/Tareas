@extends('index')

@section('mostrar')

<div class="mt-5">
    <p class="lead">Tareas actuales</p>
    <label class="mb-2"><b>Tarea</b></label><br>
    <table>
        @if (count($tareas) > 0)
        @each('delete', $tareas, "tarea")
        @endif
    </table>
</div>

@endsection