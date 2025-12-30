@extends('layouts.app')

@section('content')
    <style>
        #claveElector,#claveElector::placeholder, #estadoCivil {
            color: #ffffff;
            opacity: 1;
            text-transform: uppercase;
        }
    </style>
    <div class="container py-2">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-11">
                <div class="card shadow-lg border-0 rounded-4">
                    <div
                        class="card-header text-dark rounded-top-4 d-flex align-items-center justify-content-between px-4 py-3 colorprincipal">
                        <h4 class="h5 mb-0 d-flex align-items-center">
                            <i class="fa-solid fa-id-card me-2"></i>
                            Datos Personales - Paso 1/3
                        </h4>
                    </div>
                    <div class="card-body p-4 bg-light">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('contrato.guardar') }}" method="post" id="formDatosPersonales" >
                            @csrf
                            <h5 class="my-3 pb-2 border-bottom border-secondary">
                                <i class="fa-solid fa-user me-2 colorsecundario"></i>
                                Información General
                            </h5>

                            <div class="row g-3 needs-validation" novalidate>
                                <div class="col-md-4">
                                    <label class="form-label">Nombre(s)</label>
                                    <input type="text" class="form-control text-capitalize" value="{{ $data->Nombre }}"
                                        readonly name="Nombre" @disabled(true)>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Apellido Paterno</label>
                                    <input type="text" class="form-control text-capitalize" value="{{ $data->Apellido_Paterno }}"
                                        readonly name="Apellido_Paterno" @disabled(true)>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Apellido Materno</label>
                                    <input type="text" class="form-control text-capitalize" value="{{ $data->Apellido_Materno }}"
                                        readonly name="Apellido_Materno" @disabled(true)>
                                </div>


                                <div class="col-md-4">
                                    <label for="fechaNacimiento" class="form-label required">Fecha de Nacimiento</label>
                                    <input type="date" class="form-control fechaNacimiento" id="fechaNacimiento"
                                        name="fechaNacimiento" required value="{{ $data->FechaNacimiento }}" readonly disabled @disabled(true)>
                                </div>

                                <div class="col-md-4">
                                    <label for="edad" class="form-label required">Edad</label>
                                    <input type="text" class="form-control" value="{{ $data->Edad }}" readonly
                                        name="Edad" @disabled(true)>
                                </div>

                                <div class="col-md-4">
                                    <label for="estadoCivil" class="form-label">Estado Civil</label>
                                    <select name="estadoCivil" id="estadoCivil" class="form-select bg-primary" required>
                                        <option value="" selected>Selecciona una opcion</option>
                                        <option value="Casado(a)">Casado(a)</option>
                                        <option value="Soltero(a)">Soltero(a)</option>
                                        <option value="Divorciado(a)">Divorciado(a)</option>
                                        <option value="Viudo(a)">Viudo(a)</option>
                                        <option value="Concubinato">Concubinato</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="genero" class="form-label">Género</label>
                                    <input type="text" class="form-control"
                                        value="{{ $data->Sexo == 'H' ? 'Hombre' : 'Mujer' }}" readonly name="Sexo" @disabled(true)>
                                </div>

                                <div class="col-md-4">
                                    <div class="d-flex align-items-center">
                                        <label for="curp" class="form-label mb-0">CURP</label>
                                        <button type="button"
                                            class="btn btn-primary rounded-circle mx-2 mb-2 p-0 d-flex align-items-center justify-content-center"
                                            style="width: 20px; height: 20px;" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCurp">
                                            ?
                                        </button>
                                    </div>
                                    <input type="text" class="form-control" value="{{ $data->CURP }}" readonly
                                        name="CURP" @disabled(true)>
                                </div>

                                <div class="col-md-4">
                                    <div class="d-flex align-items-center">
                                        <label for="rfc" class="form-label mb-0">RFC</label>
                                        <button type="button"
                                            class="btn btn-primary rounded-circle mx-2 mb-2 p-0 d-flex align-items-center justify-content-center"
                                            style="width: 20px; height: 20px;" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalRFC">
                                            ?
                                        </button>
                                    </div>
                                    <input type="text" class="form-control" value="{{ $data->RFC }}" readonly
                                        name="RFC" @disabled(true)>
                                </div>


                                <div class="col-md-4">
                                    <div class="d-flex align-items-center">
                                        <label for="claveElector" class="form-label required mb-0">Clave del
                                            Elector</label>
                                        <button type="button"
                                            class="btn btn-primary rounded-circle mx-2 mb-2 p-0 d-flex align-items-center justify-content-center"
                                            style="width: 20px; height: 20px;" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCE">
                                            ?
                                        </button>
                                    </div>
                                    <input type="text" class="form-control bg-primary text-light" id="claveElector"
                                        required placeholder="Escribe aqui..." maxlength="18" name="claveElector"
                                        value="{{ old('claveElector') }}">
                                    <div class="invalid-feedback">
                                        Ingrese su Clave de Elector (18 caracteres).
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <label for="telefono" class="form-label required">Teléfono</label>
                                    <input type="text" class="form-control" value="{{ $data->Telefono }}" readonly
                                        name="Telefono" @disabled(true)>

                                    <div class="invalid-feedback">
                                        Ingrese un número de teléfono válido (10 dígitos).
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="email" class="form-label">Correo Electronico</label>
                                    <input type="email" class="form-control" value="{{ $data->Email }}" readonly
                                        name="Email" @disabled(true)>

                                    <div class="invalid-feedback">
                                        Ingresa un correo electronico
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="direccion" class="form-label required">Domicilio Actual</label>
                                    <input type="Direccion" class="form-control text-capitalize" value="{{ $data->Direccion }}" readonly
                                        name="Direccion" @disabled(true)>

                                    {{ old('direccion') }}
                                    <div class="invalid-feedback">
                                        Ingresa una direccion
                                    </div>
                                </div>

                                <h5 class="mt-4 mb-3 pb-2 border-bottom border-secondary text-dark w-100">
                                    <i class="fa-solid fa-phone-volume me-2 colorsecundario"></i>
                                    Contacto de Emergencia
                                </h5>
                                <div class="row g-1">
                                    <div class="col-md-4">

                                        <label for="Emergencia_nombre" class="form-label required">Nombre de
                                            Contacto</label>
                                        <input type="text" class="form-control text-capitalize" id="Emergencia_nombre"
                                            name="Emergencia_nombre" required placeholder="Nombre completo"
                                            value="{{ old('Emergencia_nombre', $data->Emergencia_Nombre) }}">
                                        <div class="invalid-feedback">
                                            Ingresa el nombre del contacto de emergencia.
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="Emergencia_telefono" class="form-label required">Teléfono de
                                            Emergencia</label>
                                        <input type="tel" class="form-control" id="Emergencia_telefono"
                                            name="Emergencia_telefono" required placeholder="10 dígitos"
                                            pattern="[0-9]{10}" maxlength="10"
                                            value="{{ old('Emergencia_telefono', $data->Emergencia_Telefono) }}">
                                        <div class="invalid-feedback">
                                            Ingresa un número de teléfono válido (10 dígitos).
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="Emergencia_parentesco" class="form-label required">Parentesco</label>
                                        <input type="text" class="form-control text-capitalize"
                                            id="Emergencia_parentesco" name="Emergencia_parentesco" required
                                            placeholder="Parentesco"
                                            value="{{ old('Emergencia_parentesco', $data->Emergencia_Parentesco) }}">
                                        <div class="invalid-feedback">
                                            Ingresa el parentesco con el contacto.
                                        </div>
                                    </div>



                                    <h5 class="mt-4 mb-3 pb-2 border-bottom border-secondary text-dark">
                                        <i class="fa-solid fa-briefcase me-2 colorsecundario"></i>
                                        Datos Cedis
                                    </h5>


                                    <div class="row g-1">
                                        <div class="col-md-3">
                                            <label class="form-label">Nombre de Cedis</label>
                                            <input type="text" class="form-control" value="{{ $data->Nombre_Cedis }}"
                                                readonly name="Nombre_Cedis" @disabled(true)>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Ubicación</label>
                                            <input type="text" class="form-control"
                                                value="{{ $data->Direccion_Cedis }}" readonly name="Direccion_Cedis" @disabled(true)>
                                        </div>

                                        <div class="col-md-3">
                                            <label class="form-label">Responsable</label>
                                            <input type="text" class="form-control"
                                                value="{{ $data->Responsable_Cedis }}" readonly name="Responsable_Cedis" @disabled(true)>
                                        </div>
                                    </div>

                                    <div class="alert alert-primary rounded-3 mt-3">
                                        <i class="fa-solid fa-circle-exclamation me-2"></i>
                                        <strong>Estimado colaborador:</strong> es de suma importancia que valide
                                        cuidadosamente todos sus datos.
                                        Si alguno es incorrecto, favor de reportarlo antes de continuar.
                                    </div>



                                    <div class="col-12 mt-4 d-flex justify-content-end">
                                        {{-- <button type="button" class="btn btn-primary text-white fw-bold shadow"
                                            id="btnBorrarCookies">
                                            <i class="fa-solid fa-cookie-bite me-2"></i> Borrar Cookies
                                        </button> --}}
                                        <button type="submit"
                                            class="btn colorprincipal btn-primary text-light fw-bold shadow"
                                            data-bs-toggle="modal" data-bs-target="#modalId" id="">
                                            <i class="fa-solid fa-arrow-right me-2"></i> Continuar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
            <div class="modal-content">

                <div class="modal-header ">
                    <h5 class="modal-title" id="modalTitleId">
                        <i class="fa-solid fa-circle-info me-2"></i> Notificación
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <p class="lead">
                        <i class="fa-solid fa-triangle-exclamation text-warning me-2"></i>
                        Al continuar, los datos que has ingresado y verificado serán utilizados para generar tu
                        contrato digital.
                    </p>
                    <b>¿Deseas proceder con la creación del contrato?</b>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="fa-solid fa-times me-1"></i> No
                    </button>
                    <button type="submit" form="formDatosPersonales" class="btn btn-primary">
                        <i class="fa-solid fa-check me-1"></i> Continuar
                    </button>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="modal fade" id="exampleModalCurp" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        <i class="fa-solid fa-circle-info me-2"></i> Ayuda CURP
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-justify">
                        La Clave Única de Registro de Población (CURP) es un código alfanumérico de 18
                        caracteres utilizado para identificar oficialmente a residentes y ciudadanos
                        mexicanos.
                        Para generarlo visitar este link: <a href="https://www.gob.mx/curp/" target="_blank"
                            rel="noopener noreferrer">Click aquí</a>
                        <br>
                        <div class="mt-3">
                            <img src="{{ asset('img/ayuda/CURO.png') }}" width="100%" alt="CURP" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="exampleModalRFC" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="fa-solid fa-circle-info me-2"></i>
                        Ayuda RFC</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div class="text-justify">
                        Registro Federal de Contribuyentes. El RFC personal es una clave de 13
                        caracteres
                        conformada por letras y números, utilizada por el Gobierno de México para
                        identificar a las personas físicas y morales que desarrollan alguna actividad
                        económica en el país.
                        <br>
                        Para generarlo visita la página oficial del SAT: <a
                            href="https://www.sat.gob.mx/portal/public/tramites-y-servicios" target="_blank"
                            rel="noopener noreferrer">Click aquí!</a>
                        <div class="mt-3">
                            <img src="{{ asset('img/ayuda/RFC.png') }}" width="100%" alt="RFC" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModalCE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="fa-solid fa-circle-info me-2"></i>
                        Ayuda Clave de Elector</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-justify">
                        La clave del elector se localiza en el frente de tu INE.
                        Para consultar más información puedes visitar este link: <a
                            href="https://sitios.ine.mx/archivos2/tutoriales/sistemas/ApoyoInstitucional/SNR/rsc/docs/PDF/clave_electorOCRcredencialVotar.pdf"
                            target="_blank" rel="noopener noreferrer">Click aquí</a>
                        <div class="mt-3">
                            <img src="{{ asset('img/ayuda/INE.png') }}" width="100%" alt="RFC" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="avisoRectificacion" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title" id="modalTitleId">
                        <i class="fa-solid fa-circle-info me-2"></i> Indicaciones de uso
                    </h5>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Completa la información de manera precisa y verifica todos los campos:
                    <ol>
                        <li class="mt-2">- Algunos campos son autocompletados por la plataforma; sin embargo, debes
                            revisarlos y corregirlos si es necesario.</li>
                        <li class="mt-2">- Los campos resaltados en <strong>AZUL</strong> deben ser capturados
                            manualmente.</li>

                    </ol>
                    <b><i class="fa-solid fa-triangle-exclamation me-2 text-danger"></i>Nota: Asegúrate de que todos los
                        datos ingresados sean verídicos.</b>
                </div>
            </div>
        </div>
    </div>
@endsection
