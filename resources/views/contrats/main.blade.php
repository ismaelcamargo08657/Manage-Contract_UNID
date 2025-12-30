@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10">

                <div class="card shadow-lg border-0 rounded-4 bg-white">

                    <div class="card-header rounded-top-4 px-4 py-3 d-flex align-items-center colorprincipal">
                        <span class="h5 mb-0">
                            <i class="fa-solid fa-user-check me-2"></i>Proceso de Contratación - Paso 2/3
                        </span>
                    </div>

                    <div class="card-body p-4">

                        <div class="mb-4">
                            <label class="h5 text-secondary">Bienvenido(a):</label><br>
                            <span class="fw-bold fs-4 nombreTrabajador text-dark">
                                {{ isset($nombreCompleto) ? strtoupper($nombreCompleto) : 'COLABORADOR' }}
                                                                                          

                            </span>
                        </div>



                        <div class="row g-4 mt-2">

                            <div class="col-md-3">
                                <div class="card shadow-sm text-center p-3 h-100 card-step">

                                    <i class="fa-solid fa-file-signature fa-2x mb-2"></i>
                                    <h6 class="fw-bold mb-2">Firma Digital</h6>

                                    @if ($contrato && $contrato->status_ine == 0 && $contrato->status_firma == 0)
                                        <span class="badge bg-primary mb-2">
                                            <i class="fa-solid fa-check"></i> Completado
                                        </span>

                                        <p class="text-primary small">
                                            Firma electrónica finalizada
                                        </p>
                                    @else
                                        <p class="text-muted small">
                                            Realiza tu firma electrónica
                                        </p>

                                        <a href="{{ route('firma_digital') }}"
                                            class="btn btn-outline-primary btn-sm mt-auto">
                                            Revisar
                                        </a>
                                    @endif

                                </div>
                            </div>


                            


                            <div class="col-md-3">
                                <div class="card shadow-sm text-center p-3 h-100 card-step">

                                    <i class="fa-solid fa-file-contract fa-2x mb-2"></i>
                                    <h6 class="fw-bold mb-2">Contrato Digital</h6>

                                    @if ($contrato && $contrato->status_contratos == 0)
                                        <span class="badge bg-primary mb-2">
                                            <i class="fa-solid fa-check"></i> Completado
                                        </span>

                                        <p class="text-primary small">
                                            Contrato firmado correctamente
                                        </p>
                                    @else
                                        <p class="text-muted small">
                                            Revisa y firma tu contrato
                                        </p>

                                        <a href="{{ route('contrato') }}" class="btn btn-outline-primary btn-sm mt-auto">
                                            Revisar
                                        </a>
                                    @endif

                                </div>
                            </div>





                            <div class="col-md-3">
                                <div class="card shadow-sm text-center p-3 h-100 card-step">
                                    <i class="fa-solid fa-mobile-screen-button fa-2x mb-2"></i>
                                    <h6 class="fw-bold mb-2">Prosman App</h6>
                                    <p class="text-muted small">Ir a la descarga</p>
                                    <a href="https://play.google.com/store/apps/details?id=com.josuesito.RegistroApp&pli=1"
                                        target="_blank" class="btn btn-outline-primary btn-sm mt-auto">
                                        Revisar
                                    </a>
                                </div>
                            </div>

                        </div>



                        @if (
                            $contrato->status_ine == 0 &&
                                $contrato->status_firma == 0 &&
                                $contrato->status_anexos == 0 &&
                                $contrato->status_contratos == 0)
                            <div class="d-flex flex-column align-items-center mt-4">
                                <h5 class="fw-bold mb-3">Proceso de Contratación - Paso 3/3</h5>
                                @if ($contrato->pdf_status == 1)
                                    <form action="{{ route('generar.pdf') }}" method="GET" target="_blank"
                                        class="w-100 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary w-75 fw-bold">
                                            <i class="fa-solid fa-file-pdf me-2"></i>Generar Contrato digital PDF
                                        </button>
                                    </form>
                                @endif


                                <button type="button" class="btn btn-secondary w-75 fw-bold mt-3" data-bs-toggle="modal"
                                    data-bs-target="#modalCorreo" id="sendEmail">
                                    <i class="fa-solid fa-envelope me-2"></i>Enviar a mi correo
                                </button>
                                <div class="modal fade" id="modalCorreo" tabindex="-1" aria-labelledby="modalCorreoLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title">Enviar contrato por correo</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <div class="modal-body">
                                                <p>¿Deseas que te enviemos una copia de tu contrato a tu correo personal?
                                                </p>

                                                @if (session('success'))
                                                    <div class="alert alert-success">{{ session('success') }}</div>
                                                @endif

                                                @if (session('error'))
                                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                                @endif

                                                <form action="{{ route('enviar.contrato') }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary w-100">
                                                        Enviar ahora
                                                    </button>
                                                </form>

                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        @else
                            <div class="alert alert-light border text-center rounded-3 mt-4 text-muted ">
                                <i class="fa-solid fa-spinner fa-spin me-2"></i> Aún faltan pasos por completar para generar
                                tu contrato.
                            </div>
                        @endif











                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
