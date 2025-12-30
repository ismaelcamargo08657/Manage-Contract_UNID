@extends('layouts.app')
@section('content')
@php
    $idColaborador = auth()->user()->idColaborador
@endphp

<section class="container container-main-sections">
    <div class="border rounded px-3 col-md-8 col-sm-11 col-lg-5 mx-auto mt-5 shadow bg-light">
        <label class="h5 mt-3">Documento 0/7 <span class="nombreTrabajador"></span></label>
        <table class="table table primary">
            <tr>
                <th>Documento</th>
                <th>Estatus</th>
            </tr>
            <tr class="seccion_1">
                <td><i class="fa-solid fa-bookmark"></i>Datos Generales</td>
                <td><a href="{{ url('c_datos_generales') }}" class="btn  btn-warning">Revisar</a></td>
            </tr>
            <tr class="seccion_2">
                <td><i class="fa-solid fa-bookmark"></i> Enfermedades Crónicas y Salud General</td>
                <td><a href="./anexo.html" class="btn btn-primary">Revisar</a></td>
            </tr>
            <tr class="seccion_3">
                <td><i class="fa-solid fa-bookmark"></i> Intervenciones y Cirugías || Higiene Bucal || Embarazo </td>
                <td><a href="./contrato.html" class="btn btn-primary">Revisar</a></td>
            </tr>
            <tr class="seccion_4">
                <td><i class="fa-solid fa-bookmark"></i> Discapacidad || Antecedentes Familiares </td>
                <td><a href="./finiquito.html" class="btn btn-primary">Revisar</a></td>
            </tr>
            <tr class="seccion_5">
                <td><i class="fa-solid fa-bookmark"></i> DECLARACIONES PERSONALES </td>
                <td><a href="./finiquito.html" class="btn btn-primary">Revisar</a></td>
            </tr>
            <tr class="seccion_6">
                <td><i class="fa-solid fa-bookmark"></i> ENCUESTA COVID </td>
                <td><a href="./finiquito.html" class="btn btn-primary">Revisar</a></td>
            </tr>
        </table>
        <div class="mb-3 mensaje-colaborador">
            <span>Haz culminado de manera correcta tu proceso de
                contratacion.</span>
        </div>
        <div class="modal-body d-flex justify-content-center my-4">
            <button type="button" class="btn btn-primary" id="generarPdfCuestionario">
                Generar documento
            </button>
        </div>

        <div class="modal fade" id="modalCarga" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div
                        class="modal-body text-center d-flex flex-column justify-content-center align-items-center">
                        <iframe
                            src="https://lottie.host/embed/99332743-1bdd-4247-98c9-dc854e505a3d/ZeUnK5IO1C.lottie"></iframe>
                        <p>Generando PDF, por favor espere...</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

