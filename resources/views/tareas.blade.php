@extends('index')

@section('contenido')
    <form method="post" class="col-4 mt-4" action="/tarea">
        {{csrf_field()}}
        <p class="lead">Nueva tarea</p>
        <label><b>Tarea</b></label><br>
        <input type="text" name="nombre" class="form-control"><br>
        <button class="btn bg-secondary text-white" type="submit">+ Añadir</button>
    </form>

    <div class="mt-5">
        <p class="lead">Tareas actuales</p>
        <label class="mb-2"><b>Tarea</b></label><br>
        <table>
            @if (count($tareas) > 0)
                @foreach ($tareas as $tarea)
                    <tr>
                        <td class="pe-5 me-5">{{ $tarea->nombre }}</td>
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
