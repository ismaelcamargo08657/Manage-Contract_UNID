@extends('layouts.app') 

@section('content')
<div class="form-container-solicitud-empleo">
    <h2>Formulario - Datos Personales</h2>

    <form>
        <fieldset>
            <legend>Datos Personales</legend>

            <div class="input-group">
                <label for="apellido1">Primer Apellido:</label>
                <input type="text" id="apellidoPaterno" name="apellido1" disabled value="{{ old('apellidoPat', $data->Apellido_Paterno) }}">

                <label for="apellido2">Segundo Apellido:</label>
                <input type="text" id="apellidoMaterno" name="apellido2" disabled value="{{ old('apellidoPat', $data->Apellido_Materno) }}">

                <label for="nombre">Nombres:</label>
                <input type="text" id="nombre" name="nombre" disabled value="{{ old('apellidoPat', $data->nombreColaborador) }}">
            </div>

            <div class="input-group">
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" disabled value="{{ old('apellidoPat', $data->Edad) }}">

                <label for="telefono">Teléfono o Celular:</label>
                <input type="tel" id="telefono" name="telefono" disabled value="{{ old('apellidoPat', $data->Telefono) }}">

                <label for="sexo">Sexo:</label>
                @php
                    $genero = $data->Sexo;
                    $sexo = ($genero === 'H') ? 'Masculino' : 'Femenino';
                @endphp
                <input type="text" id="sexo" name="sexo" value="{{ old('apellidoPat', $sexo) }}" disabled>
            </div>

            <div class="input-group">
                <label for="direccion">Domicilio:</label>
                <input type="text" id="domicilio" name="direccion" value="{{ old('domicilio', $data->Direccion) }}" disabled>

                <label for="colonia">Colonia:</label>
                <input type="text" id="colonia" name="colonia" value="{{ old('colonia', $data->Colonia) }}" disabled>

                <label for="codigo_postal">Código Postal:</label>
                <input type="text" id="codigo_postal" name="codigo_postal" value="{{ old('codigo_postal', $data->Codigo_Postal) }}" disabled>
            </div>

            <div class="input-group">
                <label for="ciudad">Ciudad o Alcaldía:</label>
                <input type="text" id="ciudad" name="ciudad" class="bg-warning" value="{{ old('ciudad', $data->Ciudad ?? '') }}">

                <label for="estado">Entidad Federativa:</label>
                <input type="text" id="estadoPersona" name="estado" value="{{ old('Estado', $data->Estado) }}" disabled>

                <label for="nacimiento">Fecha de Nacimiento:</label>
                <input type="date" id="fechaNacimiento" name="nacimiento" class="bg-warning" value="{{ old('nacimiento', $data->Fecha_Nacimiento ?? '') }}">

                <label for="nacionalidad">Nacionalidad:</label>
                <input type="text" id="nacionalidad" name="nacionalidad" value="{{ old('nacionalidad', $data->Nacionalidad ?? '') }}" disabled>
            </div>

            <div class="input-group">
                <label for="estado_civil">Estado Civil:</label>
                <input type="text" id="estadoCivil" name="estado_civil" class="bg-warning" value="{{ old('estado_civil', $data->Estado_Civil ?? '') }}">
            </div>
        </fieldset>
    </form>
</div>
@endsection

@push('styles')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }

    a {
        text-decoration: none !important;
        color: var(--blanco);
    }

    ul {
        padding-left: 0;
    }

    ul li {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .input-error {
        border: 2px solid red !important;
        background-color: #fff3f3;
    }

    h2 {
        text-align: center;
        background: #009fe3;
        color: white;
        padding: 10px;
        margin-bottom: 15px;
    }

    .form-container-solicitud-empleo {
        background: white;
        padding: 20px;
        border-radius: 14px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 1200px;
        margin: auto;
    }

    fieldset {
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 15px;
    }

    legend {
        font-weight: bold;
        background: #009fe3;
        color: white;
        font-size: 1.2rem;
        padding: 5px 10px;
    }

    .input-group {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 10px;
    }

    .input-group label {
        flex: 1 1 40px;
        font-size: 14px;
    }

    .input-group input {
        flex: 2 1 50px;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .input-circulo {
        flex: 2 1 10px !important;
    }

    .options-info {
        width: 65%;
        display: flex;
    }

    .evaluacion_nombre_realiza {
        display: flex;
    }

    @media (max-width: 600px) {
        .input-group {
            flex-direction: column;
        }
    }
</style>
@endpush