<!-- <form class="container border rounded mt-4 mb-5 bg-light" id="FormMedico" method="POST" action="{{ Route('saveCuestionarioMedico') }}" >
    @csrf
    <div class="d-flex flex-column align-items-center py-3">
        <h3>ANEXO IV</h3>
        <h3>ENCUESTA DE CONDICIONES DE SALUD DEL TRABAJADOR</h3>
        <h3>SERVICIOS E INSUMOS PROSMAN S.A DE C.V.</h3>
    </div>
    <div class="text-justify">
        <p>Esta encuesta esta dirijida al <strong>"TRABAJADOR"</strong> que se encuentra en el proceso
            de contartación en <strong>SERVIVIOS E INSUMOS PROSMAN S.A. DE C.V</strong>, la encuesta se
            aplica con el fin de evaluar y determinar que se encuentra en óptimas condiciones de salud,
            para su contartación con <strong>"LA EMPRESA"</strong>. </p>
            @php
                $datos = json_decode(Cookie::get('datos_personales'), true);
            @endphp
        <p><strong>Manifiesto bajo protesta de decir verdad, que Yo C. <span class="nombreTrabajador">{{ $data->nombreColaborador . ' ' . $data->Apellido_Paterno . ' ' . $data->Apellido_Materno}}</span>,
                con fecha de nacimiento <span class=""> <input type="date" placeholder="Fecha de Nacimiento"
                        name="fechaNacimiento" class="form-control bg-warning" id="fechaNacimiento" value="{{ $datos['fechaNacimiento'] ?? '' }}"> </span>, declaro
                que al día de hoy me
                encuentro en un estado óptimo de salud; por lo cual acepto someterme a las distintas evaluaciones medicas
                según requiera “LA EMPRESA”, estas evaluaciones son enunciativas y no limitativas a efecto
                de verificar las declaraciones de este cuestionario y que gozo de buena salud para determinar
                mi permanencia en el empleo.</strong></p>
                <p><strong>En el supuesto de falsear la información dentro de este Cuestionario Médico tendrá
                como consecuencias conforme al artículo 47 fracción I de la Ley Federal del Trabajo, por lo
                que de forma inmediata se procederá a un Aviso de Recisión Laboral sin responsabilidad para
                “LA EMPRESA”.</strong></p>
    </div>
    <div class="table-responsive">
        <table class="table border">
            <tr>
                <td colspan="3" style="text-align: center;"> CUESTIONARIO MÉDICO</td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: center;">DATOS GENERALES</td>
            </tr>
            <tr>
                <td>NOMBRE COMPLETO:</td>
            </tr>
            <tr>
                <td colspan="2"><span class="nombreTrabajador">{{ $data->nombreColaborador . ' ' . $data->Apellido_Paterno . ' ' . $data->Apellido_Materno}}</span></td>
            </tr>
            <tr>
                <td colspan="2">LUGAR DE TRABAJO: <span class="nombreCedis">{{ $data->nombreCedis }}</span></td>
            </tr>
            <tr>
                <td class="d-flex">
                    <label for="estadoCivil">ESTADO CIVIL:&nbsp;</label>
                    <select name="estadoCivil" id="estadoCivil" class="bg-warning form-control" style="width: 10rem;">
                        <option value="">Seleccione</option>
                        <option value="Casado">Casado(a)</option>
                        <option value="Soltero">Soltero(a)</option>
                        <option value="Divorciado">Divorciado(a)</option>
                        <option value="Viudo">Viudo(a)</option>
                        <option value="Unión libre">Concubinato</option>
                    </select>
                </td>

            </tr>
            <tr class="">
                <td class=""><label for="">EDAD:</label><span class="edad mx-1"> {{ $data->Edad }}</span> años</td>
            </tr>
            <tr>
                <td class="d-flex"><label for="Peso">PESO:</label><input type="number" step="0.01" placeholder="0"
                        name="Peso" class="bg-warning form-control" style="width:5rem;" id="peso"> Kg.</td>
            </tr>
                @php
                // si es H es mombre
                $genero = $data->Sexo;
                $sexo = ($genero === 'H') ? 'Masculino' : 'Femenino';
            @endphp
            <tr>
                <td class=""><label>SEXO:</label> <span class="sexo">{{ $sexo }}</span></td>
            </tr>
            <tr>
                <td>
                    <label for="Fecha_ultimo_estudio_medico">FECHA ULTIMO EXAMEN MEDICO REALIZADO:</label>
                    <input type="date" placeholder="Fecha_ultimo_estudio_medico" name="Fecha_ultimo_estudio_medico"
                        class="form-control bg-warning" id="fecha_ultimo_estudio_medico">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="altura">ALTURA:</label>
                    <div class="d-flex justify-content-center align-items-center">
                        <input type="text" name="altura" class="form-control bg-warning" id="altura" step="0.01">
                        <p>Cm.</p>
                    </div>

                </td>
            </tr>
        </table>
    </div>
    <div class="seccion">
        <p><strong>INSTRUCCIONES:</strong></p>
        <p>A continuación, debe de leer detalladamente cada una de las preguntas y responder con honestidad y
            siguiendo las indicaciones del presente. Selecciona la opción que
            mejor describa su estado de salud. </p>
        <div>
            <h2 class="mb-2 mt-5">Estado de Salud Actual</h2>
            <label class="pregunta">¿Cómo considera su estado de salud actual?</label><br>
            <input type="radio" id="malo" name="estado_salud" value="malo" id="estado_salud">
            <label for="malo">Malo</label><br>
            <input type="radio" id="regular" name="estado_salud" value="regular">
            <label for="regular">Regular</label><br>
            <input type="radio" id="bueno" name="estado_salud" value="bueno">
            <label for="bueno">Bueno</label><br>
            <input type="radio" id="excelente" name="estado_salud" value="excelente">
            <label for="excelente">Excelente</label>
            <hr>
            <label class="pregunta">¿Cuándo fue su última revisión médica?</label><br>
            <input type="radio" id="hace_un_mes" name="ultima_revision" value="hace_un_mes" id="ultima_revision">
            <label for="hace_un_mes">Hace un mes</label><br>
            <input type="radio" id="hace_seis_meses" name="ultima_revision" value="hace_seis_meses">
            <label for="hace_seis_meses">Hace seis meses</label><br>
            <input type="radio" id="hace_un_ano" name="ultima_revision" value="hace_un_ano">
            <label for="hace_un_ano">Hace un año</label><br>
            <input type="radio" id="ninguna_opcion" name="ultima_revision" value="ninguna_opcion">
            <label for="ninguna_opcion">Ninguna de las opciones</label>
            <hr>
            <label class="pregunta">¿Cuándo fue la última vez que te realizaste estudios médicos de
                rutina incluido química sanguínea?</label>
            <div class="d-flex">
                <input type="date" name="ultima_revision_estudios_fecha" class="me-2 form-control bg-warning"
                    id="ultima_revision_estudios_fecha">
                <input type="text" id="motivo_estudios" placeholder="Ingresa el motivo" name="ultima_revision_estudios"
                    class="form-control bg-warning">
            </div>
            <hr>
            <label class="pregunta">¿Podrias compartir los resultados?</label><br>
            <input type="radio" id="si_estudio_sanguineo" name="compartir_resultados" value="si">
            <label for="si_estudio_sanguineo">Si</label><br>
            <input type="radio" id="no_estudio_sanguineo" name="compartir_resultados" value="no">
            <label for="no_estudio_sanguineo">No</label>
            <hr>
        </div>
    </div>
    <div class="seccion">
        <h2 class="mt-5">Enfermedades Crónicas y Salud General</h2>
        <label class="pregunta">¿Padece algún tipo de enfermedad crónico-degenerativa? (P/E: Diabetes,
            hipertensión, cáncer, osteoporosis, artritis, enfermedades del corazón.) </label><br>
        <input type="radio" id="si_enfermedad" name="enfermedad_cronica" value="si">
        <label for="si_enfermedad">Sí</label><br>
        <input type="radio" id="no_enfermedad" name="enfermedad_cronica" value="no">
        <label for="no_enfermedad">No</label><br>
        <label class="mt-3">Especifique que tipo de enfermedad (si aplica):</label>
        <input type="text" id="especifique_enfermedad" name="especifique_enfermedad" class="form-control bg-warning"
            placeholder="Escribe aqui...">
        <hr>
        <label class="pregunta mt-2">¿En el último año ha padecido dolores musculares, desgarres, esguince,
            luxaciones o fracturas?</label><br>
        <input type="radio" id="si_dolores" name="dolores_musculares" value="si">
        <label for="si_dolores">Sí</label><br>
        <input type="radio" id="no_dolores" name="dolores_musculares" value="no">
        <label for="no_dolores">No</label>
        <br>
        <label class="pregunta mt-3">¿En qué parte del cuerpo y cómo se lo ocasionó?</label><br>
        <input type="text" id="parte_cuerpo_dolores" name="parte_cuerpo_dolores" class="form-control bg-warning"
            placeholder="Escribe aqui...">
        <hr>
        <label class="pregunta  mt-3">¿Cuándo fue la última vez que se enfermó?</label><br>
        <input type="date" id="ultima_enfermedad" name="ultima_enfermedad" class="form-control bg-warning">
        <hr>
        <label class="pregunta mt-3">¿Dónde se atendió y qué tratamiento recibió?</label><br>
        <input type="text" id="atencion_enfermedad" name="atencion_enfermedad" class="form-control bg-warning"
            placeholder="Escribe aqui...">
        <hr>
        <label class="pregunta mt-3">¿Toma algún tipo de medicamento controlado actualmente?</label><br>
        <input type="radio" id="si_medicamentos" name="medicamentos_controlados" value="si">
        <label for="si_medicamentos">Sí</label><br>
        <input type="radio" id="no_medicamentos" name="medicamentos_controlados" value="no">
        <label for="no_medicamentos">No</label>
        <br>
        <label for="nombre_medicamento">Nombre del medicamento y tiempo de administración:</label><br>
        <input type="text" id="nombre_medicamento" name="nombre_medicamento" class="form-control bg-warning"
            placeholder="Escribe aqui...">
        <hr>
        <label class="pregunta mt-3">¿Actualmente se encuentra en tratamiento médico?</label><br>
        <input type="radio" id="si_tratamiento" name="tratamiento_medico" value="si">
        <label for="si_tratamiento">Sí</label><br>
        <input type="radio" id="no_tratamiento" name="tratamiento_medico" value="no">
        <label for="no_tratamiento">No</label> <br>
        <label for="tipo_tratamiento">Especifique qué tipo de tratamiento y por cuánto tiempo:</label><br>
        <input type="text" id="tipo_tratamiento" name="tipo_tratamiento" class="form-control bg-warning"
            placeholder="Escribe aqui...">
        <hr>
        <label class="pregunta">¿Consume algún medicamento de características
            antidepresivas?</label><br>
        <input type="radio" id="si_antidepresivos" name="medicamento_antidepresivo" value="si">
        <label for="si_antidepresivos">Sí</label><br>
        <input type="radio" id="no_antidepresivos" name="medicamento_antidepresivo" value="no">
        <label for="no_antidepresivos">No</label><br>
        <label for="especificar_antidepresivos">Especifique qué tipo de medicamento y el porqué:</label><br>
        <input type="text" id="especificar_antidepresivos" name="especificar_antidepresivos"
            class="form-control bg-warning">
        <hr>
    </div>
    <div class="seccion">
        <h2 class="mb-3">Intervenciones y Cirugías</h2>
        <label class="pregunta">¿Ha sido sometido a algún tipo de operación o cirugía en los últimos 5
            años?</label><br>
        <input type="radio" id="si_operacion" name="operacion_ultimos_5" value="si">
        <label for="si_operacion">Sí</label><br>
        <input type="radio" id="no_operacion" name="operacion_ultimos_5" value="no">
        <label for="no_operacion">No</label><br>

        <label for="tipo_operacion" class="mt-2">Especifique la cirugía y el porqué:</label><br>
        <input type="text" id="tipo_operacion" name="tipo_operacion" class="form-control bg-warning">

        <label class="pregunta mt-3">¿Tienes alguna operación programada dentro de los próximos doce
            meses?</label><br>
        <input type="radio" id="si_operacion_programada" name="operacion_programada" value="si">
        <label for="si_operacion_programada">Sí</label><br>
        <input type="radio" id="no_operacion_programada" name="operacion_programada" value="no">
        <label for="no_operacion_programada">No</label><br>
        <label for="especificar_operacion_programada">Especifique qué tipo de operación y el porqué:</label><br>
        <input type="text" id="especificar_operacion_programada" name="especificar_operacion_programada"
            class="form-control bg-warning">
        <hr>
    </div>
    <div class="seccion">
        <h2>Higiene Bucal</h2>
        <label class="pregunta mt-3">¿Cómo considera su higiene bucal?</label><br>
        <input type="radio" id="buena_higiene" name="higiene_bucal" value="buena">
        <label for="buena_higiene">Buena</label><br>
        <input type="radio" id="mala_higiene" name="higiene_bucal" value="mala">
        <label for="mala_higiene">Mala</label><br>
        <input type="radio" id="regular_higiene" name="higiene_bucal" value="regular">
        <label for="regular_higiene">Regular</label>
        <hr>
        <label class="pregunta">¿Con qué frecuencia visita el dentista?</label><br>
        <input type="text" id="frecuencia_dentista" name="frecuencia_dentista" class="form-control bg-warning">
        <hr>
        <label class="pregunta">¿Actualmente tiene un tratamiento bucal?</label><br>
        <input type="radio" id="si_tratamiento_bucal" name="tratamiento_bucal" value="si">
        <label for="si_tratamiento_bucal">Sí</label><br>
        <input type="radio" id="no_tratamiento_bucal" name="tratamiento_bucal" value="no">
        <label for="no_tratamiento_bucal">No</label><br>
        <label for="especificar_tratamiento_bucal">Especifique:</label><br>
        <input type="text" id="especificar_tratamiento_bucal" name="especificar_tratamiento_bucal"
            class="form-control bg-warning">
        <hr>
    </div>
    <div class="seccion">
        <h2 class="mb-3">Embarazo</h2>
        <label class="pregunta">¿Actualmente se encuentra embarazada o cree estarlo?</label><br>
        <input type="radio" id="si_embarazo" name="embarazo" value="si">
        <label for="si_embarazo">Sí</label><br>
        <input type="radio" id="no_embarazo" name="embarazo" value="no">
        <label for="no_embarazo">No</label><br><br>
        <label for="tiempo_gestacion">Especifique el tiempo de gestación:</label><br>
        <input type="text" id="tiempo_gestacion" name="tiempo_gestacion" class="form-control bg-warning">
        <hr>
        <label class="pregunta control_embarazo">¿Tiene un control médico estricto de su embarazo?</label><br>
        <input type="radio" id="si_control_embarazo" name="control_embarazo" value="si">
        <label for="si_control_embarazo">Sí</label><br>
        <input type="radio" id="no_control_embarazo" name="control_embarazo" value="no">
        <label for="no_control_embarazo">No</label><br><br>
        <label class="pregunta frecuencia_consulta_embarazo">¿Cada cuándo acude a consulta médica?</label><br>
        <input type="text" id="frecuencia_consulta_embarazo" name="frecuencia_consulta_embarazo"
            class="form-control bg-warning">
        <hr>
    </div>
    <div class="seccion">
        <h2 class="mb-3">Discapacidad</h2>
        <label class="pregunta discapacidad">¿Cuenta con algún tipo de discapacidad (motriz, visual y
            auditiva)?</label><br>
        <input type="radio" id="si_discapacidad" name="discapacidad" value="si">
        <label for="si_discapacidad">Sí</label><br>
        <input type="radio" id="no_discapacidad" name="discapacidad" value="no">
        <label for="no_discapacidad">No</label><br>
        <label for="especificar_discapacidad">Especifique el tipo de discapacidad:</label><br>
        <input type="text" id="especificar_discapacidad" name="especificar_discapacidad"
            class="form-control bg-warning">
        <hr>
    </div>
    <div class="seccion">
        <h2 class="mb-3">Antecedentes Familiares</h2>
        <p>Lea con atención y responda con honestidad lo siguientes preguntas: </p>
        <br>
        <label class="pregunta enfermedades_familiares">¿Algunos de sus familiares padece de una enfermedad crónica o
            degenerativa?</label><br>
        <input type="radio" id="si_enfermedades_familiares" name="enfermedades_familiares" value="si">
        <label for="si_enfermedades_familiares">Sí</label><br>
        <input type="radio" id="no_enfermedades_familiares" name="enfermedades_familiares" value="no">
        <label for="no_enfermedades_familiares">No</label><br><br>

        <label for="especificar_enfermedad_familiar">Especifique quién y qué tipo de enfermedad:</label><br>
        <input type="text" id="especificar_enfermedad_familiar" name="especificar_enfermedad_familiar"
            class="form-control bg-warning">

        <label for="parentezco_familiar" class="mt-3">Describa el parentesco de su familiar:</label><br>
        <input type="text" id="parentezco_familiar" name="parentezco_familiar" class="form-control bg-warning">
        <hr>
        <label class="pregunta familiar_viviendo">¿Actualmente se encuentra viviendo con usted?</label><br>
        <input type="radio" id="si_viviendo" name="familiar_viviendo" value="si">
        <label for="si_viviendo">Sí</label><br>
        <input type="radio" id="no_viviendo" name="familiar_viviendo" value="no">
        <label for="no_viviendo" class="mb-2">No</label><br>

        <label class="pregunta dependencia_economica">¿Depende económicamente de usted?</label><br>
        <input type="radio" id="si_dependencia" name="dependencia_economica" value="si">
        <label for="si_dependencia">Sí</label><br>
        <input type="radio" id="no_dependencia" name="dependencia_economica" value="no">
        <label for="no_dependencia">No</label>
        <hr>
        <label class="pregunta gastos_medicos_familiar">¿Por qué depende economicamente de usted y cuánto es lo que
            asciende de
            gastos médicos?</label><br>
        <input type="text" id="gastos_medicos_familiar" name="gastos_medicos_familiar"
            class="form-control bg-warning"><br>

        <label class="pregunta tratamiento_vigente">¿Algún miembro de su familia tiene un tratamiento
            vigente?</label><br>
        <input type="radio" id="si_tratamiento_vigente" name="tratamiento_vigente" value="si">
        <label for="si_tratamiento_vigente">Sí</label><br>
        <input type="radio" id="no_tratamiento_vigente" name="tratamiento_vigente" value="no">
        <label for="no_tratamiento_vigente">No</label><br><br>

        <label for="especifique_tratamiento">Especifique quién y qué tipo de tratamiento: </label><br>
        <input type="text" id="especifique_tratamiento" name="especifique_tratamiento"
            class="form-control bg-warning"><br><br>
    </div>
    <div class="seccion">
        <h1>DECLARACIONES PERSONALES</h1>
        <p>Lea con atención y responda con honestidad lo siguientes preguntas: </p>
        <br>
        <label class="pregunta conoce_estupefacientes">¿Conoce los tipos de estupefacientes?</label><br>
        <input type="radio" id="si_estupefacientes" name="conoce_estupefacientes" value="si">
        <label for="si_estupefacientes">Sí</label><br>
        <input type="radio" id="no_estupefacientes" name="conoce_estupefacientes" value="no">
        <label for="no_estupefacientes">No</label><br><br>
        <label for="tipo_estupefacientes">Especifique qué tipo:</label><br>
        <input type="text" id="tipo_estupefacientes" name="tipo_estupefacientes"
            class="form-control bg-warning"><br><br>

        <label class="pregunta consumo_estupefacientes">¿Ha consumido estupefacientes en los últimos 6
            meses?</label><br>
        <input type="radio" id="si_consumo_estupefacientes" name="consumo_estupefacientes" value="si">
        <label for="si_consumo_estupefacientes">Sí</label><br>
        <input type="radio" id="no_consumo_estupefacientes" name="consumo_estupefacientes" value="no">
        <label for="no_consumo_estupefacientes">No</label><br><br>
        <label for="tipo_consumo">Especifique qué tipo:</label><br>
        <input type="text" id="tipo_consumo" name="tipo_consumo" class="form-control bg-warning"><br><br>

        <label class="pregunta test_antidoping">¿Estaría dispuesto a someterse a un Test de antidoping para validar
            la
            veracidad de las respuestas?</label><br>
        <input type="radio" id="si_test_antidoping" name="test_antidoping" value="si">
        <label for="si_test_antidoping">Sí</label><br>
        <input type="radio" id="no_test_antidoping" name="test_antidoping" value="no">
        <label for="no_test_antidoping">No</label><br><br>

        <label class="pregunta familia_consumo_estupefacientes">¿Algún miembro de su familia ha consumido
            estupefacientes?</label><br>
        <input type="radio" id="si_familia_consumo" name="familia_consumo_estupefacientes" value="si">
        <label for="si_familia_consumo">Sí</label><br>
        <input type="radio" id="no_familia_consumo" name="familia_consumo_estupefacientes" value="no">
        <label for="no_familia_consumo">No</label><br><br>
        <label for="especificar_familia_consumo">Especifique por qué:</label><br>
        <input type="text" id="especificar_familia_consumo" name="especificar_familia_consumo"
            class="form-control bg-warning"><br><br>

        <label class="pregunta consume_alcohol">¿Consume alcohol?</label><br>
        <input type="radio" id="si_alcohol" name="consume_alcohol" value="si">
        <label for="si_alcohol">Sí</label><br>
        <input type="radio" id="no_alcohol" name="consume_alcohol" value="no">
        <label for="no_alcohol">No</label><br><br>
        <label for="frecuencia_alcohol">¿Con qué frecuencia y en qué cantidades lo consume?</label><br>
        <input type="text" id="frecuencia_alcohol" name="frecuencia_alcohol" class="form-control bg-warning"><br><br>
        <label class="pregunta fuma">¿Fuma?</label><br>
        <input type="radio" id="si_fuma" name="fuma" value="si" class="bg-warning">
        <label for="si_fuma">Sí</label><br>
        <input type="radio" id="no_fuma" name="fuma" value="no">
        <label for="no_fuma">No</label><br><br>
        <label for="cuantas_veces_fuma">¿Cuántas veces lo consume?</label><br>
        <input type="text" id="cuantas_veces_fuma" name="cuantas_veces_fuma" class="form-control bg-warning"><br><br>

        <label class="pregunta adiccion">¿Tiene una adicción?</label><br>
        <input type="radio" id="si_adiccion" name="adiccion" value="si">
        <label for="si_adiccion">Sí</label><br>
        <input type="radio" id="no_adiccion" name="adiccion" value="no">
        <label for="no_adiccion">No</label><br><br>
        <label for="tipo_adiccion">Especifique qué tipo de adicción:</label><br>
        <input type="text" id="tipo_adiccion" name="tipo_adiccion" class="form-control bg-warning"><br><br>

        <label class="pregunta anexo">¿Se ha sometido a un Anexo?</label><br>
        <input type="radio" id="si_anexo" name="anexo" value="si">
        <label for="si_anexo">Sí</label><br>
        <input type="radio" id="no_anexo" name="anexo" value="no">
        <label for="no_anexo">No</label><br><br>
        <label for="lugar_apoyo">Mencione el lugar donde le han brindado apoyo:</label><br>
        <input type="text" id="lugar_apoyo" name="lugar_apoyo" class="form-control bg-warning"><br><br>
    </div>

    <div class="seccion">
        <h1>ENCUESTA COVID</h1>
        <p>Lea con atención y responda con honestidad lo siguientes preguntas: </p>
        <br>
        <label for="Vacuna_covid">Cuenta con vacunación Covid-19</label><br>
        <input type="radio" id="si_V_covid" name="vacuna_covid" value="si">
        <label for="si_V_covid">Sí</label><br>
        <input type="radio" id="no_V_covid" name="vacuna_covid" value="no">
        <label for="no_V_covid">No</label><br><br>

        <label for="n_vacuna_covid">¿Cuantas vacunas se aplico?</label><br>
        <input type="radio" id="1_V_covid" name="n_vacuna_covid" value="si">
        <label for="1_V_covid">1</label><br>
        <input type="radio" id="2_V_covid" name="n_vacuna_covid" value="2">
        <label for="2_V_covid">2</label><br>
        <input type="radio" id="3_V_covid" name="n_vacuna_covid" value="3">
        <label for="2_V_covid">3</label><br><br>

        <label for="certificado_covid">¿Cuenta con su certificado covid-19?</label><br>
        <input type="radio" id="si_c_covid" name="certificado_covid" value="si">
        <label for="si_c_covid">Si</label><br>
        <input type="radio" id="no_c_covid" name="certificado_covid" value="no">
        <label for="no_c_covid">No</label><br><br>

        <label for="contacto_covid">Ha tenido contacto con personas con algún cuadro gripal en los últimos
            15 días.</label><br>
        <input type="radio" id="si_contact_covid" name="contacto_covid" value="si">
        <label for="si_contact_covid">Si</label><br>
        <input type="radio" id="no_contact_covid" name="contacto_covid" value="no">
        <label for="no_contact_covid">No</label><br><br>

        <label for="prueba_covid">¿Esa persona ya se hizo la prueba o sospecha tener Covid-19?</label><br>
        <input type="radio" id="si_pru_covid" name="prueba_covid" value="si">
        <label for="si_pru_covid">Si</label><br>
        <input type="radio" id="no_pru_covid" name="prueba_covid" value="no">
        <label for="no_pru_covid">No</label><br><br>

        <label for="fallecimiento_covid">Algún familiar fallecio de Covid-19</label><br>
        <input type="radio" id="si_f_covid" name="fallecimiento_covid" value="si">
        <label for="si_f_covid">Si</label><br>
        <input type="radio" id="no_f_covid" name="fallecimiento_covid" value="no">
        <label for="no_f_covid">No</label><br><br>

        <label for="lugar_apoyo">¿Que tipo de parentesco tenia?</label><br>
        <input type="text" id="parentesco_covid" name="parentesco_covid" class="form-control bg-warning"><br><br>

        <p>Durante los últimos 30 días ¿Has tenido alguno de los siguientes síntomas?</p>
        <label for="fiebre">Ha presentado fiebre mayor 37.5 grados </label><br>
        <input type="radio" id="si_fiebre" name="fiebre" value="si">
        <label for="si_fiebre">Si</label><br>
        <input type="radio" id="no_fiebre" name="fiebre" value="no">
        <label for="no_fiebre">No</label><br><br>

        <label for="tos">Ha presentado tos </label><br>
        <input type="radio" id="si_tos" name="tos" value="si">
        <label for="si_tos">Si</label><br>
        <input type="radio" id="no_tos" name="tos" value="no">
        <label for="no_tos">No</label><br><br>

        <label for="cansancio">Cansancio o fatiga</label><br>
        <input type="radio" id="si_cansancio" name="cansancio" value="si">
        <label for="si_cansancio">Si</label><br>
        <input type="radio" id="no_cansancio" name="cansancio" value="no">
        <label for="no_cansancio">No</label><br><br>

        <label for="garganta">Ha presentado dolor de garganta </label><br>
        <input type="radio" id="si_garganta" name="garganta" value="si">
        <label for="si_garganta">Si</label><br>
        <input type="radio" id="no_garganta" name="garganta" value="no">
        <label for="no_garganta">No</label><br><br>

        <label for="cabeza">Ha presentado dolor de cabeza</label><br>
        <input type="radio" id="si_cabeza" name="cabeza" value="si">
        <label for="si_cabeza">Si</label><br>
        <input type="radio" id="no_cabeza" name="cabeza" value="no">
        <label for="no_cabeza">No</label><br><br>

        <label for="diarreicos">Ha presentado cuadros diarreicos</label><br>
        <input type="radio" id="si_diarreicos" name="diarreicos" value="si">
        <label for="si_diarreicos">Si</label><br>
        <input type="radio" id="no_diarreicos" name="diarreicos" value="no">
        <label for="no_diarreicos">No</label><br><br>

        <label for="aire">Ha presentado dificultad para respirar o sensación de falta de aire
        </label><br>
        <input type="radio" id="si_aire" name="aire" value="si">
        <label for="si_aire">Si</label><br>
        <input type="radio" id="no_aire" name="aire" value="no">
        <label for="no_aire">No</label><br><br>

        <label for="gusto">Pérdida del sentido del olfato o del gusto </label><br>
        <input type="radio" id="si_gusto" name="gusto" value="si">
        <label for="si_gusto">Si</label><br>
        <input type="radio" id="no_gusto" name="gusto" value="no">
        <label for="no_gusto">No</label><br><br>

    </div>
    
    <div class="text-justify">
        <p>Todos los datos que ha proporcionado serán anexados en nuestro expediente laboral a efecto de confirmar y
            corroborar los mismos y se encuentra apto para laborar dentro de
            <strong>"LA EMPRESA"</strong>
        </p>

        <p> Yo <strong><span class="nombreTrabajador">{{ $data->nombreColaborador . ' ' . $data->Apellido_Paterno . ' ' . $data->Apellido_Materno}}</span></strong> manifiesto de
            estar conforme y reconozco que <strong> “LA EMPRESA” </strong>procederá en validad pruebas necesarias
            para
            verificar y autentificar la presente información que sea válida y no exista ningún tipo de vicio en
            contra
            de. mi información correspondiente a mi salud a efecto de poder ser contratado por <strong>“LA EMPRESA”.
            </strong> </p>
        <p><strong> Reconozco que en el supuesto de ser contratado bajo el puesto de {{ $data->Puesto }} “LA EMPRESA” me
                ha
                informado que con posterioridad y conforme lo requiera, Yo <span class="nombreTrabajador">{{ $data->nombreColaborador . ' ' . $data->Apellido_Paterno . ' ' . $data->Apellido_Materno}}</span>,
                me comprometo a someterme periódicamente a
                la
                encuesta de valoración médica y así mismo a proporcionar los estudios médicos correspondientes, que
                se
                me requiera por parte de “LA EMPRESA”, a efecto de verificar que me encuentro en óptimas condiciones
                de
                salud, para desempeñar el puesto por el cual estaré contratado y que estos requisitos serán
                solicitados
                conforme al tiempo que me encuentre laborando con “LA EMPRESA”, toda vez que será de forma
                periódicamente y que estos serán requeridos con previo aviso por parte del jefe inmediato que estará
                a
                mi cargo, lo anterior se encuentra dispuesto en el Contrato Individual de Trabajo en la cláusula
                VIGÉSIMA PRIMERA y correspondiente a la fracción X del artículo 134 de la Ley Federal del trabajo.
            </strong></p>

        <div class="d-flex flex-column justify-content-center align-items-center p-2">
            <img src="{{ asset("storage/firmas/$idColaborador.png") }}" alt="firma" width="300px" class="border-bottom imagenFirm">
            <span class="nombreTrabajador mt-3"></span>
        </div> 
        @php
            use Carbon\Carbon;
            $fechaIngreso = Carbon::parse($data->Fecha_Ingreso)
        @endphp
        <p>Leído y enterado que lo antes manifestado es cierto y verídico, sin existir dolo, error, lesión y
            reticencia
            en razón al Cuestionario Médico. </p>
        <p>Una vez hecho lo anterior, ratifican y firman el presente documento en cada una de las fojas que lo
            contienen
            como ANEXO IV del Contrato Individual de Trabajo, a los _ <span class="dia">{{ $fechaIngreso->day }}</span> _ días del mes
            de _ <span class="mes">{{ $fechaIngreso->locale('es')->translatedFormat('F') }}</span> del año
            _<span class="year">{{ $fechaIngreso->year }}</span> <span class=""></span>
        </p>
    </div>
    <div class="d-flex justify-content-center mb-3">
        <button type="submit" class="btn btn-success mt-3" id="btnMedico">Enviar Formulario</button>
    </div>
    <div class="d-flex justify-content-center mb-3">
        <button type="button" class="btn btn-success mt-3" id="btnPDFMedico">Generar PDF</button>
    </div>
    <div class="modal fade" id="modalEsperaPDFCuestionarioMedico" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center d-flex flex-column justify-content-center align-items-center">
                    <iframe
                        src="https://lottie.host/embed/a73d74fc-77a2-4353-9043-c811520b6464/GwuHPa1TdV.lottie"></iframe>
                    <p>Espera, por favor...</p>
                </div>
            </div>
        </div>
    </div>
</form>
     -->
@endsection
