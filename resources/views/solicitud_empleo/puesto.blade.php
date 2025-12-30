@extends('layouts.app')

@section('content')
<main class="col-sm-11 col-lg-6 mt-4 mx-auto mb-5 main-solicitud">
    <form class="form-container-solicitud-empleo" id="FormSolicitud" action="{{ route('solicitud.store') }}" method="POST">
        @csrf 
        <h2>SOLICITUD DE EMPLEO</h2>

   
        <input type="hidden" name="puesto" value="{{ $data->Puesto ?? '' }}">
        <input type="hidden" name="fechaIngreso" value="{{ $data->Fecha_Ingreso ?? '' }}">

        <fieldset>
            <legend>Puesto que está solicitando</legend>

            <div class="input-group">
                <label for="puesto">Puesto:</label>
                <input type="text" id="puesto" class="" disabled value="{{ old('puesto', $data->Puesto ?? '') }}">
            </div>

            <div class="input-group">
                <label for="fechaIngreso">Fecha:</label>
                <input type="date" id="fechaIngreso" class="" disabled value="{{ old('fechaIngreso', $data->Fecha_Ingreso ?? '') }}">
            </div>

            <div class="input-group">
                <label for="sueldo_deseado">Sueldo mensual deseado:</label>
                <input type="number" id="sueldo_deseado" name="sueldo_deseado" class="bg-warning {{ $errors->has('sueldo_deseado') ? 'input-error' : '' }}" required value="{{ old('sueldo_deseado') }}">
                @error('sueldo_deseado')
                    <span class="text-danger" style="font-size: 13px;">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group">
                <label for="sueldo_autorizado">Sueldo mensual autorizado:</label>
                <input type="number" id="sueldoAutorizado" name="sueldo_autorizado" disabled>
            </div>

            <div class="input-group">
                <label for="fecha_contratacion">Fecha de contratación:</label>
                <input type="date" id="fechaContratacion" name="fecha_contratacion" class="" disabled value="{{ old('fecha_contratacion', $data->Fecha_Ingreso ?? '') }}">
            </div>
        </fieldset>

        <div style="text-align: center; margin-top: 20px;">
            <button type="submit" class="btn btn-primary">Siguiente</button>
        </div>
    </form>
</main>


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

    .btn-primary {
        background-color: #009fe3;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        color: white;
        border-radius: 5px;
        transition: background-color 0.3s ease-in-out;
    }

    .btn-primary:hover {
        background-color: #007bbd;
    }

    @media (max-width: 600px) {
        .input-group {
            flex-direction: column;
        }
    }
</style>
@endsection
