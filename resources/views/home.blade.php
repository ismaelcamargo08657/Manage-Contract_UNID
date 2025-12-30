@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0 rounded-4 bg-light">
                    <div
                        class="card-header text-white rounded-top-4 d-flex align-items-center justify-content-between px-4 py-3 colorprincipal">
                        <span class="h5 mb-0 text-dark">
                            <i class="fa-solid fa-file-contract me-2 text-dark"></i> PROSMAN UNID – CONTRATO DIGITAL
                        </span>
                    </div>
                    <div class="card-body p-4">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="bg-white rounded p-3 shadow-sm mb-4">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('img/logo1.png') }}" height="60" class="me-4">
                                <h2 class="fs-5">Plataforma Digital de Documentación Laboral</h2>
                            </div>
                            <div class="text-justify">
                                <p class="mb-2">
                                    <i class="fa-solid fa-user-circle me-2 colorsecundario"></i>
                                    Bienvenido(a):
                                    <span class="fw-bold text-uppercase">
                                        {{ isset($nombreCompleto) ? strtoupper($nombreCompleto) : 'COLABORADOR' }}
                                    </span>
                                </p>

                                <p>
                                    A través de esta plataforma, se llevará a cabo la celebración de tu contrato digital,
                                    así como la captura completa de tu información. Es fundamental que todos los datos
                                    ingresados sean verídicos. En caso de detectarse información falsa o incorrecta,
                                    podrá ser motivo de rescisión del contrato digital.
                                </p>

                                <p class="fw-bold">Para continuar, sigue los siguientes pasos:</p>
                            </div>


                            <div class="container mt-4">
                                <div class="row justify-content-center">


                                    <div class="col-md-3 col-sm-6 mb-3">
                                        <div class="card text-center shadow-sm h-100">
                                            <div class="card-body">
                                                <i class="fa-solid fa-pencil-alt fa-2x mb-3 colorsecundario"></i>
                                                <h5 class="card-title fw-bold">Paso 1</h5>
                                                <p class="card-text">Llena los campos con tu información</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-3 col-sm-6 mb-3">
                                        <div class="card text-center shadow-sm h-100">
                                            <div class="card-body">
                                                <i class="fa-solid fa-file-circle-check fa-2x mb-3 colorsecundario"></i>
                                                <h5 class="card-title fw-bold">Paso 2</h5>
                                                <p class="card-text">Verifica tu información y genera tu contrato</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-3 col-sm-6 mb-3">
                                        <div class="card text-center shadow-sm h-100">
                                            <div class="card-body">
                                                <i class="fa-solid fa-signature fa-2x mb-3 colorsecundario"></i>
                                                <h5 class="card-title fw-bold">Paso 3</h5>
                                                <p class="card-text">Firma tu Contrato Digital</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>


                        <div class="p-3 bg-white rounded shadow-sm">
                            <div class="form-check mb-3">
                                <input class="form-check-input bg-info" type="checkbox" id="aceptTermn">
                                <label class="form-check-label" for="aceptTermn">
                                    Acepto, bajo protesta de decir verdad, que todos los datos ingresados en esta plataforma
                                    son verídicos y asumo las consecuencias en caso de falsedad o tergiversación.
                                </label>
                            </div>


                            <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content shadow-lg border-0">


                                        <div class="modal-header bg-white text-dark">
                                            <h5 class="modal-title fw-bold" id="termsModalLabel">
                                                <i class="fa-solid fa-file-contract me-2"></i> Términos y Condiciones
                                            </h5>
                                        </div>


                                        <div class="modal-body p-4" style="max-height: 60vh; overflow-y: auto;">

                                            <h4 class="mb-3">
                                                <i class="fa-solid fa-scroll text-dark me-2"></i> TÉRMINOS Y CONDICIONES
                                                DE USO
                                            </h4>

                                            <p><strong><i class="fa-solid me-2 text-secondary"></i>Política
                                                    válida a partir de marzo 2025.</strong></p>



                                            <p>
                                                TÉRMINOS Y CONDICIONES — PROSMAN<br>
                                                Servicios e Insumos Prosman, S. A de C. V., es una persona jurídica de
                                                derecho privado,
                                                y describe a través de este documento las normas de uso del sitio
                                                *proximamente*
                                                y de cualquier otro sitio web, tienda o aplicación operada por el
                                                titular.<br><br>

                                                Al navegar por este sitio web, consideramos que está de acuerdo con las
                                                condiciones
                                                de uso que figuran a continuación. Si no está de acuerdo con los términos
                                                mencionados,
                                                le sugerimos no realizar uso de este sitio web, y, por ende, registrarse o
                                                enviar
                                                sus datos personales.<br><br>

                                                En caso de cambiar nuestras condiciones de uso, publicaremos el nuevo
                                                ordenamiento
                                                en este sitio web, con una fecha de revisión actualizada. Mencionando que se
                                                puede
                                                modificar este documento en cualquier momento. Si el cambio es
                                                significativo, se le
                                                informará de inmediato utilizando los canales de contacto proporcionados,
                                                mismos que
                                                se tendrán en nuestra base de datos.<br><br>

                                                El uso de este sitio web después de los requerimientos mencionados,
                                                tácitamente indica
                                                que usted acepta las condiciones de uso revisadas. Si después de leer la
                                                versión
                                                revisada y no está de acuerdo con sus términos, por favor, concluir
                                                acceso.<br>




                                            <p>
                                                <i class="fa-solid fa-circle-info text-dark me-1"></i>
                                                Al navegar por este sitio web, acepta automáticamente los términos
                                                descritos.
                                            </p>

                                            <hr>


                                            <h5><i class="fa-solid fa-user-check text-dark me-2"></i> 1. Usuario</h5>
                                            <p>
                                                El uso de este sitio web le otorga automáticamente la condición de
                                                Usuario e implica su plena aceptación de todas las directrices y
                                                condiciones incluidas en estas Condiciones. <b>Sin alguna
                                                    responsabilidad para la razon social o contratante.</b>
                                            </p>

                                            <h5><i class="fa-solid fa-shield-halved text-dark me-2"></i> 2. Adhesión y
                                                Política de Privacidad</h5>
                                            <p>
                                                El uso de este sitio web implica la adhesión a estas Condiciones de
                                                Uso y a la versión más actualizada de la Política de Privacidad de
                                                Prosman.
                                            </p>

                                            <h5><i class="fa-solid fa-key text-dark me-2"></i> 3. Condiciones de acceso
                                            </h5>
                                            <p>
                                                En general el acceso al sitio web de Prosman es gratuito, y es
                                                responsabilidad del usuario proporcionar la información verídica,
                                                correcta, auténtica, válida, completa y actualizada, de suma
                                                importancia es no revelar su nombre de usuario y contraseña a
                                                terceros.
                                            </p>

                                            <h5><i class="fa-solid fa-laptop-code text-dark me-2"></i> 4. Uso de la
                                                Plataforma</h5>
                                            <ul>
                                                <li><i class="fa-solid fa-check text-dark me-1"></i>Los usuarios deben
                                                    ingresar su información de manera precisa
                                                    para la generación de contratos y anexos.</li>
                                                <li><i class="fa-solid fa-id-card me-1 text-dark"></i>Se requiere la carga
                                                    de documentos personales, incluyendo INE
                                                    por ambas partes..</li>
                                                <li><i class="fa-solid fa-pen-nib me-1 text-dark"></i>La firma digital es
                                                    vinculante, teniendo validez legal conforme
                                                    a la normativa vigente.</li>
                                                <li><i class="fa-solid fa-file-pdf me-1 text-dark"></i>Los documentos se
                                                    convertirán a formato PDF y serán enviados al
                                                    correo electrónico proporcionado por el usuario.</li>
                                            </ul>

                                            <h5><i class="fa-solid fa-cookie-bite text-dark me-2"></i> 5. Cookies</h5>
                                            <p>
                                                La información sobre el uso que usted hace de este sitio web puede
                                                recogerse a través de las cookies. Mismas que permiten recoger toda
                                                información: tipo de navegador, tiempo de permanencia en el sitio
                                                web, páginas visitadas, preferencias de idioma y otros datos de
                                                tráfico anónimos. Nosotros y nuestros proveedores de servicios
                                                utilizamos la información para la protección de la seguridad,
                                                facilitando la navegación y mostrando la información de manera más
                                                eficiente, personalizando su experiencia al utilizar el presente
                                                sitio web.
                                            </p>
                                            <p>
                                                Si no desea que su información sea tratada a través de las cookies,
                                                existe un procedimiento sencillo en la mayoría de los navegadores
                                                que permite rechazarlas automáticamente o de la opción de aceptar o
                                                rechazar la transferencia de una cookie específica (o varias) de un
                                                sitio web concreto a su ordenador. Sin embargo, esto puede crear
                                                inconvenientes en el uso del sitio web.
                                            </p>

                                            <h5><i class="fa-solid fa-lightbulb text-dark me-2"></i> 6. Propiedad
                                                intelectual</h5>
                                            <p>Todos los elementos de Prosman son propiedad intelectual de la misma
                                                o de sus licenciantes. Estos términos y el uso del sitio web no le
                                                otorgan ninguna licencia o derecho de uso de los derechos de
                                                propiedad intelectual de Prosman o de cualquier tercero.</p>

                                            <h5><i class="fa-solid fa-link text-darl me-2"></i> 7. Enlaces externos</h5>
                                            <p>
                                                Este sitio web puede contener, (en ocasiones) enlaces de hipertexto
                                                que le redirigirán a sitios web de nuestros socios, anunciantes,
                                                proveedores, etc. Si hace clic en uno de estos enlaces a cualquiera
                                                de estos sitios, recuerde que cada sitio tiene sus propias prácticas
                                                de privacidad y que nosotros no somos responsables de estas
                                                políticas.
                                            </p>
                                            <p>
                                                No nos responsabilizamos de las políticas y prácticas de
                                                recopilación, uso y divulgación de otras organizaciones, como
                                                Facebook, Apple, Google, Microsoft o de cualquier otro proveedor de
                                                servicios.
                                            </p>

                                            <h5><i class="fa-solid fa-clock-rotate-left text-dark me-2"></i> 8. Plazos
                                                y modificaciones</h5>
                                            <p>
                                                El funcionamiento de este sitio web es por tiempo indefinido. La
                                                totalidad del sitio web o cada una de sus secciones podrá ser
                                                cerrada, suspendida o interrumpida unilateralmente por Servicios e
                                                Insumos Prosman, S. A. de C. V., en cualquier momento y sin previo
                                                aviso.
                                            </p>

                                            <h5><i class="fa-solid fa-database text-dark me-2"></i> 9. Datos personales
                                            </h5>
                                            <p>
                                                Durante el uso de este sitio web, ciertos datos personales serán
                                                recogidos y procesados por Servicios e Insumos Prosman S. A de C.
                                                V., y/o los Socios. Las normas relativas al tratamiento de los datos
                                                personales se encuentran estipuladas en la Política de Privacidad.
                                            </p>

                                            <h5><i class="fa-solid fa-user-shield text-dark me-2"></i> 10. Responsabilidad
                                                del Usuario</h5>
                                            <ul>
                                                <li><i class="fa-solid fa-check text-dark me-1"></i>El usuario garantiza que
                                                    la información ingresada es verídica y
                                                    actualizada.</li>
                                                <li><i class="fa-solid fa-ban text-dark me-1"></i>No está permitido el uso
                                                    de la Plataforma para fines
                                                    fraudulentos o ilícitos.</li>
                                                <li><i class="fa-solid fa-gavel text-dark me-1"></i>En caso de falsificación
                                                    de documentos, la empresa podrá tomar
                                                    las acciones legales correspondientes.</li>
                                            </ul>

                                            <h5><i class="fa-solid fa-scale-balanced text-dark me-2"></i> 11. Ley
                                                Aplicable</h5>
                                            <p> Estos Términos se rigen por las leyes de México y cualquier disputa
                                                será resuelta ante los tribunales competentes de dicha jurisdicción.</p>

                                            <h5><i class="fa-solid fa-envelope-circle-check text-dark me-2"></i> 12.
                                                Contacto</h5>
                                            <p>
                                                En caso de existir dudas o aclaraciones, con gusto puede
                                                contactarnos a través del correo electrónico <a
                                                    href="atn.clientes@prosman.com">atn.clientes@prosman.com</a>,
                                                donde responderemos a la brevedad.
                                            </p>

                                        </div>


                                        <div class="modal-footer bg-light">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-check me-2"></i> Aceptar Términos y Condiciones
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>



                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">

                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                <i class="fa-solid fa-file-contract me-2"></i>
                                                Confirmación de términos y condiciones
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <i class="fa-solid fa-check-circle me-2 colorsecundario"></i>
                                            Estoy de acuerdo con los términos y condiciones
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                                                Aceptar
                                            </button>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>


                        <div class="d-flex justify-content-center mb-3 mt-4">
                            <button class="btn btn-primary w-25 text-white fw-bold" id="comenzar"
                                data-url="{{ route('informacionColaborador') }}">
                                <i class="fa-solid fa-check me-2"></i>
                                Aceptar
                            </button>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
