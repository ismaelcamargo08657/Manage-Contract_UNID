@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center align-items-start min-vh-100 mt-5">

            <div class="col-md-8 col-lg-5">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-white border-0 text-center rounded-top-4 pb-0">
                        <div class="mb-3">
                            <img src="{{ asset('img/logo1.png') }}" alt="Logo PROSMAN"
                                style="max-height: 130px; filter: drop-shadow(0 0 5px #c9cdcf04);">
                        </div>


                        <h4 class="fw-bold text-dark">Iniciar Sesión</h4>
                        <p class="text-muted small mb-0">Bienvenido, por favor ingresa tus credenciales</p>
                    </div>

                    <div class="card-body bg-light rounded-bottom-4 px-4">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="correo" class="form-label text-dark fw-semibold">
                                    <i class="fas fa-envelope me-1 text-dark"></i> Correo Electrónico
                                </label>
                                <input id="correo" type="email" name="correo" value="{{ old('correo') }}"
                                    class="form-control rounded-3 @error('correo') is-invalid @enderror"
                                    placeholder="tucorreo@ejemplo.com" required autofocus>
                                @error('correo')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label text-dark fw-semibold">
                                    <i class="fas fa-lock me-1 text-dark"></i> Contraseña
                                </label>
                                <input id="password" type="password" name="password"
                                    class="form-control rounded-3 @error('password') is-invalid @enderror"
                                    placeholder="***********" required>
                                @error('password')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary text-white rounded-3 shadow-sm fw-semibold">
                                    <i class="fas fa-sign-in-alt me-1"></i> Ingresar
                                </button>
                            </div>


                            <div class="w-100 d-flex justify-content-center my-3 border-top pt-2">
                                <a href="https://nxg.com.mx" target="_blank" class="mt-1">
                                    <img src="{{ asset('img/nxg3.png') }}" class="powerby" alt="Logo NextGen" width="auto"
                                        height="40px">
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="avsie" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-xl custom-modal-top">
            <div class="modal-content iubenda-modal">
                <div class="modal-header iubenda-header bg-primary text-white">
                    <h5 class="modal-title d-flex align-items-center text-white">
                        <i class="fa-solid fa-circle-info me-2 text-white"></i>
                        PROSMAN AVISOS
                    </h5>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>


                <div class="modal-body">
                    <p>
                        Estimado colaborador(a). A través de esta plataforma se llevará a cabo la celebración del contrato
                        con <b>Servicios e Insumos Prosman, S.A. de C.V.</b>
                    </p>
                    <p>
                        Al utilizar este medio, usted acepta y reconoce la validez del uso de medios digitales...
                        <a href="#" target="_blank">Conoce la NOM</a>.
                    </p>
                    <p>
                        Asimismo, usted otorga su consentimiento para el uso de medios digitales…
                    </p>
                </div>

                <div class="modal-footer iubenda-footer">
                    <button type="button" class="btn btn-light iubenda-btn-secondary" onclick="rechazo()">
                        <i class="fas fa-times me-1"></i> Rechazar
                    </button>
                    <button type="button" class="btn btn-primary iubenda-btn-primary" data-bs-dismiss="modal">
                        <i class="fas fa-check me-1"></i> Aceptar
                    </button>
                </div>

            </div>
        </div>
    </div>





    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const aviso = new bootstrap.Modal(document.getElementById('avsie'));
            aviso.show();
        });

        function rechazo() {
            Swal.fire({
                icon: 'warning',
                title: 'Aviso',
                text: 'No podrás continuar si no aceptas los términos del aviso.',
                confirmButtonText: 'Entendido',
                confirmButtonColor: '#0d6efd',
                showClass: {
                    popup: ''
                },
                hideClass: {
                    popup: ''
                }
            });
        }
    </script>
@endsection



<style>
    body {
        overflow: hidden;
    }
</style>
