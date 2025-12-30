@extends('layouts.app')

@section('content')
    <main class="container my-4">

        <div class="card shadow-lg border-0 rounded-4 p-4">


            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="fw-bold mb-0">
                    <i class="fa-solid fa-id-card me-2"></i>
                    Instrucciones para subir tu INE y firma digital
                </h2>

                <a href="{{ route('contrats.main') }}" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-left me-1"></i> Atrás
                </a>

            </div>

            <div class="row g-4">

                <div class="col-md-6">
                    <div class="instruction-box p-4 border rounded shadow-sm bg-white h-100">

                        <h5 class="fw-bold mb-3">
                            <i class="bi bi-card-image me-2"></i>
                            1.- Subir el anverso del INE
                        </h5>

                        <ul class="small mb-3">
                            <li>1 - Presiona "Seleccionar archivo".</li>
                            <li>2 - Captura o elige una foto clara del anverso de tu INE.</li>
                            <li>3 - Asegúrate de que la imagen sea legible antes de continuar.</li>
                        </ul>


                        <img src="/img/ine2.png" alt="Anverso del INE" class="img-fluid rounded shadow-sm"
                            style="max-width: 225px; display: block; margin: 0 auto;">
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="instruction-box p-4 border rounded shadow-sm bg-white h-100">

                        <h5 class="fw-bold mb-3">
                            <i class="bi bi-card-text text-success me-2"></i>
                            2.- Subir el reverso del INE
                        </h5>

                        <ul class="small mb-3">
                            <li>1 - Presiona "Seleccionar archivo".</li>
                            <li>2 - Captura o elige una foto clara del reverso de tu INE (la parte posterior con el código
                                QR y datos adicionales).</li>
                            <li>3 - Verifica que la imagen sea visible y no borrosa.</li>
                        </ul>


                        <img src="/img/ine1.png" alt="Reverso del INE" class="img-fluid rounded shadow-sm"
                            style="max-width: 225px; display: block; margin: 0 auto;">
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="instruction-box p-4 border rounded shadow-sm bg-white h-100">
                        <h5 class="fw-bold mb-3">
                            <i class="bi bi-pencil-square text-warning me-2"></i>
                            3.- Realizar tu firma digital
                        </h5>

                        <ul class="small mb-3">
                            <li>1 - Usa el recuadro blanco para dibujar tu firma con el dedo o con un mouse de computadora.
                            </li>
                            <li>2 - Intenta que tu firma sea lo más similar posible a la de tu identificación oficial.</li>
                        </ul>


                        <img src="/img/firmaimagen.png" alt="Ejemplo de firma digital" class="img-fluid rounded shadow-sm"
                            style="max-width: 225px; display: block; margin: 0 auto;">
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="instruction-box p-4 border rounded shadow-sm bg-white h-100">
                        <h5 class="fw-bold mb-3">
                            <i class="bi bi-check-circle-fill text-primary me-2"></i>
                            4.- Finalizar
                        </h5>

                        <ul class="small mb-0">
                            <li>1 - Revisa que ambas imágenes sean correctas antes de subirlas y que tu firma esté bien
                                hecha.</li>
                            <li>2 - Cuando todo esté en orden, presiona el botón "Guardar firma" para continuar el proceso.
                            </li>
                        </ul>


                        <img src="/img/firma4.png" alt="Instrucción para finalizar" class="img-fluid rounded shadow-sm mt-3"
                            style="max-width: 225px; display: block; margin: 0 auto;">
                    </div>
                </div>

            </div>

            @if ($status_ine == 0 && $status_firma == 0)
                <div class="alert alert-primary text-center mt-4">
                    <strong>¡Proceso completado!</strong><br>
                    Has subido correctamente tus fotos del INE y tu firma digital.
                </div>
            @endif



            <hr class="my-4">


            @if ($status_ine == 1)
                <form id="formIne" method="POST" action="{{ route('guardar.ine') }}" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="idColaborador" value="{{ auth()->user()->idColaborador }}">

                    <div class="mb-3">
                        <label class="form-label fw-bold">Foto del anverso</label>
                        <input type="file" class="form-control" name="ine_anverso" id="ine_anverso" accept="image/*"
                            required>
                        <img id="preview_anverso" class="img-fluid mt-2 d-none border rounded" style="max-width:250px;">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Foto del reverso</label>
                        <input type="file" class="form-control" name="ine_reverso" id="ine_reverso" accept="image/*"
                            required>
                        <img id="preview_reverso" class="img-fluid mt-2 d-none border rounded" style="max-width:250px;">
                    </div>

                    <button type="button" class="btn btn-primary" id="btn_previsualizar">
                        Previsualizar fotos
                    </button>

                    <button type="submit" class="btn btn-success d-none" id="btn_subir">
                        Subir fotos
                    </button>

                </form>
            @endif









            <hr class="my-4">



            @if ($status_ine == 0 && $status_firma == 1)
                <section id="firmadiv">

                    <h4 class="fw-semibold">Firma digital</h4>

                    <p class="small text-muted">
                        Esta firma digital será usada en documentos conforme a la legislación vigente.
                    </p>

                    <div class="d-flex justify-content-center mb-3">
                        <canvas id="signature-pad" class="border rounded shadow-lg bg-white"
                            style="width: 80%; height: 200px;"></canvas>
                    </div>

                    <div class="d-flex justify-content-center mb-3">
                        <button type="button" id="clear" class="btn btn-warning">
                            <i class="fas fa-undo"></i> Resetear
                        </button>
                    </div>

                    <form id="firmForm" method="POST" action="{{ route('guardar.firma') }}">
                        @csrf

                        <input type="hidden" name="idColaborador" value="{{ auth()->user()->idColaborador }}">
                        <input type="hidden" name="firma" id="firma">

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa-solid fa-floppy-disk"></i> Guardar Firma
                            </button>
                        </div>

                    </form>

                </section>
            @endif




        </div>
    </main>
@endsection
