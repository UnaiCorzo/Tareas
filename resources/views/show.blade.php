@extends('index')

@section('mostrar')

<div class="mt-5">
    <p class="lead">Tareas actuales</p>
    <label class="mb-2"><b>Tarea</b></label><br>
    <table>
        @if (count($tareas) > 0)
        @foreach ($tareas as $tarea)
        <tr>
            <td class="pe-5 me-5">Tarea: <b>{{ $tarea->nombre }}</b></td>
            <td class="pe-5 me-5">Usuario: <b>{{ App\Models\Usuario::find($tarea->usuario_id)->nombre }}</b></td>
            <td class="ps-5 text-danger">
                <form action="/tarea/{{ $tarea->id }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button class="btn btn-sm pe-2 ps-2 m-0 bg-danger">
                        <span class="text-white">X</span>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
        @endif
    </table>
</div>

@endsection
