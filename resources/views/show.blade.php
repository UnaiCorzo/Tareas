@extends('index')

@section('mostrar')

    <div class="mt-5">
        <p class="lead">Tareas actuales</p>
        <label class="mb-2"><b>Tarea</b></label><br>
        <table>
            @if (count($tareas) > 0)
                @foreach ($tareas as $tarea)
                    <tr>
                        <td class="pe-5 me-5">{{ $tarea->nombre }}</td>
                        <td class="ps-5 text-danger">
                            @yield('boton')
                        </td>
                    </tr>
                @endforeach
            @endif
        </table>
    </div>

@endsection