@extends('layouts.app')
@section('content')
    <main class="col-sm-11 col-lg-6 mt-4 mx-auto mb-5 main-solicitud">
        <form class="form-container-solicitud-empleo" id="FormSolicitud" action="{{ route('solicitud.store') }}" method="POST">
            @csrf 
            <h2>SOLICITUD DE EMPLEO </h2>
            <fieldset>
                <legend>Puesto que está solicitando</legend>
                <div class="input-group">
                    <label for="puesto">Puesto:</label>
                    <input type="text" id="puesto" name="puesto" class="" disabled value="{{ old('apellidoPat', $data->Puesto) }}">
                </div>
                <div class="input-group">
                    <label for="fecha">Fecha:</label>
                    <input type="date" id="fechaIngreso" name="fechaIngreso" class="" disabled value="{{ old('apellidoPat', $data->Fecha_Ingreso) }}">
                </div>
                <div class="input-group">
                    <label for="sueldo_deseado">Sueldo mensual deseado:</label>
                    <input type="number" id="sueldo_deseado" name="sueldo_deseado" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label for="sueldo_autorizado">Sueldo mensual autorizado:</label>
                    <input type="number" id="sueldoAutorizado" name="sueldo_autorizado" disabled>
                </div>
                <div class="input-group">
                    <label for="fecha_contratacion">Fecha de contratación:</label>
                    <input type="date" id="fechaContratacion" name="fecha_contratacion" class="" disabled value="{{ old('apellidoPat', $data->Fecha_Ingreso) }}">
                </div>
            </fieldset>

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
                       // si es H es mombre
                       $genero = $data->Sexo;
                       $sexo = ($genero === 'H') ? 'Masculino' : 'Femenino';
                    @endphp
                    <input type="text" id="sexo" name="sexo" placeholder="Masculino o Femenino" value="{{ old('apellidoPat', $sexo) }}" disabled>
                </div>
                <div class="input-group">
                    <label for="direccion">Domicilio:</label>
                    <input type="text" id="domicilio" name="direccion" class="" value="{{ old('domicilio', $data->Direccion) }}" disabled>
                    <label for="colonia">Colonia:</label>
                    <input type="text" id="colonia" name="colonia" required class="" required value="{{ old('colonia', $data->Colonia) }}" disabled>
                    <label for="codigo_postal">Código Postal:</label>
                    <input type="text" id="codigo_postal" name="codigo_postal" required class="" value="{{ old('Codigo Postal', $data->Codigo_Postal) }}" required disabled>
                </div>
                <div class="input-group">
                    <label for="ciudad">Ciudad o Alcaldía:</label>
                    <input type="text" id="ciudad" name="ciudad" class="bg-warning" required value="{{ old('colonia', $data->Colonia) }}">
                    <label for="estado">Entidad Federativa:</label>
                    <input type="text" id="estadoPersona" name="estado" class="" required value="{{ old('Estado', $data->Estado) }}" disabled>
                    <label for="nacimiento">Fecha de Nacimiento:</label>
                    <input type="date" id="fechaNacimiento" name="nacimiento" class="bg-warning">
                    <label for="nacionalidad">Nacionalidad:</label>
                    <input type="text" id="nacionalidad" name="nacionalidad" disabled>
                </div>
                <div class="input-group">
                    <label for="estado_civil">Estado Civil:</label>
                    <input type="text" id="estadoCivil" name="estado_civil" class="bg-warning">
                </div>
            </fieldset>

            <fieldset>
                <legend>Documentación</legend>
                <div class="input-group">
                    <label for="curp">CURP:</label>
                    <input type="text" id="curp" name="curp" class="" disabled value="{{ old('CURP', $data->CURP) }}">
                    <label for="afore">No. de AFORE:</label>
                    <input type="text" id="afore" name="afore" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label for="rfc">RFC:</label>
                    <input type="text" id="rfc" name="rfc" class="" disabled value="{{ old('CURP', $data->RFC) }}">
                    <label for="licencia">¿Tiene Licencia de Manejo?:</label>
                    <input type="text" id="licencia" name="licencia" class="bg-warning" required>
                    <label for="cartilla">Cartilla Militar No.:</label>
                    <input type="text" id="cartilla" name="cartilla" class="bg-warning" required>
                    <label for="pasaporte">Pasaporte No.:</label>
                    <input type="text" id="pasaporte" name="pasaporte" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label for="nss">Número de Seguridad Social:</label>
                    <input type="text" id="nss" name="nss" class="bg-warning" required>
                    <label for="clase_licencia">Clase y número de licencia:</label>
                    <input type="text" id="clase_licencia" name="clase_licencia" class="bg-warning" required>
                    <label for="extranjero">Siendo extranjero, documentos que le permiten trabajar:</label>
                    <input type="text" id="extranjero" name="extranjero" class="bg-warning" required>
                </div>
            </fieldset>

            <fieldset>
                <legend>ESTADO DE SALUD Y HÁBITOS PERSONALES</legend>
                <div class="input-group">
                    <label for="estado_salud">¿Cómo considera su estado de salud actual? (Escriba abajo: Bueno, Regular o Malo)</label>
                    <input type="text" id="estado_salud" name="estado_salud" required class="bg-warning">
                </div>

                <div class="input-group">
                    <label for="enfermedad">¿Padece alguna enfermedad crónica? (Escriba abajo: Si y Explique o escriba: No)</label>
                    <input type="text" id="enfermedad" name="enfermedad" required class="bg-warning">
                </div>

                <div class="input-group">
                    <label for="deporte">¿Practica usted algún deporte?</label>
                    <input type="text" id="deporte" name="deporte" required class="bg-warning">
                </div>

                <div class="input-group">
                    <label for="club">¿Pertenece a algún Club Social o Deportivo?</label>
                    <input type="text" id="club" name="club" required class="bg-warning">
                </div>

                <div class="input-group">
                    <label for="libre">¿En qué ocupa su tiempo libre?</label>
                    <input type="text" id="libre" name="libre" required class="bg-warning">
                </div>

                <div class="input-group">
                    <label for="vida">¿Cuál es su meta en la vida?</label>
                    <input type="text" id="vida" name="vida" required class="bg-warning">
                </div>
            </fieldset>

            <fieldset>
                <legend>DATOS FAMILIARES</legend>

                <p>Nombre (sólo nombres sin apellidos)</p>
                <div class="input-group">
                    <label for="nombre_p">Nombre Padre</label>
                    <input type="text" id="nombre_p" name="nombre_p" required class="bg-warning">

                    <label for="vive_p">Vive</label>
                    <input type="text" id="vive_p" name="vive_p" required class="bg-warning">

                    <label for="domicilio_p">Domicilio</label>
                    <input type="text" id="domicilio_p" name="domicilio_p" required class="bg-warning">

                    <label for="ocupacion_p">Ocupación</label>
                    <input type="text" id="ocupacion_p" name="ocupacion_p" required class="bg-warning">
                </div>

                <p>Nombre (sólo nombres sin apellidos)</p>
                <div class="input-group">
                    <label for="nombre_m">Nombre Madre</label>
                    <input type="text" id="nombre_m" name="nombre_m" required class="bg-warning">

                    <label for="vive_m">Vive</label>
                    <input type="text" id="vive_m" name="vive_m" required class="bg-warning">

                    <label for="domicilio_m">Domicilio</label>
                    <input type="text" id="domicilio_m" name="domicilio_m" required class="bg-warning">

                    <label for="ocupacion_m">Ocupación</label>
                    <input type="text" id="ocupacion_m" name="ocupacion_m" required class="bg-warning">
                </div>

                <p>Nombre (sólo nombres sin apellidos)</p>
                <div class="input-group">
                    <label for="esposa_o">Esposa(o)</label>
                    <input type="text" id="esposa_o" name="esposa_o" required class="bg-warning">

                    <label for="vive_e">Vive</label>
                    <input type="text" id="vive_e" name="vive_e" required class="bg-warning">

                    <label for="domicilio_e">Domicilio</label>
                    <input type="text" id="domicilio_e" name="domicilio_e" required class="bg-warning">

                    <label for="ocupacion_e">Ocupación</label>
                    <input type="text" id="ocupacion_e" name="ocupacion_e" required class="bg-warning">
                </div>

                <div class="input-group">
                    <label for="nombre_edad">Nombres y edades de los hijos:</label>
                    <input type="text" id="nombre_edad" name="nombre_edad" required class="bg-warning">
                </div>
            </fieldset>

            <fieldset>
                <legend>ESCOLARIDAD</legend>
                <p>Nivel Educativo</p>
                <div class="input-group">
                    <label for="nivel_educacion">Escuela</label>
                    <select name="nivel_educacion" id="nivel_educacion" required class="bg-warning">
                        <option value="primaria">Primaria</option>
                        <option value="secundaria">Secundaria</option>
                        <option value="preparatoria o vocacional">Preparatoria o Vocacional</option>
                    </select>
                    <label for="domicilio_primaria">Domicilio</label>
                    <input type="text" id="domicilio_primaria" name="domicilio_primaria" required class="bg-warning">
                    <label for="fecha_escolaridad_inicio">Fecha Inicio</label>
                    <input type="date" id="fecha_escolaridad_inicio" name="fecha_escolaridad_inicio" required class="bg-warning">
                    <label for="fecha_escolaridad_fin">Fecha Fin</label>
                    <input type="date" id="fecha_escolaridad_fin" name="fecha_escolaridad_fin" required class="bg-warning">
                    <label for="anios_primaria">Años</label>
                    <input type="text" id="anios_primaria" name="anios_primaria" required class="bg-warning">
                </div>
            </fieldset>
            <fieldset>
                <p>Nombre de la carrera</p>
                <div class="input-group">
                    <label for="estudios_act">Estudios que está efectuando en la actualidad</label>
                    <input type="text" id="estudios_act" name="estudios_act" class="bg-warning">
                    <label for="nombre_escuela_act">Nombre de la Institución</label>
                    <input type="text" id="nombre_escuela_act" name="nombre_escuela_act" class="bg-warning" required>
                    <label for="horaio_esc_inicio">Horario Inicio clase</label>
                    <input type="time" id="horaio_esc_inicio" name="horaio_esc_inicio" class="bg-warning" required>
                    <label for="horaio_esc_fin">Horario Fin clase</label>
                    <input type="time" id="horaio_esc_fin" name="horaio_esc_fin" class="bg-warning" required>
                    <label for="curso_carrera">Curso o carrera</label>
                    <input type="text" id="curso_carrera" name="curso_carrera" class="bg-warning" required>
                    <label for="grado_c">Grado</label>
                    <input type="text" id="grado_c" name="grado_c" class="bg-warning" required>
                </div>
            </fieldset>

            <fieldset>
                <legend>Conocimientos Generales</legend>
                <div class="input-group">
                    <label for="idiomas">Idiomas que domina:</label>
                    <input type="text" id="idiomas" name="idiomas" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label for="funciones">Funciones de oficina que domina:</label>
                    <input type="text" id="funciones" name="funciones" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label for="maquinas">Máquinas de oficina y/o equipo de trabajo que sepa manejar:</label>
                    <input type="text" id="maquinas" name="maquinas" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label for="otros">Otros trabajos o funciones que domina:</label>
                    <input type="text" id="otros" name="otros" class="bg-warning" required>
                </div>
            </fieldset>

            <fieldset>
                <legend>Empleo Actual</legend>
                <div class="input-group">
                    <label for="empresa">Nombre de la Empresa:</label>
                    <input type="text" id="empresa" name="empresa" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label for="domicilio">Domicilio:</label>
                    <input type="text" id="domicilio" name="domicilio" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" class="bg-warning" maxlength="10" pattern="[0-9]{10}" inputmode="numeric" required>
                </div>
                <div class="input-group">
                    <label for="puesto_inicial">Puesto Inicial:</label>
                    <input type="text" id="puesto_inicial" name="puesto_inicial" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label for="puesto_final">Puesto Final:</label>
                    <input type="text" id="puesto_final" name="puesto_final" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label for="sueldo_inicial">Sueldo Inicial:</label>
                    <input type="number" id="sueldo_inicial" name="sueldo_inicial" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label for="sueldo_final">Sueldo Final:</label>
                    <input type="number" id="sueldo_final" name="sueldo_final" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label for="motivo">Motivos de su separación:</label>
                    <input type="text" id="motivo" name="motivo" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label for="jefe">Nombre de su jefe inmediato:</label>
                    <input type="text" id="jefe" name="jefe" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label for="actividades">Actividades Desempeñadas:</label>
                    <input type="text" id="actividades" name="actividades" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label>¿Podemos solicitar informes de usted?</label>
                    <div class="options-info">
                        <label for="si">Sí</label>
                        <input type="radio" id="si" name="informes" value="si" class="input-circulo" required>
                        <label for="no">No</label>
                        <input type="radio" id="no" name="informes" value="no" class="input-circulo" required>
                        </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Empleos Anteriores</legend>
                <div class="input-group">
                    <label for="empresa_ante">Nombre de la Empresa:</label>
                    <input type="text" id="empresa_ante" name="empresa_ante" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label for="domicilio_ant">Domicilio:</label>
                    <input type="text" id="domicilio_ant" name="domicilio_ant" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label for="telefono_ant">Teléfono:</label>
                    <input type="tel" id="telefono_ant" name="telefono_ant" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label for="puesto_inicial_ant">Puesto Inicial:</label>
                    <input type="text" id="puesto_inicial_ant" name="puesto_inicial_ant" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label for="puesto_final_ant">Puesto Final:</label>
                    <input type="text" id="puesto_final_ant" name="puesto_final_ant" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label for="sueldo_inicial_ant">Sueldo Inicial:</label>
                    <input type="number" id="sueldo_inicial_ant" name="sueldo_inicial_ant" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label for="sueldo_final_ant">Sueldo Final:</label>
                    <input type="number" id="sueldo_final_ant" name="sueldo_final_ant" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label for="motivo_ant">Motivos de su separación:</label>
                    <input type="text" id="motivo_ant" name="motivo_ant" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label for="jefe_ant">Nombre de su jefe inmediato:</label>
                    <input type="text" id="jefe_ant" name="jefe_ant" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label for="actividades_ant">Actividades Desempeñadas:</label>
                    <input type="text" id="actividades_ant" name="actividades_ant" class="bg-warning" required>
                </div>
            </fieldset>

            <fieldset>
                <legend>Referencias Personales</legend>
                <div>
                    <h4>Primer Referencia</h4>
                    <div class="input-group">
                        <label for="nombre_ref1">Nombre:</label>
                        <input type="text" id="nombre_ref1" name="nombre_ref1" class="bg-warning" required>
                    </div>
                    <div class="input-group">
                        <label for="domicilio_ref1">Domicilio:</label>
                        <input type="text" id="domicilio_ref1" name="domicilio_ref1" class="bg-warning" required>
                    </div>
                    <div class="input-group">
                        <label for="telefono_ref1">Teléfono:</label>
                        <input type="text" id="telefono_ref1" name="telefono_ref1" class="bg-warning" required>
                    </div>
                    <div class="input-group">
                        <label for="ocupacion_ref1">Ocupación:</label>
                        <input type="text" id="ocupacion_ref1" name="ocupacion_ref1" class="bg-warning" required>
                    </div>
                </div>

                <div>
                    <h4>Segunda Referencia</h4>
                    <div class="input-group">
                        <label for="nombre_ref2">Nombre:</label>
                        <input type="text" id="nombre_ref2" name="nombre_ref2" class="bg-warning" required>
                    </div>
                    <div class="input-group">
                        <label for="domicilio_ref2">Domicilio:</label>
                        <input type="text" id="domicilio_ref2" name="domicilio_ref2" class="bg-warning" required>
                    </div>
                    <div class="input-group">
                        <label for="telefono_ref2">Teléfono:</label>
                        <input type="text" id="telefono_ref2" name="telefono_ref2" class="bg-warning" required>
                    </div>
                    <div class="input-group">
                        <label for="ocupacion_ref2">Ocupación:</label>
                        <input type="text" id="ocupacion_ref2" name="ocupacion_ref2" class="bg-warning" required>
                    </div>
                </div>

                <div>
                    <h4>Tercer Referencia</h4>
                    <div class="input-group">
                        <label for="nombre_ref3">Nombre:</label>
                        <input type="text" id="nombre_ref3" name="nombre_ref3" class="bg-warning" required>
                    </div>
                    <div class="input-group">
                        <label for="domicilio_ref3">Domicilio:</label>
                        <input type="text" id="domicilio_ref3" name="domicilio_ref3" class="bg-warning" required>
                    </div>
                    <div class="input-group">
                        <label for="telefono_ref3">Teléfono:</label>
                        <input type="text" id="telefono_ref3" name="telefono_ref3" class="bg-warning" required>
                    </div>
                    <div class="input-group">
                        <label for="ocupacion_ref3">Ocupación:</label>
                        <input type="text" id="ocupacion_ref3" name="ocupacion_ref3" class="bg-warning" required>
                    </div>
                </div>

            </fieldset>

            <fieldset>
                <legend>Datos Generales</legend>
                <div class="input-group">
                    <label for="empleo_origen">¿Cómo se enteró de este empleo?</label>
                    <label><input type="radio" name="empleo_origen" value="anuncio" required> Anuncio</label>
                    <label><input type="radio" name="empleo_origen" value="otro" required> Otro medio</label>
                    </div>
                <div class="input-group">
                    <label>¿Ha estado Afianzado?</label>
                    <label><input type="radio" name="afianzado" value="no" required> No</label>
                    <label><input type="radio" name="afianzado" value="si" required> Sí</label>
                    <input type="text" name="afianzadora" id="afianzadora" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label>¿Tiene seguro de vida?</label>
                    <label><input type="radio" name="seguro_vida" value="no" required> No</label>
                    <label><input type="radio" name="seguro_vida" value="si" required> Sí</label>
                    <input type="text" name="seguro_compania" id="seguro_compania" class="bg-warning" required>
                    <label for="seguro_compania_precio">Importe mensual</label>
                    <input type="number" name="seguro_compania_precio" id="seguro_compania_precio" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label>¿Está dispuesto a cambiar de lugar de residencia?</label>
                    <label><input type="radio" name="cambiar_residencia" value="no" required> No</label>
                    <label><input type="radio" name="cambiar_residencia" value="si" required> Sí</label>
                    <input type="text" name="cambiar_residencia_razon" id="cambiar_residencia_razon" class="bg-warning" required>
                </div>

                <div class="input-group">
                    <label>¿Tienes familiares y/o amigos que laboren en esta empresa?</label>
                    <label><input type="radio" name="familia_lab" value="no" required> No</label>
                    <label><input type="radio" name="familia_lab" value="si" required> Sí</label>
                    <label for="familia_lab_nombres">Nómbrelos</label>
                    <input type="text" name="familia_lab_nombres" id="familia_lab_nombres" class="bg-warning" required>
                </div>

                <div class="input-group">
                    <label>¿Pertenece a algún sindicato?</label>
                    <label><input type="radio" name="sindicato" value="no" required> No</label>
                    <label><input type="radio" name="sindicato" value="si" required> Sí</label>
                    <label for="sindicato_name">¿Cuál?</label>
                    <input type="text" name="sindicato_name" id="sindicato_name" class="bg-warning" required>
                </div>

                <div class="input-group">
                    <label>¿Puede viajar?</label>
                    <label><input type="radio" name="viajar" value="si" required> Sí</label>
                    <label><input type="radio" name="viajar" value="no" required> No</label>
                    <label for="viajar_no">Razones</label>
                    <input type="text" name="viajar_no" id="viajar_no" class="bg-warning" required>
                </div>

                <div class="input-group">
                    <label for="trabajar_start">¿Fecha en que podría presentarse a trabajar?</label>
                    <input type="date" name="trabajar_start" id="trabajar_start" class="bg-warning" required>
                </div>
            </fieldset>

            <fieldset>
                <legend>Datos Económicos</legend>
                <div class="input-group">
                    <label>¿Tiene otros ingresos?</label>
                    <label><input type="radio" name="otros_ingresos" value="no" required> No</label>
                    <label><input type="radio" name="otros_ingresos" value="si" required> Sí</label>
                    <label for="cuales_ingresos">¿Cuáles?</label>
                    <input type="text" name="cuales_ingresos" id="cuales_ingresos" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label>Importe mensual:</label>
                    <input type="number" name="importe_mensual" id="importe_mensual" class="bg-warning" required>
                </div>
                <div class="input-group">
                    <label>¿Vive en casa propia?</label>
                    <label><input type="radio" name="casa_propia" value="no" required> No</label>
                    <label><input type="radio" name="casa_propia" value="si" required> Sí</label>
                </div>

                <div class="input-group">
                    <label>¿Tiene automóvil propio?</label>
                    <label><input type="radio" name="auto_propio" value="no" required> No</label>
                    <label><input type="radio" name="auto_propio" value="si" required> Sí</label>

                    <label for="placas">Placas</label>
                    <input type="text" name="placas" id="placas" class="bg-warning" required>

                    <label for="marca">Marca</label>
                    <input type="text" name="marca" id="marca" class="bg-warning" required>

                    <label for="modelo">Modelo</label>
                    <input type="text" name="modelo" id="modelo" class="bg-warning" required>
                </div>

                <div class="input-group">
                    <label>¿Su cónyuge trabaja?</label>
                    <label for="conyuge_trabaja"><input type="radio" name="conyuge_trabaja" value="no" required> No</label>
                    <label><input type="radio" name="conyuge_trabaja" value="si" required> Sí</label>
                    <label for="donde_trabaja_conyuge">¿Dónde?</label>
                    <input type="text" name="donde_trabaja_conyuge" id="donde_trabaja_conyuge" class="bg-warning" required>
                    <label for="importe_conyuge">Importe mensual</label>
                    <input type="text" name="importe_conyuge" id="importe_conyuge" class="bg-warning" required>
                </div>

                <div class="input-group">
                    <label>¿Paga Renta?</label>
                    <label for="paga_renta"><input type="radio" name="paga_renta" value="no" required> No</label>
                    <label><input type="radio" name="paga_renta" value="si" required> Sí</label>
                    <label for="importe_renta">Importe mensual</label>
                    <input type="number" name="importe_renta" id="importe_renta" class="bg-warning" required>
                </div>
         

                <div class="input-group">
                    <label>¿Tienes deudas?</label>
                    <label for="tienes_deudas"><input type="radio" name="tienes_deudas" value="no" required> No</label>
                    <label><input type="radio" name="tienes_deudas" value="si" required> Sí</label>
                    <label for="concepto_deuda">¿De qué clase?</label>
                    <input type="text" name="concepto_deuda" id="concepto_deuda" class="bg-warning" required>
                    <label for="importe_deuda">Importe mensual</label>
                    <input type="text" name="importe_deuda" id="importe_deuda" class="bg-warning" required>
                </div>

                <div class="input-group">
                    <label for="abono_mensual">¿Cuánto abona mensualmente? $</label>
                    <input type="number" name="abono_mensual" id="abono_mensual" class="bg-warning" required>
                </div>
            </fieldset>
            @php
                $idColaborador = auth()->user()->idColaborador
            @endphp
            <fieldset>
                <legend>Certifico que los datos proporcionados son
                    correctos y autorizo a la empresa para que
                    certifique a su entera satisfacción  </legend>
                <img src="{{ asset("storage/firmas/$idColaborador.png") }}" alt="firma" width="400px" class="border-bottom imagenFirm">
                <p>Firma del Solicitante</p>
            </fieldset>
            <section style="width: 100%; display:flex; justify-content: center;">
                <button type="submit" class="btn btn-success" id="enviarFormularioSolicitud">Enviar Formulario</button>
            </section>
            <section style="width: 100%; display:flex; justify-content: center; margin-top: 2rem;">
                <button type="button" class="btn btn-success" id="generarPDFsolicitud">Generar PDF</button>
            </section>
        </form>
        <div class="modal fade" id="modalEsperaPDFSolicitudEmpleo" tabindex="-1" role="dialog">
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
    </main>
@endsection


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

/* ------------------------------------------------------------------------------------------------------------------------------------------ */
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

/**/
.evaluacion_nombre_realiza {
    display: flex;
}

/* button{
    width: 15%;
    padding: 1rem;
    border: none;
    border-radius: 5px;
    background: #009fe3;
    color: aliceblue;
    margin-top: 50px;
} */


@media (max-width: 600px) {
    .input-group {
        flex-direction: column;
    }
}

</style>