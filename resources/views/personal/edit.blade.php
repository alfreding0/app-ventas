@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('personal.update', [$personal->id]) }}">
            @csrf
            @method('PUT')

            <div class="col s12 m10 offset-m1 l6 offset-l3 xl6 offset-xl3">
                <div id="panel-left" class="card">

                    <div class="card-content">
                        <span class="card-title primary-text-color primary-text-style">
                            Formulario de Edición
                            </span>
                        <div class="row">
                            <div class="col s12 divider"></div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="nombres" type="text" class="validate" name="nombres" value="{{ $personal->nombres }}">
                                <label for="nombres">Nombres:</label>
                                @error('nombres')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <input id="apellido" type="text" class="validate" name="apellido" value="{{ $personal->apellidos }}">
                                <label for="apellido">Apellidos:</label>
                                @error('apellido')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m4">
                                <input id="direccion" type="text" class="validate" name="direccion" value="{{ $personal->direccion }}">
                                <label for="direccion">Dirección:</label>
                                @error('direccion')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m4">
                                <input id="telefono" type="number" class="validate" name="telefono" value="{{ $personal->telefono }}">
                                <label for="telefono">telefono:</label>
                                @error('telefono')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m4">
                                <select name="genero" id="genero">
                                    <option {{ $personal->genero=='M'?'selected':'' }} value="M">Masculino</option>
                                    <option {{ $personal->genero=='F'?'selected':'' }} value="F">Femenino</option>
                                </select>
                                <label for="genero">Genero:</label>
                                @error('genero')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>

                        <div class="card-action right-align">
                            <button type="submit" class="waves-effect waves-brown btn-flat red-text bold" onclick="showProgress()">Guardar</button>
                        </div>
                    </div>

                </div>
            </div>

        </form>
    </div>


@endsection
