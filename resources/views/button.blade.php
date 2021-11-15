@extends('show')

@section ('boton')

    <form action="/tarea/{{ $tarea->id }}" method="post">
        {{ csrf_field() }}
        {{ method_field('delete') }}
        <button class="btn btn-sm pe-2 ps-2 m-0 bg-danger">
            <span class="text-white">X</span>
        </button>
    </form>

@endsection
