@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('personal.create') }}" class="waves-effect waves-light btn-small"><i class="material-icons left">add_to_queue</i>Registrar</a>
        </div>
        <div class="col s8">
            <h5>LISTA DE PRODUCTOS</h5>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>nombre</th>
                        <th>STOCK</th>
                        <th>precio (Bs.)</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($personales as $persona)
                            <tr>
                                <td>{{ $persona->id }}</td>
                                <td>{{ $persona->nombres }}</td>
                                <td>{{ $persona->apellidos }}</td>
                                <td>{{ $persona->direccion }}</td>
                                <td>{{ $persona->telefono }}</td>
                                <td>{{ $persona->genero === 'M'?'Masculino':'Femenino' }}</td>
                                <td>
                                   <a href="{{ route('personal.show', [$persona->id]) }}"><span class="new badge teal" data-badge-caption="ver"></span></a>
                                    <a href="{{ route('personal.edit', [$persona->id]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('personal.destroy', [$persona->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
