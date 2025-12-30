<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: "Inter", "Arial", sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            color: #444;
            font-size: 15px;
        }


        .contenedor {
            width: 85%;
            max-width: 900px;
            margin: 35px auto;
            background: #fff;
            padding: 40px 55px;
            border-radius: 16px;
            border: 1px solid #E5E7EB;
            box-shadow: 0px 4px 18px rgba(0, 0, 0, 0.08);
        }

  
        h2 {
            text-align: center;
            font-size: 1.9rem;
            font-weight: 700;
            margin-bottom: 30px;
            padding-bottom: 10px;
            border-bottom: 3px solid #0066FF;
         
            color: #1A1A1A;
            letter-spacing: 0.3px;
        }

    
        p {
            font-size: 1.05rem;
            line-height: 1.75rem;
            text-align: justify;
            margin-bottom: 16px;
            color: #444;
        }

      
        .nombreTrabajador {
            padding: 2px 6px;
            background-color: #EAF1FF;
       
            border-bottom: 2px solid #0066FF;
            font-weight: 600;
            text-transform: uppercase;
            border-radius: 4px;
        }

     
        .firma {
            margin-top: 70px;
            text-align: center;
            page-break-inside: avoid;
        }

        .firma img {
            max-width: 260px;
            max-height: 110px;
            object-fit: contain;
            margin-bottom: 8px;
        }

        .firma-texto {
            font-size: 0.95rem;
            text-transform: uppercase;
            color: #333;
            border-top: 2px solid #0066FF;
            width: 60%;
            margin: 12px auto 0;
            padding-top: 10px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

       
        @media print {
            body {
                background-color: #ffffff;
            }

            .contenedor {
                width: 100%;
                margin: 0;
                padding: 30px 50px;
                box-shadow: none;
                border-radius: 0;
                border: none;
            }
        }
    </style>

</head>

<body>


    <html>

    <div class="contenedor">
        <div class="col-sm-12 col-lg-6 mt-4 mx-auto border rounded text-justify mb-5 bg-white shadow-lg p-4 p-md-5">
            <div class="w-100 d-flex flex-column px-1 align-items-center mb-4">
                <h2 class="pb-5" style="font-size: 2.5rem;">CONTRATO INDIVIDUAL DE TRABAJO</h2>

                <div class="container m-4">
                    <b>
                        <p>
                            CONTRATO INDIVIDUAL DE TRABAJO, POR TIEMPO DETERMINADO CON UN PERIODO DE PRUEBA, QUE
                            CELEBRAN POR
                            UNA PARTE “SERVICIOS E INSUMOS PROSMAN S.A. DE C.V.”. REPRESENTADA EN ESTE ACTO POR LA C.
                            JANETT
                            FLORES ESPINOSA EN SU CARÁCTER DE ADMINISTRADOR ÚNICO Y A QUIEN EN LO SUCESIVO SE LE
                            DENOMINARÁ “LA
                            EMPRESA” Y POR LA OTRA, <span class="nombreTrabajador bg-info">{{ $nombreCompleto }}</span>,
                            QUIEN
                            COMPARECE POR PROPIO
                            DERECHO Y A QUIEN EN LO SUCESIVO SE LE DENOMINARÁ “EL TRABAJADOR”, AL TENOR DE LAS
                            SIGUIENTES
                            DECLARACIONES Y CLÁUSULAS.
                        </p>
                    </b>
                    <div class="py-3 mb-3">
                        <img src="{{ public_path('storage/Datos_Colaborador/' . $idColaborador . '/historial/firmas_colaborador/firma_' . $idColaborador . '.png') }}"
                            alt="Firma del trabajador"
                            style="max-width: 900px; max-height: 122px; object-fit: contain;">

                    </div>
                </div>

                <div class="container m-4">
                    <h3>DECLARACIONES</h3>
                    <p>
                        I. Para los efectos del artículo 25 de la Ley Federal del Trabajo, <b>“LA EMPRESA”</b>, por
                        conducto de
                        su apoderado legal declara lo siguiente:
                    </p>
                    <ul>
                        <li>a) Que es una moral de nacionalidad mexicana, legalmente constituida conforme a las leyes de
                            los
                            Estados Unidos Mexicanos</li>
                        <li>
                            b) Que la C. <b>JANETT FLORES ESPINOSA</b>, en su carácter de Administrador Único de
                            <b>“SERVICIOS E
                                INSUMOS PROSMAN S.A. DE C.V.”</b>, acredita su personalidad con el documento idóneo,
                            mismo que
                            se adjunta al presente instrumento, manifestando bajo protesta de decir verdad que cuenta
                            con las
                            facultades para obligar a su representada en los términos del contenido de este acto
                            jurídico,
                            mismas que no le han sido modificadas, restringidas ni revocadas enforma alguna.
                        </li>
                        <li>
                            c) Que tiene su domicilio ubicado AVENIDA 9 ORIENTE NÚMERO 811 INTERIOR “A”, COLONIA BARRIO
                            DE
                            ANALCO, PUEBLA, PUEBLA, C.P. 72500
                        </li>
                        <li>
                            d) Que cuenta con Registro Federal de Contribuyentes <b><span
                                    class="rfc bg-info">SIP200522AK7</span></b>
                        </li>
                    </ul>
                </div>
                <div class="container m-4">
                    <p> II. Para los efectos del artículo 25, fracción I, de la Ley Federal del Trabajo, por su parte
                        <b>“EL
                            TRABAJADOR”</b> declara lo siguiente:</p>

                    <ul>
                        <li>
                            a)
                            Que es una persona física en pleno ejercicio de sus derechos y legalmente capacitada para
                            celebrar
                            este contrato, de
                            nacionalidad <b>MEXICANA</b> , estado civil
                            <b><span class="estadoCivil bg-info">SOLTERO</span></b>, con edad de <b><span
                                    class="edad bg-info">21
                                    AÑOS</span></b>, a la fecha del presente Contrato, género
                            <b><span class="sexo bg-info">*</span></b>, con Clave Única de Registro de Población
                            <b><span class="curp bg-info">VEAJ030606HTCLLSA8</span></b> , con domicilio particular en
                            <b><span class="direccion_colaborador bg-info">*</span></b>
                            , Codigo Postal, y con Registro Federal de Contribuyentes
                            <b><span class="rfc bg-info">*</span></b>.
                        </li>
                        <li>
                            b) Bajo protesta de decir verdad a la fecha del presente Contrato <b>“EL TRABAJADOR”</b>,
                            manifiesta
                            que no padece ninguna
                            enfermedad crónica o contagiosa, ni es adicto(a) al consumo de bebidas alcohólicas,
                            narcóticos o de
                            cualquier otro tipo
                            de droga o enervante conforme al <b>“Anexo IV Cuestionario Medico”</b>.
                        </li>
                        <li>
                            c) Que cuenta con la capacidad y aptitudes necesarias para desempeñar las funciones
                            laborales
                            materia del presente contrato.
                        </li>
                        <li>
                            d) Estar de acuerdo en desempeñar su actividad conforme a las condiciones establecidas en
                            este
                            contrato y para ello manifiesta libre y pleno su consentimiento, que se expresa en este
                            acto, siendo
                            su manifestación libre de vicios del consentimiento.
                        </li>
                        <li>
                            e) <b>“EL TRABAJADOR”</b> en este momento designa como beneficiario para dar cumplimiento a
                            lo que
                            refiere el artículo 501
                            de la Ley Federal del Trabajo a:
                            <b><span class="beneficiario bg-info"></span></b>.
                        </li>
                    </ul>
                    <div class="py-3 mb-3">
                        <img src="{{ public_path('storage/Datos_Colaborador/' . $idColaborador . '/historial/firmas_colaborador/firma_' . $idColaborador . '.png') }}"
                            alt="Firma del trabajador"
                            style="max-width: 900px; max-height: 122px; object-fit: contain;">

                    </div>
                </div>
            </div>
            <div>
                <p>
                    <b>DECLARACIÓN DE ESTADO DE SALUD</b>
                </p>
                <p>
                    EL TRABAJADOR declara, bajo protesta de decir verdad, que su condición física no presenta
                    enfermedad,
                    lesión, padecimiento o cualquier otra circunstancia de salud que le dificulte, imposibilite o
                    represente
                    un riesgo para realizar las actividades físicas demandadas por el puesto; así mismo se obliga a
                    presentar y entregar el cuestionario médico que le sea proporcionado, a partir de su contratación.
                </p>
                <p>
                    En caso de que la información proporcionada, ya sea en esta cláusula o en el cuestionario médico,
                    resulte ser falsa, inexacta o se oculte dolosamente cualquier padecimiento o limitación relevante,
                    se
                    configurará una causa de rescisión de la relación laboral sin responsabilidad para LA EMPRESA.
                </p>
            </div>
            <div class="container m-4">
                <p>III. <b>“LAS PARTES”</b> declaran lo siguiente:</p>
                <ul>
                    <li>
                        a) Que en caso de que el trabajador tenga crédito de vivienda pendiente de pago con INFONAVIT,
                        el
                        patrón descontará la aportación correspondiente misma que será determinada por el INFONAVIT,
                        situación que se hace en este acto del conocimiento del trabajador, a lo cual manifiesta de
                        manera
                        expresa, su acuerdo, conocimiento conformidad y aceptación
                    </li>
                    <li>
                        b) Que en la elaboración y suscripción el presente contrato no media dolo, error, violencia o
                        vicios
                        del consentimiento
                        alguno, y que las condiciones establecidas en el mismo han sido negociadas de común acuerdo
                        conforme
                        a lo
                        establecido por la Ley Federal del Trabajo, sin que exista renuncia alguna a los derechos y
                        obligaciones que establece
                        tal ordenamiento, y buscando ante todo respetar la dignidad humana del trabajador.
                    </li>
                </ul>
            </div>
            <div class="container m-4">
                <p>
                    Atendiendo a lo manifestado por ambas partes, así como a lo dispuesto por los artículos 20, 24, 25 y
                    demás relativos de la Ley
                    Federal del trabajo, es voluntad de estas celebrar el presente <b>CONTRATO INDIVIDUAL DE TRABAJO POR
                        TIEMPO
                        DETERMINADO CON PERIODO DE PRUEBA</b>, al tenor de las siguientes:
                </p>
                <h3>
                    CLÁUSULAS
                </h3>
                <p>
                    <b>PRIMERA. - “EL TRABAJADOR”</b> se obliga a prestar a <b>“LA EMPRESA”</b> un servicio personal,
                    subordinado, bajo su dirección y coordinación, para desempeñar el puesto de <b><span
                            class="puesto bg-info">*</span></b> y todas las labores conexas que se le ordenen siempre
                    que
                    sean compatibles con sus conocimientos y aptitudes.
                </p>
                <p>

                    <b>SEGUNDA</b>. - El trabajador se obliga a prestar sus servicios en <b>“Tiendas
                        departamentales”</b>,
                    consistiendo sus labores en las marcadas en el perfil del puesto que se anexa al presente
                    instrumento
                    como <b>Anexo I “Perfil del Puesto”</b> y llevarlas a cabo conforme a lo establecido en el <b>Anexo
                        II
                        “Condiciones Generales de Trabajo”</b>, mismos anexos que las partes firman como prueba de su
                    consentimiento.
                </p>
                <p>
                    Además de todas aquellas actividades que se relacionen con el puesto o categoría y que sean
                    indispensables para el ejercicio de sus funciones conforme al <b>Anexo I “Perfil del Puesto”</b>,
                    por lo
                    que la enumeración de éstas, son únicamente enunciativas más no limitativas
                </p>
                <p>
                    Independientemente de lo anterior, el trabajador reconoce el derecho de <b>“LA EMPRESA”</b> de
                    agotar el
                    término de la jornada, y se
                    obliga a realizar cualquier trabajo que se le ordene, relacionado con la actividad de <b>“LA
                        EMPRESA”</b>, dentro de la jornada de
                    trabajo establecida.
                </p>
                <div class="py-3 mb-3">
                    <img src="{{ public_path('storage/Datos_Colaborador/' . $idColaborador . '/historial/firmas_colaborador/firma_' . $idColaborador . '.png') }}"
                        alt="Firma del trabajador" style="max-width: 900px; max-height: 122px; object-fit: contain;">

                </div>
            </div>
        </div>
        <div class="container m-4">
            <p>
                <b>TERCERA.</b> - El objeto de Trabajo:
            </p>
            <p>
                <b>“LA EMPRESA”</b> es una moral cuya actividad principal es ser especialista en limpieza que ofrece
                soluciones de limpieza en tiendas departamentales al cumplimiento de los estándares técnicas para
                desinfectar, limpiar e higiene, del cual requiere que <b>“EL TRABAJADOR”</b> realice toda actividad que
                permite eliminar la suciedad visible, como el polvo, las migas y los gérmenes de las superficies u
                objetos que se encuentran en una área, superficie u objeto regularmente se utiliza instrumentos de
                utilidad y químicos que ayudan a producir una limpieza que <b>“EL CLIENTE”</b> requiere para cumplir con
                los estándares de calidad para sus clientes, toda vez que pertenecen a tiendas departamentales, cuyo
                objeto es las distribución y venta de ropa, del cual nuestro servicio es brindar un proceso de utilidad
                enfocado al higiene con el fin de mantener y determinar actividades de limpieza superficial que se deben
                llevar a cabo diariamente y aquellas de limpieza intensa o profunda que se hacen periódicamente como,
                por ejemplo, el encerado de pisos; tomando en cuenta el mobiliario y los recursos, existen tareas muy
                específicas dirigidas a limpiar cristales y espejos, escaparates, muebles, exhibidores, mostradores,
                suelos, alfombras y felpudos, así como limpieza de los aparatos electrónicos como luminarias y otros de
                objetos de decoración.
            </p>
            <p>
                <b>CUARTA.</b> – El presente contrato es por un periodo de prueba con un tiempo determinado conforme a
                lo siguiente:
            </p>
            <p>
                <b>“EL TRABAJADOR”</b> será inicialmente contratado a un Periodo de Prueba de <b>30 días (treinta días)
                    iniciando en fecha <span class="fechaIngreso bg-info"></span>T.70 06 DE ENERO DEL 2025</b> , de
                los cuales mensualmente se realizarán evaluaciones hasta llegar al plazo de los <b>30 días (treinta días
                    naturales)</b> cumplidos, de lo cual termina su etapa de <b>“PERIODO DE PRUEBA”. “EL TRABAJADOR”</b>
                deberá acreditar que satisface los requisitos y que cuenta con los conocimientos necesarios para
                desarrollar las labores para las cuales será contratado, y en el caso que <b>“LA EMPRESA”</b>, determine
                que aún no es apto para desempeñar el empleo, pero el <b>“EL TRABAJADOR”</b>, mostró interés e intentó
                desempeñar las labores que se le asignaron, <b>“LA EMPRESA”</b> prorrogará su estancia a fin de ayudar a
                la permanencia del <b>“ TRABAJADOR”</b>, conforme a la cláusula <b>QUINTA</b>, mediante un aviso que le
                otorgue <b>“LA EMPRESA”</b> a favor del <b>“TRABAJADOR”</b>, tomando en cuenta la opinión de la Comisión
                Mixta de Productividad, Capacitación y Adiestramiento, así como la categoría o el puesto y si dicha
                Comisión determina que aún no es apto para desempeñar el empleo, se dará por terminado el contrato sin
                responsabilidad para <b>“LA EMPRESA”</b>, lo anterior en temimos del artículo 39-A de la Ley Federal del
                Trabajo.
            </p>
            <p>
                Si <b>“EL TRABAJADOR”</b> acreditado de forma <b>satisfactoria</b> la etapa de prueba comenzará
                formalmente su <b>Contrato Individual de Trabajo </b> por tiempo <b>DETERMINADO</b> y del cual estará
                sujeto de <b>(tres meses)</b> constando de <b>90 (noventa) días</b>, cumpliéndose desde la fecha de
                inicio <b><span class="inicioPuesto bg-info">*</span></b> hasta <b><span
                        class="finPuesto bg-info">*</span></b>, fecha que determina la duración de la relación
                laboral con <b>“LA EMPRESA”</b>, conforme a la naturaleza de la fuente de trabajo con fundamento de los
                artículos 35 y 36 fracción I y III de la Ley Federal del Trabajo.
            </p>
            <div class="py-3 mb-3">
                <img src="{{ public_path('storage/Datos_Colaborador/' . $idColaborador . '/historial/firmas_colaborador/firma_' . $idColaborador . '.png') }}"
                    alt="Firma del trabajador" style="max-width: 900px; max-height: 122px; object-fit: contain;">

            </div>
        </div>
        <p>
            <b>QUINTA.</b> - Evaluaciones periódicas que determina <b>“LA EMPRESA”</b> a favor del
            <b>“TRABAJADOR”</b>.
        </p>
        <p class="mt-4">
            Conforme a las disposiciones de <b>“LA EMPRESA”</b> someterá al <b>“TRABAJADOR”</b> aplicar
            (evaluaciones) de carácter semanal del cual estará supervisado por su jefe inmediato y el encargado del
            <b><span class="nombreCedis bg-info">*</span></b>, <span class="jefetaller bg-info">*</span> cuya
            función es verificar, analizar las aptitud, competencia, habilidades y eficiencia de <b>“EL
                TRABAJADOR”</b> respecto a la ejecución de sus tareas dentro de la <b><span
                    class="nombreCedis bg-info">*</span></b>
        </p>
        <p>
            La Medición Semanal determinara los objetivos y las metas que debe alcanzar <b>“EL TRABAJADOR”</b>
            conforme a las indicaciones generales identificado como <b>ANEXO VII “Parámetros De Evaluación Y
                Medición Semanal Prosman”</b> que pondrá en evaluación a efecto de verificar la Limpieza de la
            <b><span class="nombreCedis bg-info">*</span></b> y dar cumplimiento con los estándares y técnicas
            para limpiar, mopear, desinfección e higiene derivado que <b>“EL CLIENTE”</b> cuyo objeto social es la
            comercialización, distribución y venta de ropa, del cual se constituye en una tienda departamental
            conforme almacenes, tiendas y establecimientos de grandes dimensiones que ofrecen una variedad de
            productos encaminados a la venta de ropa y calzado como otros objetos correspondientes a su objeto
            social, por lo que debe de contener buena higiene conforme a los estándares de salubridad e higiene
            enfocado a los requisitos fundamentales para mantener un estableciente con todos los protocolos de
            salubridad.
        </p>
        <p>
            De lo anterior <b>“EL TRABAJADOR”</b> deberá de cubrir un control de sistema limpieza en el
            <b><span class="nombreCedis bg-info">*</span></b> del <b>“CLIENTE”</b> enfocado a un saneamiento,
            desinfección, lavado, fregado, barrido y cepillado cuyo método deberá de ser automatizado para limpiar
            las superficies interiores y exteriores, cumpliendo con los estándares de limpieza departamental, cuyo
            cumplimiento de <b>“EL TRABAJADOR”</b> conforme al rol de limpieza es enfocado a la realización de
            ciertas actividades de limpieza y
            desinfección conforme a los estándares de calidad requeridos de una tienda departamental, del que se
            deriva bajo los siguientes
            lineamientos:
        </p>

        <div class="mt-2">
            <table class="table">
                <tr>
                    <td>95% AL 100%</td>
                    <td>EXCELENCIA</td>
                    <td>⭐</td>
                </tr>
                <tr>
                    <td>85% AL 94%</td>
                    <td>BUEN DESEMPEÑO</td>
                    <td>👍</td>
                </tr>
                <tr>
                    <td>71% AL 84%</td>
                    <td>CONDICIONADO A PERMANENCIA</td>
                    <td>😟</td>
                </tr>
                <tr>
                    <td>0% AL 70%</td>
                    <td>PRESCINDIR DE SUS SERVICIOS</td>
                    <td>👎</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="container m-4">
        <p>
            Con forme a la plataforma <b>TrackPoint</b> el cual mide
            estándares de calidad, determinará conforme a la siguiente tabla de medición <b>(evaluación)</b> cuya
            función será determinar las
            aptitudes y desempeño de actividades que estará a cargo de <b>“EL TRABAJADOR”</b> enfocadas a cada una
            de sus actividades
            laborales conforme a su perfil de puesto que determinara las siguientes aptitudes:
        </p>
        <ul>
            <li>
                Tener Adaptabilidad y Habilidad en sus actividades laborales.
            </li>
            <li>
                Destreza y Capacidad para realizar actividades de limpieza.
            </li>
            <li>
                Aplicar actitudes armoniosas en su centro de trabajo enfocado en la relación laboral.
            </li>
            <li>
                Dedicación y persuasión en el método que deberá de aplicar al utilizar lar herramientas necesarias
                en la limpieza de las superficies interiores y exteriores de las tiendas departamentales.
            </li>
            <li>
                Aplicar la honestidad demostrando una buena conducta con buenas aptitudes en su centro de trabajo.
            </li>
        </ul>

        <div class="mt-4">
            <p>
                Cada parámetro a evaluar determinara un porcentaje del cual se encontrará sometido <b>“EL
                    TRABAJADOR”</b> a dar cumplimiento a sus obligaciones laborales del cual dependerá del
                rendimiento que genere <b>“EL TRABAJADOR”</b> con forme a su desempeño dentro de su jornada laboral
                y del que determinara si obtiene el <b>100%</b> o en su caso sea menor que el <b>70%</b> es decir
                bajo rendimiento del cual se demuestra conforme al <b>ANEXO VII “Parámetros De Evaluación Y Medición
                    Semanal Prosman”</b> que acredite que su desempeño es consecuencia de un rendimiento de calidad
                insuficiente que no acredita los estándares para lo cual fue contratado enfocado a las técnicas
                desinfección, limpieza e higiene de cada <span class="nombreCedis bg-info">*</span>, conforme a
                los resultados obtenidos serán debidamente notificados conforme a los dispuesto en la cláusula
                <b>DÉCIMA TERCERA</b>.
            </p>
            <p class="mt-3"> <b>SEXTA. -</b> Acuerdo de voluntad de “EL TRABAJADOR” para someterse al Periodo de
                Prueba:</p>
            <p class="mt-5">
                <b>“LA EMPRESA”</b> somete a un Periodo de Prueba al <b>“ TRABAJADOR”</b> conforme al <b>Anexo III
                    “Prueba”</b> del cual <b>“EL TRABAJADOR”</b> manifiesta estar de acuerdo someterse <b>30 días
                    (treinta días)</b> de los cuales mensualmente se realizarán evaluaciones hasta llegar al plazo
                de los <b>90 días (noventa días naturales)</b> en que se le realice una evaluación periódica a
                discreción de su jefe inmediato y del departamento de recursos humanos para la evaluación del
                desempeño de sus actividades con la finalidad de acreditar que cumple con las actividades y
                condiciones de trabajo requeridas por <b>“LA EMPRESA”</b> para la permanencia y duración del empleo,
                así mismo que al acreditar la primera prueba como lo señala el <b>ANEXO VII “Parámetros De
                    Evaluación Y Medición Semanal Prosman” ACEPTA <span
                        class="nombreTrabajador bg-info">{{ $nombreCompleto }}</span>
                    “EL TRABAJADOR”</b> someterse a pruebas continuas conforme lo requiera <b>“LA EMPRESA”</b> hasta
                fenecer su contrato de determinado con periodo de prueba.
            </p>
        </div>
    </div>
    <div class="container m-4">
        <p>
            <b>SEPTIMA.</b> - En razón a la cláusula <b>TERCERA, CUARTA y QUINTA</b> conforme a la duración del
            presente contrato se establece los siguientes supuestos del cual <b>“EL TRABAJADOR”</b> podrá tener una
            permanencia o cause rescisión laboral sin responsabilidad para <b>“LA EMPRESA”</b>:
        </p>
        <ul>
            <li>
                <b>a) “EL TRABAJADOR”</b> durante el periodo a prueba de <b>30 días (treinta días)</b> se encontrará
                en evaluación y supervisión de su jefe inmediato conforme a la cláusula <b>CUARTA</b> del cual
                constará de una <b>(Evaluación Y Medición Semanal)</b> que determinará su permanencia dentro del
                centro de trabajo.
            </li>
            <li>
                <b>b) “EL TRABAJADOR”</b> durante el periodo del contrato determinado se someterá a constantes
                evaluaciones conforme a su
                <b>Perfil del Puesto</b> que este estará encargado de su jefe inmediato y quien tendrá la obligación
                de someterlo a distintas
                pruebas y evaluaciones conforme al <b>ANEXO VII “Parámetros De Evaluación Y Medición Semanal
                    Prosman”</b> que
                serán aplicadas de manera semanales iniciando el Lunes y finalizando los Sábados, en un periodo de
                <b>90 días</b> antes de
                terminar el cierre del mes que determinará su permanencia dentro del centro de trabajo y del cual
                usted como <b>“EL
                    TRABAJADOR”</b> está obligado a solicitar a su jefe inmediato que le informe sobre el resultado
                que se tenga de su evaluación y en caso de no ser solicitado su jefe inmediato le informara en la
                última semana del cierre del mes a efecto
                de que se le indique su permanencia o en su caso exista la presente causal de rescisión laboral.
            </li>
            <li>
                <b>c) “NO APRUEBA”</b> en el supuesto que <b>“EL TRABAJADOR”</b> no acredite con un porcentaje
                satisfactorio que es determinado en el <b>ANEXO VII “Parámetros De Evaluación Y Medición Semanal
                    Prosman”</b> y que este es menor al porcentaje para una <b>CONDICION A PERMANENCIA</b> a partir
                de su periodo de prueba y conforme a los estándares de calidad requeridos dentro de lo estipulado en
                la cláusula <b>CUARTA</b>, su contrato determinado que consta de que el mismo que <b>NO</b> cumple
                con el <b>Anexo I “Perfil del Puesto”</b> en relación a las funciones y condiciones de trabajo para
                las cuales fue contratado se le notificara que está siendo <b>RESCINDIDO</b> de su empleo sin
                responsabilidad para <b>“LA EMPRESA”</b>, en términos de lo establecido por el articulo 39-A de la
                ley federal del trabajo. Misma notificación que surtirá efectos a conforme la misma lo establezca en
                su contenido y fundamento.
            </li>
            <li>
                d) La duración del <b>PERIODO DE PRUEBA</b> fenece cuando <b>“EL TRABAJADOR”</b> que en un periodo
                de <b>30 días (treinta días
                    hábiles)</b> hasta llegar al plazo de los <b>30 días (noventa días hábiles)</b> cumplidos, de
                los cual termina su etapa de
                <b>“PERIODO DE PRUEBA”</b> y si <b>“EL TRABAJADOR”</b> no acredita de forma satisfactoria que tiene
                la capacidad,
                conocimientos y aptitud suficiente para desempeñar las funciones del puesto se procede con el Aviso
                de Rescisión
                Laboral del cual se determinara el periodo de prueba conforme a los <b>PARÁMETROS DE EVALUACIÓN Y
                    MEDICIÓN
                    SEMANAL PROSMAN</b>.
            </li>
            <li>
                e) <b>“LA EMPRESA”</b> podrá rescindir a <b>“EL TRABAJADOR”</b> conforme a las causales del
                <b>artículo 47 de la Ley Federal de
                    Trabajo</b>, cuya acción es ejercitada por <b>“EL TRABAJADOR”</b> derivado a sus actitudes y
                desempeño durante su jornada
                laboral del cual genera como consecuencia la terminación anticipada de la relación laboral sin
                responsabilidad para <b>“LA
                    EMPRESA”</b>.
            </li>
            <li>
                f) Fenece el Contrato Individual de Trabajo cuya vigencia se encuentra limitada en un tiempo
                determinado, del cual ha sido
                fijada o conocida por las partes en el momento de formalizar la relación laboral, o bien por hacerse
                depender de una
                necesidad empresarial de naturaleza estrictamente temporal.
            </li>
            <li>
                Se concluye el Contrato Individual de Trabajo de forma anticipada con <b>“EL TRABAJADOR”</b>, por
                causal del servicio especializado que <b>“LA EMPRESA”</b> presta al <b>“CLIENTE”</b> sea suspendido
                por causas fortuitas o en caso de que <b>“EL CLIENTE”</b> determine concluir con el servicio
                especializado de forma anticipada en contra de <b>“LA EMPRESA”</b>.
            </li>
        </ul>
    </div>
    <div class="container m-4">
        <p>
            En razón a los distintos supuestos conforme a lo señalado de la presente cláusula <b>“EL TRABAJADOR”</b>
            reconoce y acepta que, en caso de existir una rescisión laboral, <b>“EL TRABAJADOR”</b> solo recibirá el
            pago correspondiente al salario devengado conforme a los días laborados y al pago de sus prestaciones de
            ley conforme a los artículos 76, 80 y 87 de la Ley Federal de Trabajo que este tendrá un lapso de 60
            días naturales para ser pagables después de la firma de su Aviso de Rescisión Laboral.
        </p>
        <p class="mt-5">
            <b>OCTAVA.</b> - Los servicios señalados en el presente contrato se prestarán en cualquier domicilio de
            <b>“LA EMPRESA”</b>, y/o en aquel que se encuentre prestando sus servicios y/o en cualquiera de las
            sucursales que ésta designe
        </p>
    </div>
    <div class="mt-4">
        <p>
            Causa de terminación de la relación laboral por causa de Rescisión o Terminación Anticipada de la
            Relación Contractual con el “CLIENTE” en razón a la
        </p>
        <p>
            Prestación de Servicios de Limpieza:
        </p>
        <p>
            “LA EMPRESA” acuerda con “EL TRABAJADOR” que en caso de quedar Rescindido de forma anticipada el
            Contrato de Prestación de Servicios que la empresa tiene con el
            “CLIENTE” contratante del servicio, se dará por terminada la relación laboral con el que suscribe sin
            responsabilidad para “LA EMPRESA”, pagando únicamente su finiquito correspondiente.
        </p>
    </div>
    <div class="container m-4">
        <p>
            <b>NOVENA - “LA EMPRESA”</b>. determina que la jornada laboral constará de 48 horas del cual será de
            forma obligatoria que <b>“EL
                TRABAJADOR”</b> cumplir con el horario asignado conforme al <b>“Anexo II Condiciones Generales”</b>,
            así mismo <b>“LA EMPRESA”</b>
            queda facultada para distribuir o variar la jornada a diurna, mixta o nocturna de acuerdo con sus
            necesidades, sin exceder nunca
            de la jornada ordinaria legal. Queda expresamente pactado que <b>“EL TRABAJADOR”</b> rolará turno de
            labores en caso de que <b>“LA
                EMPRESA”</b> lo necesite y dentro de la jornada ordinaria legal prevista por la Ley Federal del
            Trabajo.
        </p>
        <p class="mt-4">
            <b>“EL TRABAJADOR”</b> deberá registrar su asistencia diariamente mediante el rol de asistencia que es
            designado por su jefe inmediato y por medio de la plataforma <b>TrackPoint</b> sistema de aplicación
            electrónica que deberá ser instalada en el teléfono celular personal de <b>“EL TRABAJADOR”</b> mediante
            las indicaciones y que indique la misma aplicación. La falta de este requisito indicará la falta
            injustificada a laborar. Lo anterior en el entendido de que se tendrá un tiempo de tolerancia para
            registrar su asistencia de diez minutos después de iniciado el horario de trabajo.
        </p>
        <p class="mt-5">
            <b>“EL TRABAJADOR”</b> laborará jornada extraordinaria únicamente a solicitud de <b>“LA EMPRESA”</b>, en
            cuyo caso las horas que cada semana excedan de la jornada máxima legal ordinaria, de acuerdo con el
            turno en que corresponda prestar el servicio, se cubrirá en los términos previstos en la ley.
        </p>
        <p class="mt-3">
            <b>DÉCIMA</b>. – Por cada seis días de trabajo, <b>“EL TRABAJADOR”</b>, tendrá un descanso semanal de un
            día con el pago del salario correspondiente. También disfrutará de descanso, con pago de salario
            íntegro, los días señalados en el artículo 74 de la Ley Federal del trabajo en caso de no cumplir con
            los 6 días de trabajo por semana, es decir tenga una falta de manera injustificada, se le estará
            descontando el proporcional correspondiente en el pago del día de descanso, así como el día que no haya
            asistido a laborar.
        </p>
        <p class="mt-3">
            <b>DÉCIMA PRIMERA</b>. - Los salarios correspondientes a los días de descanso obligatorio, vacaciones y
            aguinaldo, se pagarán tomando como salario diario el promedio de las percepciones obtenidas en los
            treinta días anteriores efectivamente trabajados, conforme al párrafo segundo del artículo 89 de la Ley
            Federal del trabajo.
        </p>
        <p class="mt-4">
            <b>DÉCIMA SEGUNDA</b>. - Modernización, calidad, control de pagos. <b>“EL TRABAJADOR”</b> deberá contar
            con un correo electrónico y teléfono inteligente (smartphone) con la capacidad de memoria para sostener
            la aplicación móvil que se le proporcionará de parte de la empresa, para llevar un registro de las
            asistencias de <b>“EL TRABAJADOR”</b>, así como de las actividades que este realiza durante su jornada
            laboral conforme al <b>Anexo II Condiciones Generales de Trabajo</b>.
        </p>
        <p class="mt-3 d-flex justify-content-center text-wrap">
            “EL TRABAJADOR” registro de su correo electrónico:
        </p>
        <p class="w-100 d-flex justify-content-center">
            <span class="email bg-info text-wrap">*</span>
        </p>
        <p class="mt-3">
            <b>“EL TRABAJADOR”</b> tendrá la obligación de registrar sus asistencias en el sistema de la aplicación
            móvil. Se contará como
            inasistencia si <b>“EL TRABAJADOR”</b> al ingresar a su jornada laboral no registra su asistencia en el
            sistema mencionado, dicha
            sanción se descontará de su salario.
        </p>
        <p class="mt-3">
            Los datos registrados en la aplicación móvil quedaran respaldados en el sistema operativo de la empresa,
            así como en teléfono inteligente (smartphone) de <b>“EL TRABAJADOR”</b>, toda vez con su previa
            autorización con forme el <b>Aviso de Privacidad ARCO</b>.
        </p>
        <p class="mt-3">
            <b>“EL TRABAJADOR”</b> recibirá indicaciones para utilizar el sistema de la aplicación móvil
            proporcionada por <b>“LA EMPRESA”</b> con forme al Manual de Contratación.
        </p>
        <p class="mt-3">
            Desde este momento <b>“EL TRABAJADOR”</b> acepta la responsabilidad de descargar la aplicación móvil y
            seguir las indicaciones de su uso, <b>“EL TRABAJADOR”</b> se compromete a utilizar de manera responsable
            la aplicación móvil y de no ser este el caso y conforme al Artículo 47 fracción XI de la Ley Federal del
            Trabajo, será un motivo para de Recisión sin responsabilidad de <b>“LA EMPRESA”</b>.
        </p>
        <p class="mt-3">
            <b>DÉCIMA TERCERA. - MEDIOS DE NOTIFICACIÓN</b>, la comunicación que tendrá <b>“LA EMPRESA” con “EL
                TRABAJADOR”</b> serán por los medios digitales que incluyen las páginas web, las redes sociales, los
            audios digitales, correos electrónicos y dispositivos móviles que se consideran como los medios de
            comunicación social; por el cual <b>“EL TRABAJADOR”</b> podrá ser notificado sobre los siguientes
            aspectos:
        </p>
        <ul>
            <li> Comunicados de actividades laborales.</li>
            <li> Envió de evaluaciones <b>“Parámetros De Evaluación Y Medición Semanal Prosman”</b></li>
            <li> Comunicados sobre temas administrativos.</li>
            <li>Comunicados de bienestar y salud digna. </li>
            <li>Comunicados Legales. </li>
            <li>
                Y entre otros comunicados que contengan contenidos de aquella información que fluye dentro de la
                operatividad de <b>“LA EMPRESA”</b>.
            </li>
            <li>
                Y otros que determine <b>PROSMAN</b>.
            </li>
        </ul>
        <p>
            Así mismo se le informa al <b>“TRABAJADOR”</b> que conforme a la cláusula <b>CUARTA, QUINTA, SEXTA y
                SEPTIMA</b> será notificado por medio de su correo electrónico que corresponde:
        </p>
        <p class="d-flex justify-content-center">
            <span class="email bg-info"></span>
        </p>
    </div>
    <div class="container m-4">
        <p>
            <b>“EL TRABAJADOR”</b> está de acuerdo de que se le notifique cada resultado que se obtenga por sus
            evaluaciones y que se
            compromete en revisar su bandeja de entrada para la información que le proporcione <b>“LA EMPRESA”</b>
            como medios informativos,
            así como comunicados que estén relacionados a incidencias laborales y causales de aviso de rescisión
            laboral.
        </p>
    </div>
    <div class="container m-4">
        <p>
            <b>DÉCIMA CUARTA</b>. - El salario que percibirá <b>“EL TRABAJADOR”</b> por los servicios a que se
            refiere este contrato será de <b>$ <span class="salario"></span> MXN mensuales.</b> El salario le será
            pagado los días viernes de cada semana, o el día hábil inmediato anterior, si éstos fueran inhábiles,
            debiendo efectuarse el pago del salario correspondiente por parte de <b>“LA EMPRESA”</b> en moneda de
            curso legal, en el centro de trabajo y dentro de la jornada laboral, asimismo el importe del salario
            mencionado incluye la parte proporcional correspondiente al séptimo día, mediante transferencia
            electrónica de fondos a una cuenta bancaria a nombre de <b>“EL TRABAJADOR”</b>; estando obligado <b>“EL
                TRABAJADOR”</b>, a firmar las constancias de pago correspondientes, teniendo en cuenta lo dispuesto
            en los artículos 108 y 109 de la Ley Federal del trabajo.
        </p>
        <p class="mt-4">
            <b>“LAS PARTES”</b> convienen estar sujetos a <b>“BENEFICIOS”</b> que proporciona <b>“LA EMPRESA”</b> a
            favor de <b>“EL TRABAJADOR”</b> en razón a su salario que es de forma neta y del cual podrá ser variado
            conforme a sus aptitudes por desempeño labora en razón a las disposiciones especiales del <b>ANEXO IX“DE
                LOS BENEFICIOS”</b> del que describe es de forma extraordinaria conforme a los días laborados, su
            efectividad y cumplimento en el trabajo (premios de puntualidad y de asistencia, incentivos y otros que
            determine <b>“LA EMPRSA”</b>, que tendrá el carácter de extraordinario y de previsión social, por lo que
            no formará parte del salario de <b>“EL TRABAJADOR”</b>, ni lo integrará en razón a las disposiciones
            especiales del <b>Anexo “DE LOS BENEFICIOS</b>.
        </p>
        <p class="mt-4">
            Expresan de común acuerdo que cuando <b>“EL TRABAJADOR”</b> tenga crédito de vivienda pendiente de pago
            con <b>INFONAVIT</b>, el patrón descontará la aportación correspondiente a cargo de aquel, de acuerdo
            con el “Factor de Pago Mensual, expresado en Unidad de medida y actualización”, que sea determinado por
            el <b>INFONAVIT</b>, mismo que será enterado a esa institución por <b>“LA EMPRESA”</b>.
        </p>
    </div>
    <div class="container m-4">
        <p>
            <b>DÉCIMA QUINTA. - “EL TRABAJADOR”</b>, al cumplir un año de labor y acreditándolo podrá disfrutar de
            un periodo de vacaciones pagadas, de doce días laborales, que aumentará en dos días laborables, hasta
            llegar a quince, por cada año subsecuente de servicios. Después del cuarto año, el periodo de vacaciones
            aumentará en dos días por cada cinco años de servicio, según lo marca la Ley Federal de Trabajo. Los
            salarios correspondientes a las vacaciones se cubrirán con una <b>prima del veinticinco</b> por ciento
            sobre los mismos.
        </p>
        <p class="mt-3">
            Las vacaciones no podrán compensarse con una remuneración
        </p>
        <p class="mt-3">
            Si la relación de trabajo termina antes de que se cumpla con la fecha determinada conforme a la cláusula
            <b>SEXTA</b>, el trabajador tendrá derecho a la remuneración proporcional al tiempo de servicios
            prestados.
        </p>
    </div>
    <div class="container m-4">
        <p>
            <b>DÉCIMA SEXTA. - Corresponderá a “EL TRABAJADOR”</b> un aguinaldo anual que deberá pagarse antes del
            20 de diciembre, equivalente a 15 días de salario conforme al cumplimiento a lo establecido en la
            cláusula <b>CUARTA</b>.
        </p>
        <p class="mt-4">
            Cuando no haya cumplido el año de servicio conforme a la fecha que se determinó en el presente
            instrumento, referente a la cláusula <b>SEXTA</b> tendrá derecho al proporcional según la antigüedad
            generada al momento de la entrega de dicha prestación, conforme al tiempo que se encontró laborando por
            parte de <b>“LA EMPRESA”</b> derivado a la terminación anticipada del presenteinstrumento.
        </p>
    </div>
    <div class="container m-4">
        <p>
            <b>DÉCIMA SEPTIMA. – “EL TRABAJADOR”</b> contará con la garantía de la Seguridad social y demás
            prestaciones que le correspondan con forme lo determine la Ley Federal del Trabajo.
        </p>
        <p class="mt-4">
            <b>DÉCIMA NOVENA. – “EL TRABAJADOR”</b> se compromete a portar en todo momento el uniforme que <b>“LA
                EMPRESA”</b> le otorga,
            y por ende a cuidarlo y mantenerlo en buen estado de uso y conservación, así como devolverlo en buen
            estado al termino de este
            contrato independientemente a las causales correspondientes al Anexo II Condiciones Generales de
            Trabajo, por lo que el
            uniforme deberá de ser entregado con las siguientes características: limpio, ordenado, completo,
            sanitizado y emplayado, el cual
            tiene un costo de <b class="bg-info">$850.00 pesos (Ocho Cientos Cincuenta Pesos M.N.)</b>, que
            incluye la paquetería correspondiente según lo
            estipulado en el <b>Anexo II y Anexo VI</b>.
        </p>
    </div>
    <div class="container m-4">
        <p>
            <b>VIGÉSIMA. – “LA EMPRESA”</b>, a través del personal que designe, evaluará constantemente el desempeño
            de <b>“EL
                TRABAJADOR”</b>, proporcionándole todos los elementos y herramientas para sus funciones, para
            verificar si <b>“EL TRABAJADOR”</b>
            desarrolla los conocimientos y habilidades necesarias para el puesto, mismas evaluaciones que se
            realizaran a criterio del jefe
            inmediato y del departamento jurídico o de recursos humanos. <b>“EL TRABAJADOR”</b> prestará sus
            servicios dentro de la jornada
            legal ordinaria, que será de 8 horas contando durante esta con 30 minutos diarios destinados para
            ingerir alimentos y/o descansar
            dentro de las instalaciones de <b>“LA EMPRESA”</b>, así también se otorgará conforme a lo establecido en
            la Ley Federal del Trabajo un
            día de descanso semanal.
        </p>
    </div>
    <div class="container m-4">
        <p>
            <b>VIGÉSIMA PRIMERA. - “EL TRABAJADOR”</b>, conviene a someterse a los reconocimientos médicos que
            periódicamente ordene
            <b>“LA EMPRESA”</b> en los términos de la fracción X del artículo 134 de la Ley Federal del trabajo, en
            la inteligencia de
            que el médico que los practique será designado por <b>“LA EMPRESA”</b>, así también manifiesta que los
            datos proporcionados a
            través del <b>Anexo IV “Cuestionario de Salud”</b> son verdaderos, y en caso de no serlo se tomará como
            causa de rescisión de la
            relación de trabajo, sin responsabilidad para el patrón como lo indica el Art 47 Fracción I.
        </p>
    </div>
    <div class="container m-4">
        <p>
            <b>VIGÉSIMA SEGUNDA. - “EL TRABAJADOR”</b>, se obliga a cumplir con toda exactitud las indicaciones que
            reciba de <b>“LA EMPRESA”</b>, así como realizar las labores que se le designen en caso contrario será
            motivo de <b>RESCISIÓN DE CONTRATO SIN RESPONSABILIDAD PARA “LA EMPRESA”</b>.
        </p>
        <p class="mt-4">
            Por consecuencia <b>“EL TRABAJADOR”</b> será capacitado y adiestrado en los términos de los planes y
            programas establecidos o que
            se establezcan, por <b>“LA EMPRESA”</b>, de común acuerdo con <b>“EL CLIENTE”</b>, conforme a lo
            dispuesto en el Capítulo III Bis, Título
            Cuarto, de la Ley Federal del trabajo; por ende y en consecuencia <b>“EL TRABAJADOR”</b> se obliga a
            ejecutar sus actividades
            laborales conforme a los estándares de calidad referente al puesto de auxiliar de limpieza,
            correspondiente a la jornada de trabajo y
            conforme a los <b>“Parámetros De Evaluación Y Medición Semanal Prosman”</b>, así como lo referente a los
            <b>Anexos II y V</b>.
        </p>
    </div>
    <div class="container m-4">
        <p>
            <b>VIGÉSIMA TERCERA. - “EL TRABAJADOR”</b> será capacitado respecto de las normas de seguridad e higiene
            aplicables en la
            empresa, y con dicho conocimiento estará obligado a observar las medidas preventivas de seguridad e
            higiene que establecen los
            reglamentos internos, así como la normatividad legal aplicable incluyendo las normas oficiales mexicanas
            expedidas por las
            autoridades competentes, así como las que indique la empresa para la prevención de riesgos de trabajo.
            En este sentido se
            llevarán a cabo simulacros para el caso de sismo e incendio, debiéndose conformar las brigadas de
            primeros auxilios, rescate y
            salvamento y demás que establece la legislación de protección civil aplicable.
        </p>
        <p class="mt-4">
            <b>“EL TRABAJADOR”</b> se compromete también a dar cumplimiento al Protocolo de Seguridad Sanitaria que
            se establezca en <b>“LA
                EMPRESA”</b>, y en caso de rehusarse a su cumplimiento podrá llevarse a cabo la Rescisión de la
            Relación de Trabajo sin
            responsabilidad para el patrón con base en la Fracción XII del artículo 47 de la Ley Federal del
            Trabajo.
        </p>
    </div>
    <div class="container m-4">
        <h4>VIGÉSIMA CUARTA. - DE LA RESPONSABILIDAD DEL “TRABAJADOR”</h4>
        <p>
            En términos del Reglamento Interior de Trabajo de <b>“LA EMPRESA”</b> y bajo a los artículos 134 con
            forme a sus fracciones de la Ley
            Federal del Trabajo, así como lo estipulado en el <b>“Anexo II Condiciones Generales de Prosman”, “EL
                TRABAJOR”</b> deberá de
            actuar con forme a lo estipulado dentro del centro de trabajo identificado como <b
                class="nombreCedis bg-info">“T.70” ALTABRISA VILLAHERMOSA</b> y en el
            supuesto de que <b>“EL TRABAJADOR”</b> incumpla a sus obligaciones laborales conforme a lo antes
            estipulado y sea causal de
            <b>“INCIDENCIAS”</b> (son todo cambio o alteración de la rutina laboral que ocurre en un periodo de la
            jornada laboral que sea causante
            de un perjuicio o consecuencia jurídica que afecte <b>“AL CLIENTE”</b>), toda vez que es enfocado a la
            prestación de servicios de
            limpieza y del cual <b>“EL TRABAJADOR”</b> genere afectaciones a sus tareas y funciones como <b
                class="bg-info puesto">AUXILIAR DE LIMPIEZA</b>, del cual
            <b>”EL TRABAJADOR”</b> se vuelve acreedor a una remuneración y, por lo tanto, lleva a aplicar cambios en
            su nómina e inclusive ser
            causante a la terminación de la relación laboral sin responsabilidad patronal, conforme a lo siguiente:
        </p>
        <ul>


            <li>
                <b>A.- “EL TRABAJADOR”</b> está obligado a realizar un <b>“REPORTE”</b> con forme a su jornada
                laboral, referente a sus
                actividades diarias, en razón al inicio de la jornada laboral (entrada), durante sus actividades
                laborales hasta su
                finalización de su jornada laboral (salida), cada <b>“REPORTE”</b> esta supervisado por su jefe
                inmediato a efecto de hacer
                cumplir y conocer las actividades que desempeña <b>“EL TRABAJADOR”</b> durante su jornada laboral,
                por lo que <b>“LA
                    EMPRESA”</b> ejecutará la cláusula <b>QUINTA</b>
            </li>
            <li>
                <b>B.- “EL TRABAJADOR”</b> está obligado en generar su reporte sobre una causal referente a una
                <b>“INCIDENCIA”</b> que
                pongan en riesgo o cause consecuencia de carácter administrativo, operativo y legal a favor del
                <b>“TRABAJADOR”</b> o en
                contra de su mal manejo de información y actividad que debe desempeñar en su jornada laboral
                conforme a las
                disposiciones legales e internas de <b>“LA EMPRESA”</b>.
            </li>
            <li>
                <b>C.-“EL TRABAJADOR”</b> quien es contratado bajo el puesto de <b class="puesto bg-info">Auxiliar
                    de limpieza</b> ubicado en la <b class="nombreCedis bg-info">T.70 ALTABRISA VILLAHERMOSA</b>,
                una de las principales
                actividades con forme al <b>Anexo I Perfil del Puesto</b>, deberá de ejecutar y
                demostrar capacidades como personal de limpieza en el manejo de suministros y productos químicos de
                limpieza
                enfocados al inmobiliario e instalaciones del departamento de tiendas y que estarán bajo su
                responsabilidad toda vez que
                sus actividades consisten en hacer la limpieza de las instalaciones de <b>“C&A”</b>, del cual <b>“EL
                    TRABAJADOR”</b> acepta
                asumir la responsabilidad que pudiese ocasionarle por un descuido imputable <b>“EL TRABAJADOR”</b>
                es decir el daño a
                las instalaciones que cause perjuicios por la imprudencia que pueda generar; por lo que <b>“EL
                    TRABAJADOR” <span class="nombreTrabajador bg-info">{{ $nombreCompleto }}</span> ACEPTA</b>
                la responsabilidad que pueda causar por los posibles
                daños causados <b>“AL
                    CLIENTE”</b>.
            </li>
        </ul>

        <p class="mt-5">
            De lo anterior debidamente manifestado en el presente clausulado <b>VIGESIMA “A”, “EL TRABAJADOR”</b>
            tendrá responsabilidad
            con <b>“EL CLIENTE”</b> y con <b>“LA EMPRESA”</b> en el supuesto del incumplimiento a la cláusula o en
            su caso por incurrir conforme a lo
            estipulado en la cláusula <b>VIGÉSIMA PRIMERA</b>, del cual pueda ser causal a una responsabilidad de
            carácter Penal y Civil conforme
            a la competencia jurídicamente o legalmente se disponga por el concepto de “daños” a las instalaciones y
            mobiliaria que se
            encuentran en el centro de trabajo <b class="bg-info nombreCedis">T.70 ALTABRISA VILLAHERMOSA</b>.
        </p>
    </div>
    <div class="container m-4">
        <p class="mt-5">
            <b>VIGÉSIMA QUINTA.</b> - En términos del artículo 32 de la Ley Federal del Trabajo, <b>“EL
                TRABAJADOR”</b> será responsable civilmente
            ante <b>“LA EMPRESA”</b> por los daños y/o perjuicios que le cause con motivo de la comisión de actos
            lícitos o ilícitos (entre estos, los
            delitos, hechos cometidos con dolo o culpa, abuso de los derechos, simulación de actos jurídicos,
            celebración de actos jurídicos en
            fraude de acreedores, incumplimiento de obligaciones contractuales, recepción dolosa de lo indebido,
            hechos ejecutados de mala
            fe y los demás que sean contrario a la ley), y que sean consecuencia directa e inmediata de la relación
            de trabajo pactada en el
            presente contrato, estando obligado a repararlos en términos de lo establecido por los artículos
            aplicables del Código Civil del
            Estado de Puebla, acordando ambas partes que, en caso de controversia por la responsabilidad civil antes
            señalada, se someterán
            a los tribunales de la Ciudad de Puebla, renunciando a cualquier fuero presente o futuro que les pudiera
            corresponder por razón de
            su domicilio.
        </p>
    </div>
    <div class="container m-4">
        <p>
            <b>VIGÉSIMA SEXTA- - “EL TRABAJADOR”</b> se obliga a guardar escrupulosamente los secretos técnicos,
            comerciales, los de
            fabricación de los productos y los concernientes a la prestación de servicios, respecto de los que
            intervenga directa o
            indirectamente o de los cuales tenga conocimiento por razón del trabajo que desempeñe, así como de los
            asuntos administrativos
            reservados, cuya divulgación pueda causar perjuicios a la empresa, siendo que en caso de revelar los
            secretos mencionados
            procederá la rescisión del presente contrato de trabajo por causa imputable al trabajador, en términos
            de los artículos 47 fracción IX
            y 134 fracción XIII de la Ley Federal del Trabajo, en relación con los artículos 82, 85, 86 y demás
            relativos y aplicables de la Ley de
            la Propiedad Industrial.
        </p>
        <p class="mt-4">
            De la misma manera <b>“EL TRABAJADOR”</b> se hace sabedor, que, en caso de incumplimiento a esta
            cláusula, podrá estar sujeto, a
            las sanciones previstas por los tipos penales establecidos en el <b>TÍTULO VIGÉSIMO SEXTO</b> del Código
            Penal Federal,
            denominado: <b>“De los Delitos en Materia de Derechos de Autor”</b>.
        </p>
        <p class="mt-5">
            <b>“LA EMPRESA”</b> es la responsable del tratamiento de los datos personales que proporcionen los
            trabajadores y constituyen un
            secreto confidencial en términos de la Ley Federal de Protección de Datos Personales en Posesión de los
            Particulares y por lo
            tanto, <b>“LA EMPRESA”</b>, no podrá divulgarlos o darles tratamiento, sin la autorización expresa y por
            escrito de <b>“EL
                TRABAJADOR”</b>, quien desde este momento otorga su consentimiento expreso para el tratamiento legal
            de la información o datos
            personales sensibles o comerciales que proporciona a <b>“LA EMPRESA”</b>, otorgando en su caso <b>“EL
                TRABAJADOR”</b> su
            consentimiento para que surta efectos el aviso de privacidad mismo que se puede consultar en la página
            <b><a href="https://prosman.com.mx/">https://prosman.com.mx/</a></b>
        </p>
        <p class="mt-4">
            En cualquier momento, <b>“EL TRABAJADOR”</b> podrá hacer uso de los derechos de acceso, rectificación,
            cancelación u oposición de sus datos personales, conforme a lo establecido en el Aviso de privacidad
            anteriormente mencionado.
        </p>
    </div>
    <div class="container m-4">
        <p>
            <b>VIGÉSIMA SEPTIMA.</b> –Este contrato podrá modificarse, adicionarse o prorrogarse mediante uno o más
            convenios o cláusulas
            adicionales que se anexan a este contrato, formando parte integrante del mismo. Este contrato podrá ser
            modificado, rescindido o
            terminado en los casos y con los requisitos establecidos en la Ley Federal del trabajo.
        </p>
    </div>
    <div class="container m-4">
        <p>
            <b>VIGÉSIMA OCTAVA. “LA EMPRESA”</b> podrá dar por rescindida la relación laboral, sin responsabilidad
            alguna de los supuestos en
            la cláusula <b>SEPTIMA</b> y en el caso de que <b>“EL TRABAJADOR”</b>, no cumpla con los requisitos
            cuantitativos y cualitativos que <b>“LA
                EMPRESA”</b> le designe para medir la productividad que respalde su permanencia laboral, mismos que
            se le han dado a conocer a
            <b>“EL TRABAJADOR”</b>, previamente.
        </p>
    </div>
    <div class="container m-4">
        <p>
            <b>VIGÉSIMA NOVENA.</b> - Si al término de la relación laboral existiera algún adeudo con <b>“LA
                EMPRESA”, “EL TRABAJADOR”</b>,
            autoriza que el importe del adeudo sea retenido del finiquito correspondiente. En el supuesto de que no
            cubriera el monto de la
            deuda <b>“LA EMPRESA”</b> solicitará a <b>“EL TRABAJADOR”</b>, el pago de la diferencia para liquidar el
            adeudo total.
        </p>
    </div>
    <div class="container m-4">
        <p>
            <b>TRIGÉSIMA</b>. - Causa de terminación de la relación laboral por causa de Rescisión o Terminación
            Anticipada de la Relación Contractual con el <b>“CLIENTE”</b> en razón a la Prestación de Servicios de
            Limpieza:
        </p>
        <p class="mt-4">
            <b>“LA EMPRESA”</b> acuerda con <b>“EL TRABAJADOR”</b> que en caso de quedar Rescindido de forma
            anticipado el Contrato de
            Prestación de Servicios que la empresa tiene con el <b>“CLIENTE”</b> contratante del servicio, <b>“EL
                TRABAJADOR”</b> será merecedor del
            salario equivalente con una gratificación determinado por <b>“LA EMPRESA”</b> y conforme a la <b>Ley
                Federal del Trabajo</b>. En caso de
            que <b>“EL TRABAJADOR”</b> lo solicite podrá ser reubicado con otro <b>“CLIENTE”</b> correspondiente a
            su ciudad, si en este hubiera
            plazas laborales disponibles.
        </p>
    </div>
    <div class="container m-4">
        <p>
            <b>TRIGESIMA PRIMERA. - CONTRATACIÓN POR MEDIOS ELECTRÓNICOS</b>.- Las partes acuerdan que en lugar de
            una firma
            original autógrafa, conforme al <b>“Manual de firma de contrato”</b>, así como cualquier consentimiento,
            aprobación u otros
            documentos relacionados con el mismo, podrán ser firmados por medio del uso de firmas electrónicas,
            digitales, numéricas,
            alfanuméricas, huellas de voz, biométricas o de cualquier otra forma y que dichos medios alternativos de
            firma y los registros en
            donde sean aplicadas dichas firmas, serán consideradas para todos los efectos, incluyendo pero no
            limitado a la legislación civil,
            mercantil, protección al consumidor y a la <b>NOM-151-SCFI-2016</b>, con la misma fuerza y consecuencias
            que la firma autógrafa
            original física de la parte firmante. Si el contrato o cualquier otro documento relacionado con el mismo
            es firmado por medios
            electrónicos o digitales, las Partes acuerdan que los formatos del contrato y los demás documentos
            firmados de tal modo serán
            conservados y estarán a disposición de <b>“EL TRABAJADOR”</b>, por lo que conviene que cada una y toda
            la información enviada por
            <b>“LA EMPRESA”</b> a la dirección de correo electrónico y/o número telefónico proporcionado por <b>“EL
                TRABAJADOR”</b> al momento de
            celebrar el presente Contrato será considerada como entregada en el momento en que la misma es enviada,
            siempre y cuando
            exista confirmación de recepción.
        </p>
        <p class="mt-4">
            <b>“EL TRABAJADOR”</b> tendrán 48 horas naturales a la confirmación de recepción del presente contrato
            para devolverlo firmado, por
            los medios indicados por la <b>“LA EMPRESA”</b> en caso contrario, se tendrá por entendido que el
            trabajador no desea continuar con la
            relación de trabajo y por ende se dará por terminada.
        </p>
    </div>
    <div class="container m-4">
        <p>
            <b>TRIGÉSIMA SEGUNDA. – “EL TRABAJADOR”</b> hace constar que conoce el Reglamento Interior de Trabajo de
            la empresa, del que ha recibido un ejemplar como <b>ANEXO V</b>, y se obliga a cumplir con las
            disposiciones en él contenidas.
        </p>
        <p>
            En razón a lo no previsto en el presente contrato, será subsanado conforme a lo dispuesto en la Ley
            Federal del Trabajo.
        </p>
    </div>
    <div class="container m-4">
        <p>
            <b>TRIGÉSIMA TERCERA.</b> - Las partes convienen en que todo lo previsto en el presente contrato se
            regirá por lo dispuesto en la Ley
            Federal del Trabajo y que, para todo lo que se refiere a interpretación, ejecución y cumplimiento de
            este, se someten expresamente
            a la jurisdicción y competencia de los Centros de Conciliación y los Tribunales Laborales del Estado de
            <b class="bg-info estadoCedis">VILLAHERMOSA</b> con sede
            en la jurisdicción y la competencia de acuerdo al domicilio de la fuente de trabajo.
        </p>
        <p class="mt-4">
            En el supuesto de que ambas partes acuerden someterse mediante acuerdos conciliatorios de carácter
            privados a efecto de
            celebrar un Convenio para dar por terminado la relación laboral, del cual podrá ser por medios digitales
            identificados como redes
            sociales (zoom, WhatsApp, Teams) de acuerdo a los dispositivos electrónicos que se encuentren en alcance
            de ambas partes a
            efecto de llevar acabo un acuerdo conciliatorio de carácter privado y que este tendrá valides jurídica
            conforme a la Ley Federal de
            Trabajo
        </p>
    </div>
    <div class="container m-4">
        <p>
            Leído que fue el presente contrato por las partes, e impuestas de su contenido y fuerza legal, lo firman
            en cinco hojas útiles, en <b class="bg-info estadoCedis">VILLAHERMOSA</b>, MEXICO, a día <b><span
                    class="dia">***</span></b> DE
            <b><span class="mes">***</span></b> DEL <b><span class="year">***</span></b>, quedando un tanto
            en poder de cada una de las mismas.
        </p>
    </div>
    <div class="container my-4">
        <div class="row justify-content-between">


            <div class="col-md-5 text-center p-3 border rounded shadow-sm bg-light d-flex flex-column">


                <div class="d-flex align-items-center justify-content-center mb-2" style="height: 150px;">
                    <img src="{{ asset('img/anexos/firmaOF.png') }}" alt="Firma representante"
                        style="max-height: 100%; max-width: 100%; object-fit: contain;">
                </div>

                <hr class="w-50 mx-auto">

                <span class="fw-bold d-block">JANETT FLOREZ ESPINOSA</span>
                <span class="text-muted">Representante Legal</span>
            </div>


            <div class="col-md-5 text-center p-3 border rounded shadow-sm bg-light d-flex flex-column">


                <div class="d-flex align-items-center justify-content-center mb-2" style="height: 150px;">
                    <img src="{{ asset('storage/Datos_Colaborador/' . $idColaborador . '/historial/firmas_colaborador/firma_' . $idColaborador . '.png') }}"
                        alt="Firma trabajador" style="max-height: 100%; max-width: 150%; object-fit: contain;">
                </div>

                <hr class="w-50 mx-auto">

                <h5 class="fw-bold mb-1 text-uppercase text-dark">
                    {{ $nombreCompleto }}
                </h5>
                <span class="text-muted">TRABAJADOR</span>
            </div>

        </div>
        <div class="container m-4">
            <p>
                <b>
                    Leído y enterado que lo antes manifestado es cierto y verídico, sin existir dolo, error,
                    lesión y reticencia en razón al Contrato Individual de Trabajo. Una vez hecho lo anterior,
                    ratifican y firman el presente documento en cada una de las hojas que lo contiene el
                    presente escrito, a los <span class="dia"></span> días del mes de <span class="mes"></span>
                    del año <span class="year"></span>
                </b>
            </p>
        </div>
        @if ($estatus_contratoDigital == 1)
            <div class="container m-4">
                <div class="d-flex justify-content-center align-items-center mb-3 me-3 mt-4">
                    <form action="{{ route('contrato.aceptar') }}" method="POST">
                        @csrf
                        <button class="btn btn-primary">
                            Acepto los términos y condiciones del Contrato Digital
                        </button>
                    </form>
                </div>
            </div>
        @endif


    </div>
    </main>


</body>


<body class="back">

    <main class="main-anexos">

        <div class="col-sm-12 col-lg-6 mt-4 mx-auto border rounded text-justify mb-5 bg-white shadow-lg p-4 p-md-5">
            <div class="w-100 d-flex flex-column px-1 align-items-center mb-4">
                <h2 class="display-6 fw-bold text-primary mb-3">ANEXO I PERFIL DE PUESTO</h2>


            </div>

            <div class="container mt-4">
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="table-primary text-white">
                            <tr>
                                <th colspan="4" class="text-center h5 py-3">ANEXO 1: PERFIL DE PUESTO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="bg-primary text-white fw-bold col-3">Objetivo:</td>
                                <td colspan="3">Realizar la limpieza y desinfección en instalaciones y
                                    mobiliario,
                                    mediante el uso de materiales especializados de limpieza, para mantener en
                                    óptimas
                                    condiciones las tiendas departamentales.</td>
                            </tr>
                            <tr>
                                <td class="bg-primary text-white fw-bold">Descripción General del Puesto:</td>
                                <td colspan="3">Se requiere personal de limpieza que ejecute un adecuado
                                    desempeño
                                    cumpliendo con los estándares y técnicas para desinfectar, limpiar y
                                    mantener una
                                    buena higiene mediante las tareas de limpieza que consisten en eliminar la
                                    suciedad
                                    visible, como polvo, las migas y los gérmenes de las superficies u objetos
                                    que se
                                    encuentran en un área, superficie u objeto, utilizando instrumentos de
                                    utilidad y
                                    químicos que ayuden a producir calidad enfocada a la limpieza a favor de la
                                    tienda
                                    departamental.</td>
                            </tr>
                            <tr>
                                <td class="bg-primary text-white fw-bold col-3">Nombre del Puesto:</td>
                                <td class="col-3"><span
                                        class="puesto text-primary fw-bold">{{ $puesto }}</span>
                                </td>
                                <td class="bg-primary text-white fw-bold col-3">Jefe Inmediato:</td>
                                <td class="col-3">Coordinador de Región () Prosman</td>
                            </tr>
                            <tr>
                                <td class="bg-primary text-white fw-bold">Área:</td>
                                <td>Cliente C&A</td>
                                <td class="bg-primary text-white fw-bold">Domicilio:</td>
                                <td>(Tienda departamental)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mt-5">
                    <h4 class="text-center text-primary mb-3 pb-2 border-bottom">REQUISITOS DEL PUESTO</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-primary text-white">
                                <tr>
                                    <th colspan="6" class="text-center py-2">Requisitos</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="bg-primary text-white fw-bold col-2">Edad:</td>
                                    <td class="col-2">18 a 55 años</td>
                                    <td class="bg-primary text-white fw-bold col-2">Escolaridad:</td>
                                    <td class="col-2">Mínima Preparatoria</td>
                                    <td class="bg-primary text-white fw-bold col-2">Celular (Android/iOS):</td>
                                    <td class="col-2">Sí</td>
                                </tr>
                                <tr>
                                    <td class="bg-primary text-white fw-bold">Sexo:</td>
                                    <td>Hombre o Mujer</td>
                                    <td class="bg-primary text-white fw-bold">Experiencia Mínima:</td>
                                    <td>3 meses</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="bg-primary text-white fw-bold">Conocimientos:</td>
                                    <td colspan="5">Manejo de herramientas de limpieza, uso de químicos de
                                        limpieza,
                                        cumplimiento con los estándares de calidad enfocado a la higiene,
                                        trabajar en
                                        equipo, manejo básico de WhatsApp, aplicaciones y correo electrónico.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-primary text-white fw-bold text-center" colspan="3">
                                        Habilidades
                                    </td>
                                    <td class="bg-primary text-white fw-bold text-center" colspan="3">
                                        Valores</td>
                                </tr>
                                <tr>
                                    <td colspan="3">Proactivo, Agilidad, Puntualidad, Organizado y
                                        Comunicación</td>
                                    <td colspan="3">Responsabilidad, Honestidad, Honradez, Respeto y
                                        Tolerancia</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mt-5">
                    <h4 class="text-center text-primary mb-3 pb-2 border-bottom">JORNADA LABORAL</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <tbody>
                                <tr>
                                    <td class="bg-primary text-white fw-bold col-3">Días Laborales:</td>
                                    <td class="col-3">Lunes a Domingo</td>
                                    <td class="bg-primary text-white fw-bold col-3">Horario:</td>
                                    <td class="col-3">6 horas (escribir horario)</td>
                                </tr>
                                <tr>
                                    <td class="bg-primary text-white fw-bold">Día de Descanso:</td>
                                    <td colspan="3">Descanso entre semana</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="bg-primary text-white fw-bold text-center">
                                        Uniforme
                                        Necesario</td>
                                </tr>
                                <tr>
                                    <td colspan="4">Playera Oscura, Pantalón, Zapatos anti-derrapantes,
                                        Casaca</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mt-5 row">
                    <div class="col-md-6 mb-4">
                        <div class="card border-primary">
                            <div class="card-header bg-primary text-white fw-bold text-center h5">Actividades
                                Diarias
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">1.- Realizar limpieza de piso de ventas</li>
                                <li class="list-group-item">2.- Realizar limpieza de vestidores y probadores
                                </li>
                                <li class="list-group-item">3.- Realizar limpieza de área de cajas</li>
                                <li class="list-group-item">4.- Realizar limpieza de áreas internas</li>
                                <li class="list-group-item">5.- Realizar limpieza de las repisas y mobiliario
                                    (piso de
                                    ventas)</li>
                                <li class="list-group-item">6.- Realizar limpieza de oficinas</li>
                                <li class="list-group-item">7.- Realizar limpieza de baños</li>
                                <li class="list-group-item">8.- Realizar limpieza de comedor y lockers</li>
                                <li class="list-group-item">9.- Realizar retiro de basura y cartón</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card border-primary">
                            <div class="card-header bg-primary text-white fw-bold text-center h5">Actividades
                                Esporádicas</div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">1.- Realizar limpieza de escaparates y exteriores
                                </li>
                                <li class="list-group-item">2.- Realizar recolección de cartón</li>
                                <li class="list-group-item">3.- Realizar limpieza de Almacenes</li>
                                <li class="list-group-item">4.- Realizar limpieza de Muros y Mobiliarios (1.80
                                    mts
                                    máximo)</li>
                                <li class="list-group-item">5.- Realizar limpieza de Maniquís (libre de ropa)
                                </li>
                                <li class="list-group-item">6.- Realizar limpieza de Zoclos en piso de ventas
                                </li>
                                <li class="list-group-item">7.- Realizar limpieza de Zoclos internos</li>
                                <li class="list-group-item ">8.- Las actividades son numerativas mas no
                                    limitativas.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <h4 class="text-center text-primary mb-3 pb-2 border-bottom fw-bold">
                        RESPONSABILIDADES
                    </h4>

                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <tbody>
                                <tr>
                                    <td class="bg-primary text-white fw-bold col-3">
                                        Responsabilidades:
                                    </td>
                                    <td class="col-9">
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-3 d-flex">
                                                <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                                Limpiar las áreas asignadas dentro de las instalaciones
                                                (sacudir, barrer, trapear, lavar, mover, acomodar, etc.).
                                            </li>
                                            <li class="mb-3 d-flex">
                                                <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                                Registrar las actividades rutinarias de limpieza y asistencia
                                                mediante bitácoras o aplicaciones tecnológicas proporcionadas
                                                por
                                                Prosman.
                                            </li>
                                            <li class="mb-3 d-flex">
                                                <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                                Ejecutar tareas de limpieza profunda y apoyar en proyectos
                                                especiales.
                                            </li>
                                            <li class="mb-3 d-flex">
                                                <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                                Reportar deficiencias, necesidades de material o herramientas,
                                                y cualquier incidencia relevante.
                                            </li>
                                            <li class="d-flex">
                                                <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                                Cumplir con los reglamentos y lineamientos establecidos por
                                                Prosman
                                                y la tienda departamental asignada.
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mt-5 border p-3 bg-light rounded">
                    <h4 class="text-center text-primary mb-4 pb-2 border-bottom">ACEPTACIÓN DEL TRABAJADOR</h4>
                    <div class="d-flex flex-column align-items-center py-5">

                        <p class="mb-0 text-muted">Nombre y firma del trabajador:</p>




                        <div class="py-3 mb-3">
                            <img src="{{ public_path('storage/Datos_Colaborador/' . $idColaborador . '/historial/firmas_colaborador/firma_' . $idColaborador . '.png') }}"
                                alt="Firma del trabajador"
                                style="max-width: 900px; max-height: 122px; object-fit: contain;">

                        </div>


                        <h5 class="fw-bold mb-1 text-uppercase text-dark">
                            <span class="nombreTrabajador bg-info">{{ $nombreCompleto }}</span>
                        </h5>

                        <p class="text-secondary ">“EL TRABAJADOR”</p>

                    </div>
                </div>

            </div>
        </div>



        <div class="col-sm-12 col-lg-6 mt-4 mx-auto border rounded text-justify mb-5 bg-white shadow-lg p-4 p-md-5">

            <div class="w-100 d-flex flex-column px-1 align-items-center mb-4">
                <h2 class="display-6 fw-bold text-primary mb-3">CONDICIONES GENERALES DE TRABAJO PROSMAN</h2>
            </div>

            <div class="container mt-4">


                <div class="table-responsive mb-4">
                    <table class="table table-bordered">
                        <thead class="table-primary text-white">
                            <tr>
                                <th class="text-center py-3">DISPOSICIONES GENERALES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-3">
                                    Por medio de la presente se da conocer las Disposiciones Generales
                                    correspondientes
                                    al
                                    Reglamento Interno de Trabajo de <b>“LA EMPRESA”</b> que se encuentran
                                    vigentes en
                                    el
                                    Territorio Nacional, dentro de las instalaciones de <b>C&A</b> y/o <b>SOCIOS
                                        COMERCIALES</b>.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="text-center mt-5 mb-4 bg-primary bg-opacity-10 py-2 px-3 rounded fw-semibold fs-4">
                    RELACIÓN LABORAL
                </div>

                <ul class="list-unstyled fs-6">

                    <li class="mb-4 p-3 border-start border-4 border-primary bg-light rounded">
                        <h4 class="text-primary fw-bold">A) LA GENERADORA DE EMPLEO:</h4>
                        <p class="mt-2">
                            Es quien contrata a <b>“EL TRABAJADOR”</b> y se denomina como <b>“LA EMPRESA o
                                EMPLEADORA”</b>,
                            cuya razón social es <b>“SERVICIOS E INSUMOS PROSMAN S.A. DE C.V.”</b>, para que
                            <b>“EL TRABAJADOR”</b> desempeñe su empleo en las zonas designadas por su jefe
                            inmediato
                            dentro de
                            una <b>TIENDA DEPARTAMENTAL</b>, conforme al domicilio laboral de <b>“EL
                                CLIENTE”</b>.
                        </p>
                    </li>

                    <li class="mb-4 p-3 border-start border-4 border-primary bg-light rounded">
                        <h4 class="text-primary fw-bold">B) ZONA DE TRABAJO:</h4>
                        <p class="mt-2">
                            La zona de trabajo corresponde al lugar donde <b>“EL TRABAJADOR”</b> desempeñará las
                            actividades
                            relacionadas con su <b>“PERFIL DE PUESTO”</b>, es decir como <b><span
                                    class="puesto"></span></b>,
                            conforme a su Contrato Individual de Trabajo PROSMAN. Su jefe inmediato le indicará
                            la
                            <b>TIENDA DEPARTAMENTAL</b> asignada como lugar de trabajo, donde deberá realizar
                            sus
                            labores a
                            favor de <b>“EL CLIENTE”</b>.
                        </p>
                    </li>

                </ul>

            </div>





            <div class="container m-4">
                <h2 class="text-primary">MATERIAL, EQUIPO, HERRAMIENTAS Y MEDIOS DE COMUNICACIÓN DEL TRABAJO
                </h2>
                <p>Todos los materiales, equipos, herramientas y medios de comunicación son de suma importancia
                    portarlos
                    durante su jornada laboral y conforme al Reglamento Interno del Trabajo, los cuales serán
                    requisitos
                    indispensables para su ingreso y realización de sus actividades laborales, en el supuesto de
                    no
                    cumplir con
                    las siguientes disposiciones será acreedor a un Acta Administrativas correspondiente y misma
                    que
                    será
                    agregada a su evaluación semanal, por lo cual si <b>“EL TRABAJADOR”</b> incurre en tres
                    ocasiones de
                    manera
                    consecutiva en este supuesto se procederá con su baja inmediata sin responsabilidad para
                    <b>“LA
                        EMPRESA”</b>.
                </p>
                <p class="mt-2">
                    De lo anterior se procede a mencionar el listado que utilizará <b>“EL TRABAJADOR”</b> y
                    quienes
                    proporcionarán los elementos correspondientes para el mejor desempeño de su actividad
                    laboral:
                </p>
            </div>

            <div class="container my-4">
                <div class="Empleador table-responsive">

                    <table class="table table-bordered text-center align-middle">

                        <thead class="table-primary">
                            <tr>
                                <th colspan="2"><strong>PROSMAN (EMPLEADOR)</strong></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="fw-semibold">
                                    1. Uniforme <br>
                                    <small>(pantalón, casaca con reflejante)</small>
                                </td>
                                <td>
                                    <img src="{{ asset('img/anexos/uniforme.png') }}" alt="uniforme"
                                        class="img-fluid" width="120">
                                </td>
                            </tr>
                        </tbody>


                        <thead class="table-secondary">
                            <tr>
                                <th colspan="2"><strong>C&A (CLIENTE)</strong></th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $items = [
                                    ['INSUMOS', 'insumos.png'],
                                    ['QUIMICOS', 'quimicos.png'],
                                    ['AGUA', 'agua.png'],
                                    ['Señaleticas', 'señalaticas.png'],
                                    ['Escoba', 'escoba.png'],
                                    ['Recogedor', 'recogedor.png'],
                                    ['Cubeta', 'cubeta.png'],
                                    ['Franela', 'franela.png'],
                                    ['Mopeador', 'mopeador.png'],
                                    ['Guantes Latex', 'guantes.png'],
                                ];
                            @endphp

                            @foreach ($items as $index => $item)
                                <tr>
                                    <td class="fw-semibold">{{ $index + 1 }}. {{ $item[0] }}</td>
                                    <td>
                                        <img src="{{ asset('img/anexos/' . $item[1]) }}" alt="{{ $item[0] }}"
                                            class="img-fluid" width="120">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>


            <div class="container my-5 p-4 border rounded shadow-sm bg-light">
                <h4 class="text-center mb-4">EL TRABAJADOR</h4>
                <p class="text-justify">
                    Todo <strong>“TRABAJADOR”</strong> deberá contar con <strong>EPP</strong> (Equipo de
                    Protección
                    Personal)
                    propio al <strong>“PERFIL DEL PUESTO”</strong>.
                </p>

                <ul class="list-unstyled mt-4">

                    <!-- Item 1 -->
                    <li class="mb-5">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <p class="mb-2">
                                    <strong>1. Zapatos con suela anti-derrapante</strong> en buen estado, para
                                    ingresar
                                    a <strong>CEDIS</strong>.
                                </p>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('img/anexos/zapatos.png') }}" alt="zapatos"
                                    class="img-fluid rounded" style="max-width: 180px;">
                            </div>
                        </div>
                    </li>

                    <!-- Item 2 -->
                    <li class="mb-5">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <p class="mb-2">
                                    <strong>2. Equipo móvil Android</strong> con WhatsApp y espacio suficiente
                                    para la
                                    descarga de aplicaciones,
                                    pase de lista digital y envío de reportes y evidencias.
                                </p>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('img/anexos/celular.png') }}" alt="celular"
                                    class="img-fluid rounded" style="max-width: 180px;">
                            </div>
                        </div>
                    </li>

                    <!-- Item 3 -->
                    <li class="mb-3">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <p class="mb-2">
                                    <strong>3. Correo electrónico</strong> para su alta en el puesto,
                                    notificaciones e
                                    informes de la empresa.
                                </p>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('img/anexos/correo.png') }}" alt="correo"
                                    class="img-fluid rounded" style="max-width: 180px;">
                            </div>
                        </div>
                    </li>

                </ul>
            </div>

            <div class="container m-4">
                <h2 class="text-primary">SALARIO DEVENGADO Y FORMAS DE PAGO </h2>
                <p>El salario será mínimo que percibirá <b>“EL TRABAJADOR”</b> por los servicios a que se
                    refiere este
                    contrato será
                    con base a los días laborados. El salario le será pagado conforme al <b>Anexo II Condiciones
                        Generales</b>,
                    mediante transferencia electrónica de fondos a una cuenta bancaria a nombre de <b>“EL
                        TRABAJADOR”</b>;
                    estando obligado <b>“EL TRABAJADOR”</b>, a firmar las constancias de pago correspondientes,
                    teniendo
                    en
                    cuenta lo dispuesto en los artículos 108 y 109 de la Ley Federal del trabajo.
                </p>
                <h2 class="text-primary">HORARIO DE TRABAJO</h2>
                <p>La jornada laboral es el tiempo durante el cual <b>“EL TRABAJADOR”</b> está a disposición de
                    <b>“LA
                        EMPRESA”</b>
                    para prestar su jornada laboral comprendiendo de un horario de <b>lunes a sábado</b> con una
                    <b>jornada laboral</b>
                    de <b>6 horas</b> con forme al artículo 61 de la Ley Federal de Trabajo, que deberá
                    desempeñar
                    <b>“EL AUXILIAR DE
                        LIMPIEZA”</b>, correspondiente a la zona de trabajo que le fue asignado por su jefe o
                    encargado
                    de tienda.
                </p>
                <div class="d-flex justify-content-center align-content-center my-4">
                    <table class="table table-bordered text-center shadow rounded" style="max-width: 300px;">
                        <thead class="bg-info text-white">
                            <tr>
                                <th>HORARIOS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="bg-primary text-white">7:00 - 13:30</td>
                            </tr>
                            <tr>
                                <td class="bg-primary text-white">8:00 - 14:00</td>
                            </tr>
                            <tr>
                                <td class="bg-primary text-white">9:00 - 15:00</td>
                            </tr>
                            <tr>
                                <td class="bg-primary text-white">10:00 - 16:00</td>
                            </tr>
                            <tr>
                                <td class="bg-primary text-white">12:00 - 18:00</td>
                            </tr>
                            <tr>
                                <td class="bg-primary text-white">3:00 - 21:00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="container m-4">
                    <h3 class="text-primary">a) JORNADA EXTRAORDINARIA</h3>
                    <p><b>Se considera extraordinaria y es aquella que excede de la jornada ordinaria máxima
                            legal (48
                            horas
                            semanales) o de la pactada si es menor.</b></p>

                    <p> <b>“LA EMPRESA”</b> determina con forme a su <b>Contrato Individual de trabajo</b>
                        cláusula
                        <b>DÉCIMA CUARTAque
                            EL TRABAJO EXTRAORDINARIO</b> se pagarán con un ciento por ciento más del salario
                        considerado
                        como
                        <b>“bono”</b> que <b>“EL TRABAJADOR”</b> será acreedor por el cumplimento de una
                        <b>JORNADA
                            EXTRAORDINARIA</b>.
                    </p>

                    <p class="mt-2">
                        La <b>JORNADA EXTRAORDINARIA</b> previamente deberá estar autorizada por el <b>JEFE
                            INMEDIATO</b>,
                        por lo
                        que deberá de informarle a <b>“EL TRABAJADOR”</b> si es su voluntad el aceptar una
                        <b>JORNADA
                            EXTRAORDINARIA</b> del cual deberá requisitar el formulario en el cual acepta <b>“EL
                            TRABAJADOR”</b>
                        someterse a una <b>JORNADA EXTRAORDINARIA</b> y del cual se determinara el costo del
                        “bono” por
                        el
                        cual
                        será retribuido en su salario y este será pagado como lo determine <b>“LA EMPRESA”</b>
                        conforme
                        a
                        los
                        tabuladores que se le entregará a <b>“EL TRABAJADOR”</b> para proceder con la <b>JORNADA
                            EXTRAORDINARIA</b>.
                    </p>
                </div>

                <div class="container m-4">
                    <h3 class="text-primary">b) INCUMPLIMIENTO A LA JORNADA LABORAL</h3>
                    <p class="mt-2">Es un hecho que puede producirse dentro del centro de trabajo derivando
                        al
                        incumplimiento de <b>“EL
                            TRABAJADOR”</b> en su horario de la jornada laboral a consecuencia de descenso de la
                        productividad y el
                        empeoramiento de la prestación de los servicios son dos de sus principales
                        consecuencias.
                    </p>
                    <h4 class="mt-4 text-primary">* JORNADA INCOMPLETA</h4>
                    <p class="mt-4">
                        <b>Será considerada jornada incompleta cuando “EL TRABAJADOR” incurra con los siguientes
                            supuestos: </b>
                    </p>
                    <div class="container m-4">
                        <h3 class="text-primary">DE LAS INCIDENCIAS EN JORNADA LABORAL</h3>
                        <table class="table table-bordered table-hover">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th style="width: 10%;">No.</th>
                                    <th>Disposición</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        Si <b>“EL TRABAJADOR”</b> ingresa al centro de trabajo posterior a su
                                        hora de
                                        entrada,
                                        será acreedor a un descuento equivalente a un día de su salario.
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        Si <b>“EL TRABAJADOR”</b> se retira del centro de trabajo durante su
                                        jornada
                                        laboral, sin
                                        cumplir sus 6 horas de trabajo, será acreedor a un descuento equivalente
                                        a un
                                        día de su
                                        salario.
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        En cualquiera de los supuestos anteriores dependiendo de la gravedad o
                                        número de
                                        incidencias de jornada laboral incompleta, será acreedor a los
                                        descuentos o
                                        sanciones o
                                        rescisión del contrato, afección para el cliente, sin responsabilidad
                                        para
                                        <b>“LA EMPRESA “o
                                            “CLIENTE”</b>.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <p class="mt-2">
                        <b>“EL TRABAJADOR”, en caso extraordinario o motivos por causa fortuita</b> que le
                        impidan
                        acudir a
                        su jornada laboral bajo protocolo oficial deberá de notificarle a su jefe inmediato o
                        encargado
                        de
                        tienda con un día previo como anticipado informándole que no podrá llegar a su hora de
                        entrada
                        correspondiente o en sudefecto con el mayor tiempo posible
                    </p>
                    <p class="mt-2">
                        En el supuesto de no concluir su jornada laboral, dicha acción <b>“EL TRABAJADOR”</b>
                        deberá de
                        acreditar las circunstancias que le impidan el no poder cumplir con el horario
                        correspondiente a
                        sus
                        actividades.
                    </p>
                    <p class="mt-2">
                        Queda prohibido que <b>“El TRABAJADOR”</b> abandone su centro de trabajo después de a
                        ver
                        ingresado
                        a él, derivado que <b>“EL TRABAJADOR”</b> no cuente con ningún permiso previo autorizado
                        por
                        parte
                        de su jefe inmediato y en caso de que <b>“EL TRABAJADOR”</b> omita lo antes mencionado
                        será
                        sancionado por parte de <b>“LA EMPRESA”</b> procediendo con el descuento de un día
                        laborado.
                    </p>
                    <p class="mt-2">
                        Sin embargo, todo aquel <b>“TRABAJADOR”</b> realice las siguientes indicaciones para que
                        se
                        autorice
                        su salida durante su jornada laboral:
                    </p>
                </div>

                <div class="container m-4">
                    <h3 class="text-primary">c) INDICACIONES PARA SOLICITAR EL PERMISO:</h3>
                    <p class="mt-2">
                        <b>“EL TABAJADOR”</b> deberá de enviar un correo electrónico a su jefe inmediato, un día
                        previo
                        o de
                        forma inmediata a su solicitud en el cual deberá de notificarle a su jefe inmediato el
                        motivo
                        por el
                        cual no podrá acudir a su jornada laboral, anexando evidencias que acrediten las
                        circunstancia
                        que
                        le impide a <b>“EL TRABAJADOR”</b> poder acudir a su jornada laboral y cumplir con su
                        horario,
                        así
                        mismo deberá de notificar
                        por medio de un mensaje de WhatsApp y por llamada telefónica que será previamente
                        gravada para
                        ser
                        agregada como archivo de evidencia imputable a <b>“EL TRABAJADOR”</b>, o en su defecto
                        avisar lo
                        antes
                        posible.
                    </p>
                    <p class="mt-2">
                        Posteriormente su jefe inmediato confirmará por medio de su correo que proporciono en su
                        Contrato
                        Individual de Trabajo, que ha sido autorizado o denegado tal permiso en caso de no
                        contar con
                        este
                        correo será acreedor a las sanciones correspondientes y anexado a su expediente.
                    </p>
                    <p class="mt-2">
                        En caso de que <b>“EL TRABAJADOR”</b> haga caso omiso a lo previamente señalado, será
                        acreedor a
                        un
                        descuento correspondiente a un día de su salario y conforme a los siguientes supuestos.
                    </p>
                </div>

                <div class="container m-4">
                    <h3 class="text-primary">RETARDOS</h3>
                    <table class="table table-bordered table-hover">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th style="width: 10%;">No.</th>
                                <th>Disposición</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    Los <b>RETARDOS</b> serán considerados cuando <b>“EL TRABAJADOR”</b> ingrese
                                    a las
                                    instalaciones del centro de trabajo <b>(TIENDA DEPARTAMENTAL)</b>. Se
                                    considerará
                                    retardo a partir del <b>minuto 7</b>, ya que la hora de tolerancia para
                                    <b>“EL
                                        TRABAJADOR”</b> es hasta
                                    el <b>minuto 6</b>. Al ser el minuto 7 se levanta un reporte por parte de su
                                    jefe
                                    inmediato que deberá
                                    firmar <b>“EL TRABAJADOR”</b>, y se procede a realizar un Acta
                                    Administrativa para
                                    anexar en su
                                    expediente laboral, todo en base al soporte digital, aplicación y reportes
                                    digitales
                                    proporcionados
                                    de su equipo móvil así como los tickets o folios que son emitidos por parte
                                    del
                                    <b>“CLIENTE”</b>.
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    En el supuesto de que <b>“EL TRABAJADOR”</b> reincida con <b>TRES
                                        RETARDOS</b> en un
                                    mismo
                                    mes en su hora de entrada, se procederá a levantar un reporte por su jefe
                                    inmediato,
                                    constatando
                                    una Acta Administrativa. Será acreedor a una falta no justificada,
                                    descontándosele a
                                    <b>“EL TRABAJADOR”</b> como un día no laborado y el pago del día descuento
                                    correspondiente a su
                                    nómina. Esto podrá ser motivo a un aviso de rescisión laboral sin
                                    responsabilidad
                                    para <b>“LA EMPRESA”</b>,
                                    independientemente de las sanciones y calificaciones obtenidas de acuerdo a
                                    los
                                    parámetros de la calidad del servicio.
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    Si <b>“EL TRABAJADOR”</b> tiene más de <b>TRES RETARDOS</b> injustificados
                                    podrá ser
                                    motivo de
                                    rescisión laboral independientemente de las evaluaciones que acrediten un
                                    bajo
                                    desempeño
                                    durante su jornada laboral, siendo acreedor al correspondiente aviso de
                                    rescisión
                                    laboral.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="container m-4">
                    <h3 class="text-primary">* FALTAS</h3>
                    <p class="mt-2">
                        Si <b>“EL TRABAJADOR”</b> incurre con una falta deberá de justificarla proporcionando la
                        documentación correspondiente con la cual demuestre el impedimento que tuvo para acudir
                        a su
                        centro
                        de trabajo.
                    </p>
                    <p class="mt-2">
                        Documentos con los cuales <b>“EL TRABAJADOR”</b> puede justificar sus inasistencias:
                    </p>
                    <div class="container m-4">
                        <h3 class="text-primary">DOCUMENTACIÓN VÁLIDA PARA JUSTIFICAR FALTAS</h3>
                        <table class="table table-bordered table-hover">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th style="width: 10%;">No.</th>
                                    <th>Tipo de Documento</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Recetas con Centros de Salud Privados o Públicos.</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Incapacidades correspondientes al IMSS o en su caso Centros de Salud
                                        Privados.
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Documentos oficiales emitidos por Instituciones Gubernamentales.</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Documentos oficiales emitidos por Autoridades Judiciales.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <p class="mt-2">Aquel documento que no se encuentre contenido en el párrafo anterior no
                        será
                        aceptado
                        para justificar falta alguna por parte de <b>“LA EMPRESA”</b>.</p>
                    <p class="mt-2">
                        Una falta no justificada conforme a lo anterior se procederá en generar un reporte por
                        su jefe
                        inmediato constando de una Acta Administrativa y será acreedor <b>“EL TRABAJADOR”</b> a
                        un
                        descuento
                        del día no laborado más su día descanso correspondiente a su nómina.
                    </p>
                </div>

                <div class="container m-4">
                    <h3 class="text-primary">RIESGO Y ACCIDENTE EN EL CENTRO DE TRABAJO</h3>
                    <h4>° RIESGOS DE TRABAJO</h4>
                    <p class="mt-2">Un riesgo de trabajo son aquellos accidentes y enfermedades a que están
                        expuestos
                        los
                        <b>“TRABAJDORES”</b>
                        en ejercicio o con motivo del trabajo conforme al artículo 473 de la Ley Federal del
                        Trabajo.
                    </p>
                    <h4 class="text-primary">° ACCIDENTE DE TRABAJO </h4>
                    <p class="mt-4">
                        Accidente de trabajo es toda lesión orgánica o perturbación funcional, inmediata o
                        posterior, la
                        muerte o la desaparición derivada de un acto delincuencial, producida repentinamente en
                        ejercicio o
                        con motivo del trabajo, cualesquiera que sean el lugar y el tiempo en que se preste
                        conforme al
                        artículo 474 de la Ley Federal del Trabajo.
                    </p>
                    <p class="mt-2">
                        Por todo lo anteriormente expuesto <b>“LA EMPRESA”</b> deberá de realizar una previa
                        investigación
                        que será proporcionada por <b>“EL TRABAJADOR”</b> y con las aportaciones que designe
                        <b>“EL JEFE
                            INMEDIATO”</b> se determinaran las causales de un riesgo de trabajo o en su caso un
                        accidente de
                        trabajado, las cuales <b>“LA EMPRESA”</b> le notificara a <b>“EL TRABAJADOR”</b> por
                        medio de su
                        correo electrónico y respaldado por un mensaje de WhatsApp y llamada telefónica que
                        serán
                        monitoreadas por parte del <b>“DEPARTAMENTO DE INCIDENCIAS”</b> y previamente grabadas
                        mismas
                        que
                        serán anexas a su expediente de <b>“INCIDENCIA DEL TRABAJADOR”</b>.
                    </p>

                    <p class="mt-2">
                        En el supuesto de la inexistencia de riesgo o accidente laboral, no se procederá a
                        erogar las
                        incidencias correspondientes y en caso de que <b>“EL TRABAJADOR”</b> haya falseado dicha
                        información
                        será acreedor a la sanción penal correspondiente.
                    </p>
                </div>

                <div class="container m-4">
                    <h2 class="text-primary">SUSPENSIÓN DE LOS EFECTOS DE LAS RELACIONES DE TRABAJO</h2>
                    <p class="mt-2">
                        La suspensión de la relación laboral consiste en una interrupción temporal de la
                        relación de
                        trabajo, durante la cual <b>“EL TRABAJADOR”</b> no tiene la obligación de prestar sus
                        servicios
                        subordinados, mientras que <b>“LA EMPRESA”</b> no tiene la obligación de pagar el
                        salario
                        correspondiente, conforme al artículo 42 de La Ley Federal de Trabajo mencionando lo
                        siguiente:
                        son causas de suspensión temporal de las obligaciones de prestar el servicio y pagar el
                        salario,
                        sin
                        responsabilidad para <b>“EL TRABAJADOR” y “LA EMPRESA”.</b>
                    </p>

                    <h4 class="text-primary">CAUSAS DE SUSPENSIÓN (ARTÍCULO 42 LFT)</h4>
                    <table class="table table-bordered table-hover">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th style="width: 10%;">Fracción</th>
                                <th>Disposición</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>I</td>
                                <td>
                                    En los casos de las fracciones I y II del artículo anterior, desde la fecha
                                    en que
                                    el patrón tenga conocimiento de la enfermedad contagiosa o de la en que se
                                    produzca
                                    la
                                    incapacidad para el trabajo, hasta que termine el período fijado por el
                                    Instituto
                                    Mexicano del Seguro
                                    Social o antes si desaparece la incapacidad para el trabajo, sin que la
                                    suspensión
                                    pueda exceder del
                                    término fijado en la Ley del Seguro Social para el tratamiento de las
                                    enfermedades
                                    que no
                                    sean consecuencia de un riesgo de trabajo;
                                </td>
                            </tr>
                            <tr>
                                <td>II</td>
                                <td>
                                    Tratándose de las fracciones III y IV, desde el momento en que el trabajador
                                    acredite
                                    estar detenido a disposición de la autoridad judicial o administrativa,
                                    hasta la
                                    fecha en
                                    que cause ejecutoria la sentencia que lo absuelva o termine el arresto. Si
                                    obtiene
                                    su libertad
                                    provisional, deberá presentarse a trabajar en un plazo de quince días
                                    siguientes a
                                    su
                                    liberación, salvo que se le siga proceso por delitos intencionales en contra
                                    del
                                    patrón o sus
                                    compañeros de trabajo; Fracción reformada DOF 30-11-2012.
                                </td>
                            </tr>
                            <tr>
                                <td>III</td>
                                <td>
                                    En los casos de las fracciones V y VI, desde la fecha en que deban prestarse
                                    los
                                    servicios o desempeñarse los cargos, hasta por un periodo de seis
                                    años;Fracción
                                    reformada DOF 30-11-2012.
                                </td>
                            </tr>
                            <tr>
                                <td>IV</td>
                                <td>
                                    En el caso de la fracción VII, desde la fecha en que el patrón tenga
                                    conocimiento
                                    del hecho, hasta por un periodo de dos meses; y ; Fracción reformada DOF
                                    30-11-2012.
                                </td>
                            </tr>
                            <tr>
                                <td>V</td>
                                <td>
                                    En el caso de la fracción VIII, desde la fecha de conclusión de la
                                    temporada, hasta
                                    el
                                    inicio de la siguiente.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="container m-4">
                    <h4 class="text-primary"> ALIMENTOS</h4>
                    <p>
                        <b>“LA EMPRESA”</b> le otorga a <b>“EL TRABAJADOR”</b> un horario para ingerir alimentos
                        del
                        cual
                        será conforme al horario del rol de limpieza, por lo que <b>“EL TRABAJADOR”</b> deberá
                        determinar su
                        hora para ingerir alimento del cual deberá de considerar a ver cubierto la mayor parte
                        del aseo
                        de
                        la <b>TIENDA DEPARTAMENTAL</b> que están sujetas a su jornada laboral.
                    </p>
                    <div class="mt-3 d-flex justify-content-center">
                        <table class="table text-center shadow-sm rounded" style="max-width: 400px;">
                            <tbody>
                                <tr>
                                    <td class="bg-info text-white fw-bold" style="width: 60%;">HORARIO DE
                                        ALIMENTOS
                                    </td>
                                    <td class="bg-primary text-white fw-bold" style="width: 40%;">30 MINUTOS
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <p class="mt-2">Para que <b>“EL TRABAJADOR“</b> pueda hacer valido su hora de comida
                        deberá de a
                        ver
                        cubierto la cuarta parte
                        de las unidades de lavado y del cual deberá ser con autorización del <b>ENCARGADO DE
                            TIENDA</b>
                        quien
                        asignara el horario y la zona para ingerir alimentos</p>
                    <p>
                        <b>“EL TRABAJADOR”</b> deberá de notificarle a su <b>ENCARGADO DE TIENDA</b> la hora en
                        la que
                        se
                        encontrará ingiriendo alimentos y posteriormente notificará su regreso a sus actividades
                        laborales.
                    </p>
                    <p>
                        <b>
                            En caso de que “EL TRABAJADOR” no realice la anterior instrucción o exceda el tiempo
                            establecido
                            para ingerir alimentos y no notifique a su JEFE INMEDIATO será causal a un Acta
                            Administrativa
                            de manera preventiva y en el caso de contener más de tres Actas Administrativas será
                            causal
                            a
                            una sanción correspondiente para proceder con la baja correspondiente.
                        </b>
                    </p>
                </div>

                <div class="container m-4">
                    <h3 class="text-primary">ÚNIFORME </h3>
                    <p>Al inicio de la contratación <b>“EL TRABAJADOR”</b> deberá de firmar un documento
                        identificado
                        como
                        <b>ANEXO
                            VI ACTA DE ENTREGA, RECEPCIÓN Y RESPONSIVA DE UNIFORME PROSMAN.</b>
                    </p>
                    <p class="mt-2">
                        De lo anterior todo <b>“TRABAJADOR”</b> está obligado que durante su jornada laboral
                        deberá de
                        presentarse con el <b>ÚNIFORME</b> determinado por <b>“LA EMPRESA”</b> que será como lo
                        dispone
                        la
                        siguiente tabla:
                    </p>

                    <p>
                        <b>“LA EMPRESA”</b> entregará el siguiente <b>ÚNIFORME</b> a efecto de que <span
                            class="puesto bg-info">“EL AUXILIAR DE LIMPIEZA”</span> pueda cumplir con sus
                        actividades
                        designadas conforme a su perfil de puesto:
                    </p>
                    <div class="mt-3 d-flex justify-content-center">
                        <table class="table table-bordered text-center shadow rounded" style="max-width: 450px;">
                            <thead>
                                <tr>
                                    <th colspan="2" class="bg-primary text-white fs-5">UNIFORME</th>
                                </tr>
                                <tr class="bg-light fw-bold">
                                    <th>ELEMENTOS DEL UNIFORME</th>
                                    <th>COSTOS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PANTALÓN</td>
                                    <td>$350.00</td>
                                </tr>
                                <tr>
                                    <td>CASACA</td>
                                    <td>$350.00</td>
                                </tr>
                                <tr class="table-info fw-bold">
                                    <td>TOTAL</td>
                                    <td>$700.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <p><b>“El TRABAJADOR”</b> deberá de presentar lo siguiente: </p>

                    <div class="mt-3 d-flex justify-content-center">
                        <table class="table table-bordered text-center shadow rounded" style="max-width: 650px;">
                            <thead>
                                <tr>
                                    <th colspan="3" class="bg-primary text-white fs-5">UNIFORME</th>
                                </tr>
                                <tr class="bg-light fw-bold">
                                    <th colspan="2">ELEMENTOS DEL UNIFORME</th>
                                    <th>EQUIPO PROPIO</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td colspan="2">CALZADO ANTIDERRAPANTE</td>
                                    <td>BUENAS CONDICIONES</td>
                                </tr>
                                <tr>
                                    <td colspan="2">EQUIPO CELULAR ANDROID/IOS</td>
                                    <td>FUNCIONAL Y EN BUEN ESTADO<br>CON SISTEMA OPERATIVO ANDROID/IOS</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <p class="mt-4">
                        De lo anterior <b>“EL TRABAJADOR”</b> tendrá la obligación de portar el ÚNIFORME de la
                        siguiente
                        manera:
                    </p>
                    <p class="mt-2">
                        Lo siguiente es determinado por <b>“LA EMPRESA”</b> y el área competente corresponde a
                        <b>RECURSOS
                            HUMANOS DE PROSMAN</b> quien se encargará de verificar que <b>“EL TRABAJADOR”</b>
                        porte el
                        <b>ÚNIFORME</b> correcto para desempeñar el puesto de <span class="puesto">AUXILIAR DE
                            LIMPIEZA</span> y del cual “EL TRABAJADOR” está obligado a portar el <b>ÚNIFORME</b>
                        en las
                        mejores condiciones, todo esto validado de manera digital en la aplicación y en los
                        reportes de
                        manera diaria de acuerdo con el manual operativo.
                    </p>
                    <p class="mt-2">
                        Se le hace del conocimiento a <b>“EL TRABAJADOR”</b> que conforme al <b>ÚNIFORME</b> que
                        proporciona
                        <b>“LA EMPRESA”</b> tendrá costos en caso de que <b>“EL TRABAJADOR”</b> realice las
                        siguientes
                        causales:
                    </p>

                    <ul>
                        <li>
                            <b>a)</b> Si <b>“EL TRABAJADOR”</b> extravía algún elemento del <b>ÚNIFORME</b>
                            deberá de
                            pagar
                            el costo total del uniforme (pantalón y casaca) el cual autoriza expresamente a la
                            firma de
                            las
                            Disposiciones Generales del Contrato el descuento total en la nómina siguiente
                            inmediata sin
                            previa notificación.
                        </li>
                        <li>
                            <b>b)</b> En caso de que el <b>ÚNIFORME “NO SE PORTE”</b> de manera correcta y
                            completa es
                            decir
                            si existen reportes por parte del <b>JEFE DE TALLER</b> a su <b>JEFE INMEDIATO</b>
                            que
                            <b>“EL
                                TRABAJADOR“</b>no se encuentra portando el <b>ÚNIFORME</b> dentro de las
                            instalaciones y
                            horario laboral, será causal a una <b>Acta Administrativa</b>.
                        </li>
                        <li>
                            <b>c)</b> En caso de que <b>“EL TRABAJADOR”</b> reitere tres o más <b>Acta
                                Administrativa</b>
                            por consecuencia de lo anterior será acreedor a la baja correspondiente sin
                            responsabilidad
                            para
                            <b>LA EMPRESA”</b>.
                        </li>
                    </ul>
                </div>

                <div class="container m-4">
                    <h3 class="text-primary">GESTIÓN Y DEVOLUCIÓN DE UNIFORMES</h3>
                    <hr class="w-25 ms-0 border-primary">

                    <h4 class="text-primary">° NOTIFICACIÓN A "LA EMPRESA" POR UNIFORME DAÑADO</h4>
                    <table class="table table-bordered table-hover">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th style="width: 10%;">No.</th>
                                <th>Disposición</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    En el supuesto de que <b>“EL TRABAJADOR”</b> reciba el <b>UNIFORME</b> en
                                    malas
                                    condiciones,
                                    deberá notificarlo a su <b>JEFE INMEDIATO</b> de dicha causal. <b>“EL
                                        TRABAJADOR”</b> deberá
                                    mandar un correo electrónico a su jefe inmediato, mencionando que recibió el
                                    <b>UNIFORME</b>
                                    con condiciones inadecuadas. Deberá describir cómo se encuentra el
                                    <b>UNIFORME</b> y
                                    adjuntar fotos claras para que <b>“LA EMPRESA”</b> determine el daño,
                                    evitando que
                                    <b>“EL TRABAJADOR”</b> pague los daños y así mismo <b>“LA EMPRESA”</b> envíe
                                    el
                                    <b>UNIFORME</b>
                                    de forma inmediata.
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <h4 class="text-primary mt-4">ENTREGA DE UNIFORME A “LA EMPRESA” POR TERMINACIÓN A LA
                        RELACIÓN
                        LABORAL</h4>
                    <p>
                        La obligación de devolver el uniforme a <b>“LA EMPRESA”</b> se genera cuando <b>“EL
                            TRABAJADOR”</b>
                        recae en la terminación de la relación laboral por las siguientes causales:
                    </p>
                    <table class="table table-bordered table-hover">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th style="width: 10%;">No.</th>
                                <th>Causal de Terminación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>RENUNCIA VOLUNTARIA</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>FALTAS INJUSTIFICADAS</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>CAUSALES DEL ARTÍCULO 47 DE LA LFT</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>EVALUACIÓN SEMANAL</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>PERIODO DE PRUEBA</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>ABANDONO LABORAL</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="container m-4">
                    <p>
                        Derivado de las anteriores causales para concluir con la terminación laboral <b>“EL
                            TRABAJADOR”</b>
                        se encuentra obligado a entregar el <b>UNIFORME</b> completo y con óptimas condiciones
                        del cual,
                        deberá de realizar un llenado conforme al documento identificado como <b>ACTA ENTREGA
                            DEL
                            UNIFORME
                            POR TERMINACIÓN</b> y previamente <b>“EL TRABAJADOR”</b> debe de lavar y desinfectar
                        el
                        <b>UNIFORME</b> a efecto de que sea almacenado dentro de una bolsa transparente y
                        totalmente
                        sellada
                        para que el <b>ENCARGADO DE TIENDA</b> reciba el <b>UNIFORME</b> o en su caso el <b>JEFE
                            INMEDIATO</b> le indique a <b>“EL TRABAJADOR”</b> que deberá de enviar el
                        <b>UNIFORME</b> al
                        domicilio fiscal de la <b>“EMPRESA”</b>, por lo que el costo del envió será a cargo del
                        <b>“TRABAJADOR”</b>; toda vez ya realizado lo anterior el <b>ENCARGADO DE TIENDA Y/O
                            JEFE
                            INMEDIATO</b> firmara el documento y en caso de no seguir las anteriores
                        indicaciones se le
                        descontara el <b>UNIFORME</b> a <b>“EL TRABAJADOR”</b>.
                    </p>
                    <p class="mt-4">
                        <b>NOTA: En caso de que “EL TRABAJADOR” no cumpla con las anteriores disposiciones se
                            procederá
                            en
                            descontarle la totalidad del uniforme por la cantidad de $700.00 (SETECIENTOS PESOS
                            CERO
                            CENTAVOS M/N), conforme a su nómina o pago de prestaciones (finiquito).
                        </b>
                    </p>
                </div>

                <div class="container m-4">
                    <h3 class="text-primary">MEDIOS DE COMUNICACIÓN</h3>

                    <p class="mt-3">
                        Los medios de comunicación son herramientas y recursos en los que se establece el
                        intercambio de
                        mensajes entre un emisor y un receptor. Estos serán los medios que la <b>EMPRESA</b>
                        utilizará
                        con
                        <b>“EL TRABAJADOR”</b> durante su relación laboral.
                    </p>



                    <p class="mt-3">
                        Toda comunicación que tendrá <b>“LA EMPRESA”</b> con <b>“EL TRABAJADOR”</b> serán por
                        los medios
                        digitales que incluyen las páginas web, las redes sociales, los audios digitales,
                        correos
                        electrónicos y dispositivos móviles que se consideran como los medios de comunicación
                        social;
                        por el
                        cual <b>“EL TRABAJADOR”</b> podrá ser notificado de lo siguiente:
                    </p>

                    <h4 class="text-primary mt-4">TEMAS DE COMUNICACIÓN</h4>
                    <table class="table table-bordered table-hover">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th style="width: 10%;">No.</th>
                                <th>Tipo de Comunicado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Comunicados de actividades laborales.</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Comunicados sobre temas administrativos.</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Comunicados de bienestar y salud digna.</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Comunicados Legales.</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Otros comunicados que contengan contenidos relevantes.</td>
                            </tr>
                        </tbody>
                    </table>

                    <p class="mt-4">
                        De lo anterior y conforme a su Contrato Individual de Trabajo en su cláusula décima
                        tercera,
                        <b>“EL TRABAJADOR”</b> está obligado a contener y proporcionar su **correo
                        electrónico**, el
                        cual se
                        considera el medio de comunicación principal entre <b>“EL TRABAJADOR” y “LA
                            EMPRESA”</b>.
                    </p>
                </div>

                <div class="container m-4">
                    <h3 class="text-primary">OBLIGACIONES Y PROHIBICIONES DEL TRABAJADOR</h3>
                    <p class="mt-4">
                        Conforme a lo dispuesto en los artículos 134 y 135 de la Ley Federal del Trabajo:
                    </p>

                    <h4 class="mt-4 text-primary">A) OBLIGACIONES DE LOS TRABAJADORES (ART. 134 LFT):</h4>
                    <table class="table table-bordered table-hover">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th style="width: 10%;">Fracción</th>
                                <th>Obligación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>I</td>
                                <td>Cumplir las disposiciones de las normas de trabajo que les sean aplicables.
                                </td>
                            </tr>
                            <tr>
                                <td>II</td>
                                <td>Observar las disposiciones contenidas en el reglamento y las normas
                                    oficiales
                                    mexicanas en materia de seguridad, salud y medio ambiente de trabajo, así
                                    como las
                                    que indiquen los patrones para su seguridad y protección personal.</td>
                            </tr>
                            <tr>
                                <td>III</td>
                                <td>Desempeñar el servicio bajo la dirección del patrón o de su representante, a
                                    cuya
                                    autoridad estarán subordinados en todo lo concerniente al trabajo.</td>
                            </tr>
                            <tr>
                                <td>IV</td>
                                <td>Ejecutar el trabajo con la intensidad, cuidado y esmeros apropiados y en la
                                    forma,
                                    tiempo y lugar convenidos.</td>
                            </tr>
                            <tr>
                                <td>V</td>
                                <td>Dar aviso inmediato al patrón, salvo caso fortuito o de fuerza mayor, de las
                                    causas
                                    justificadas que le impidan concurrir a su trabajo.</td>
                            </tr>
                            <tr>
                                <td>VI</td>
                                <td>Restituir al patrón los materiales no usados y conservar en buen estado los
                                    instrumentos y útiles que les haya dado para el trabajo, no siendo
                                    responsables por
                                    el deterioro que origine el uso de estos objetos, ni del ocasionado por caso
                                    fortuito, fuerza mayor, o por mala calidad o defectuosa construcción.</td>
                            </tr>
                            <tr>
                                <td>VII</td>
                                <td>Observar buenas costumbres durante el servicio.</td>
                            </tr>
                            <tr>
                                <td>VIII</td>
                                <td>Prestar auxilios en cualquier tiempo que se necesiten, cuando por siniestro
                                    o riesgo
                                    inminente peligren las personas o los intereses del patrón o de sus
                                    compañeros de
                                    trabajo.</td>
                            </tr>
                            <tr>
                                <td>IX</td>
                                <td>Integrar los organismos que establece esta Ley.</td>
                            </tr>
                            <tr>
                                <td>X</td>
                                <td>Someterse a los reconocimientos médicos previstos en el reglamento interior
                                    y demás
                                    normas vigentes en la empresa o establecimiento, para comprobar que no
                                    padecen
                                    alguna incapacidad o enfermedad de trabajo, contagiosa o incurable.</td>
                            </tr>
                            <tr>
                                <td>XI</td>
                                <td>Poner en conocimiento del patrón las enfermedades contagiosas que padezcan,
                                    tan
                                    pronto como tengan conocimiento de las mismas.</td>
                            </tr>
                            <tr>
                                <td>XII</td>
                                <td>Comunicar al patrón o a su representante las deficiencias que adviertan, a
                                    fin de
                                    evitar daños o perjuicios a los intereses y vidas de sus compañeros de
                                    trabajo o de
                                    los patrones.</td>
                            </tr>
                            <tr>
                                <td>XIII</td>
                                <td>Guardar escrupulosamente los secretos técnicos, comerciales y de fabricación
                                    de los
                                    productos a cuya elaboración concurran directa o indirectamente, o de los
                                    cuales
                                    tengan conocimiento por razón del trabajo que desempeñen, así como de los
                                    asuntos
                                    administrativos reservados, cuya divulgación pueda causar perjuicios a la
                                    empresa.
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <hr>

                    <h4 class="mt-4 text-primary">B) PROHIBICIONES A LOS TRABAJADORES (ART. 135 LFT) Y REGLAS
                        INTERNAS:
                    </h4>
                    <table class="table table-bordered table-hover">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th style="width: 10%;">Fracción</th>
                                <th>Prohibición</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>I</td>
                                <td>Ejecutar cualquier acto que pueda poner en peligro su propia seguridad, la
                                    de sus
                                    compañeros de trabajo o la de terceras personas, así como la de los
                                    establecimientos
                                    o lugares en que el trabajo se desempeñe.</td>
                            </tr>
                            <tr>
                                <td>II</td>
                                <td>Faltar al trabajo sin causa justificada o sin permiso del patrón.</td>
                            </tr>
                            <tr>
                                <td>III</td>
                                <td>Substraer de la empresa o establecimiento útiles de trabajo o materia prima
                                    o
                                    elaborada.</td>
                            </tr>
                            <tr>
                                <td>IV</td>
                                <td>Presentarse al trabajo en estado de embriaguez.</td>
                            </tr>
                            <tr>
                                <td>V</td>
                                <td>Presentarse al trabajo bajo la influencia de algún narcótico o droga
                                    enervante,
                                    salvo que exista prescripción médica. Antes de iniciar su servicio, el
                                    trabajador
                                    deberá poner el hecho en conocimiento del patrón y presentarle la
                                    prescripción
                                    suscrita por el médico.</td>
                            </tr>
                            <tr>
                                <td>VI</td>
                                <td>Portar armas de cualquier clase durante las horas de trabajo, salvo que la
                                    naturaleza de éste lo exija. Se exceptúan de esta disposición las punzantes
                                    y
                                    punzo-cortantes que formen parte de las herramientas o útiles propios del
                                    trabajo.
                                </td>
                            </tr>
                            <tr>
                                <td>VII</td>
                                <td>Suspender las labores sin autorización del patrón.</td>
                            </tr>
                            <tr>
                                <td>VIII</td>
                                <td>Hacer colectas en el establecimiento o lugar de trabajo.</td>
                            </tr>
                            <tr>
                                <td>IX</td>
                                <td>Usar los útiles y herramientas suministrados por el patrón, para objeto
                                    distinto de
                                    aquél a que están destinados.</td>
                            </tr>
                            <tr>
                                <td>X</td>
                                <td>Hacer cualquier clase de propaganda en las horas de trabajo, dentro del
                                    establecimiento.</td>
                            </tr>
                            <tr>
                                <td>XI</td>
                                <td>Acosar sexualmente a cualquier persona o realizar actos inmorales en los
                                    lugares de
                                    trabajo.</td>
                            </tr>
                            <tr>
                                <td>XII</td>
                                <td>El trabajador **no podrá tener ningún tipo de relación amistosa con el JEFE
                                    DE
                                    TALLER**, toda vez que la relación será estrictamente laboral, quien le
                                    indicará las
                                    unidades que estarán a su cargo para el lavado, así como las indicaciones
                                    necesarias
                                    que deberá de ejecutar en el centro de trabajo (CEDIS C&A).</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="container m-4">
                    <h3 class="text-primary mt-5">ACTIVIDADES LABORALES Y TAREAS DE PUESTO</h3>
                    <hr class="w-25 ms-0 border-primary">

                    <h4 class="text-primary">ACTIVIDADES DIARIAS</h4>
                    <table class="table table-bordered table-hover">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th style="width: 10%;">No.</th>
                                <th>Tarea</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Realizar checklist en la plataforma digital, a efecto de registrar la hora
                                    de
                                    ingreso al centro de trabajo.</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Asegurarse de contar con todos sus instrumentos de trabajo: escobas,
                                    cepillos,
                                    mangueras, cubetas, insumos (jabón, cloro, limpiavidrios, detergente en
                                    polvo),
                                    trapeador, escoba, recogedor, fibras, franela o microfibra, guantes, cepillo
                                    de baño
                                    y mopeador.</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ejecutar la limpieza correspondiente al piso de ventas de la Tienda de C&A.
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Realizar limpieza de vestidores y probadores.</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Realizar limpieza de área de cajas.</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Realizar limpieza de áreas internas.</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Realizar limpieza de las repisas y mobiliario (piso de ventas).</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Realizar limpieza de oficinas.</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Realizar limpieza de baños.</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Realizar limpieza de comedor y lockers.</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Realizar retiro de basura y cartón.</td>
                            </tr>
                        </tbody>
                    </table>

                    <h4 class="text-primary mt-5">ACTIVIDADES ESPORÁDICAS</h4>
                    <p class="mt-2">
                        Son todas aquellas actividades que deberá de ejecutar <b>“EL TRABAJADOR”</b> cada cierto
                        periodo
                        que
                        le determine su **JEFE INMEDIATO** o cuando lo solicite **“EL CLIENTE”**.
                    </p>
                    <table class="table table-bordered table-hover">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th style="width: 10%;">No.</th>
                                <th>Tarea</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Realizar limpieza de escaparates y exteriores.</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Realizar recolección de cartón.</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Realizar limpieza de Almacenes.</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Realizar limpieza de Muros y Mobiliarios (1.80 mts máximo).</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Realizar limpieza de Maniquís (libre de ropa).</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Realizar limpieza de Zoclos en piso de ventas.</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Realizar limpieza de Zoclos internos.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="container m-4">
                    <h3 class="text-primary">PERIODO DE PRUEBA:</h3>
                    <p class="mt-4">
                        El periodo de prueba se define como el tiempo que se le da a un <b>“TRABAJADOR”</b>
                        nuevo para
                        evaluar su desempeño y relación laboral que tendrá con la <b>“EMPRESA”</b>, por lo que
                        todo
                        periodo
                        que se someta a cada <b>“TRABAJADOR”</b> y quien acepto de forma voluntaria en su
                        Contrato
                        Individual de Trabajo conforme a la cláusula <b>QUINTA</b>, del que deriva que <b>“LA
                            EMPRESA”</b>
                        durante al periodo de prueba podrá corroborar toda aquella información que proporcionar
                        a su
                        <b>RECLUTADOR</b> respecto al <b>“PERFIL DEL PUESTO”</b> del cual hace constar que
                        cuenta con
                        los
                        conocimientos suficientes para la aplicación del lavado de unidades de carga a favor del
                        <b>“CLIENTE”</b>.
                    </p>
                    <p class="mt-4">
                        La duración del <b>PERIODO DE PRUEBA</b> consta de <b>30 días (treinta días hábiles)</b>
                        de los
                        cuales mensualmente se realizarán evaluaciones hasta llegar al plazo de los <b>90 días
                            (noventa
                            días
                            hábiles)</b> cumplidos, de lo cual termina su etapa de <b>“PERIODO DE PRUEBA”</b> y
                        comenzará
                        formalmente su Contrato Individual de Trabajo por tiempo <b>DETERMINADO de (tres
                            meses),</b>
                        derivado de la naturaleza de la fuente de trabajo como lo estipula en los artículos
                        <b>35 y 37
                            fracción I</b> y de la Ley federal de Trabajo.
                    </p>
                    <p class="mt-4">
                        El objetivo del periodo de prueba es que <b>“LA EMPRESA”</b> pueda romper analizar
                        detalladamente
                        cada actividad que se le determine durante su jornada laboral y así mismo verificar los
                        siguientes
                        puntos esenciales al puesto de <span class="puesto bg-info">AUXILIAR DE
                            LIMPIEZA</span>:
                    </p>
                    <div class="container m-4">
                        <h3 class="text-primary mt-5">DISPOSICIONES DEL PERÍODO DE PRUEBA</h3>
                        <p class="mt-2">
                            Durante el período de prueba, se aplicarán las siguientes condiciones y objetivos:
                        </p>
                        <table class="table table-bordered table-hover">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th style="width: 10%;">No.</th>
                                    <th>Disposición</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <b>“LA EMPRESA”</b> podrá analizar e identificar la **destreza y
                                        estrategias**
                                        que genere <b>“EL TRABAJADOR”</b>
                                        en su centro de trabajo.
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        **Determinar y verificar** que <b>“EL TRABAJADOR”</b> realice el proceso
                                        adecuado conforme a la
                                        limpieza de la Tienda Departamental que le corresponde.
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        El objetivo principal del servicio laboral en esta etapa es que <b>“EL
                                            TRABAJADOR”</b> preste sus servicios
                                        para **adquirir conocimientos y habilidades** en vez de demostrar que ya
                                        los
                                        tiene.
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <b>“LA EMPRESA”</b> puede **terminar la relación laboral sin
                                        responsabilidad**
                                        (rescisión sin responsabilidad para la empresa) al finalizar
                                        este periodo de prueba, si <b>“EL TRABAJADOR”</b> no cumple con las
                                        expectativas
                                        de acuerdo a la evaluación realizada.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <p class="mt-4">
                        Todo lo anterior le compete a <b>“LA EMPRESA”</b> corrobore que <b>“EL TRABAJADOR”</b>
                        tiene la
                        capacidad, conocimientos y aptitud suficiente para desempeñar las funciones del puesto
                        durante
                        el
                        periodo de prueba del cual se le informara a <b>“EL TRABAJADOR”</b> si a crédito el
                        periodo de
                        prueba o en su caso se procede con el Aviso de Rescisión Laboral del cual se determinara
                        el
                        periodo
                        de prueba con los <b>PARÁMETROS DE EVALUACIÓN Y MEDICIÓN SEMANAL PROSMAN</b>.
                    </p>
                </div>
                <div class="container m-4">
                    <h3 class="text-primary">PARÁMETROS DE EVALUACIÓN Y MEDICIÓN SEMANAL PROSMAN</h3>
                    <p class="mt-4">
                        La evaluación es un proceso para medir el rendimiento laboral de manera semanal a <b>“EL
                            TRABAJADOR”</b>, con el objeto de llegar a la toma de decisiones objetivas sobre las
                        disposiciones generales de su Contrato Individual de Trabajo, en razón a la organización
                        de la
                        operatividad de <b>PROSMAN “EL TRABAJADOR”</b> se obliga a utilizar la evaluación con
                        forme a la
                        plataforma <b>TrackPoint</b>, del cual mide estándares de calidad como son los siguieres
                        puntos
                        para
                        determinar sus aptitudes y desempeño en sus actividades de las cuales consisten:
                    </p>
                    <div class="container m-4">
                        <h3 class="text-primary mt-5">PERFIL, HABILIDADES Y ACTITUDES LABORALES</h3>
                        <p class="mt-2">
                            <b>“EL TRABAJADOR”</b> deberá mantener y aplicar las siguientes aptitudes,
                            habilidades y
                            conductas durante su jornada laboral:
                        </p>
                        <table class="table table-bordered table-hover">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th style="width: 10%;">No.</th>
                                    <th>Aptitud/Habilidad Requerida</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tener **Adaptabilidad y Habilidad** en sus actividades laborales.</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>**Destreza y Capacidad** para realizar actividades de limpieza.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Aplicar **actitudes armoniosas** en su centro de trabajo, enfocándose en
                                        la
                                        relación laboral.</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>**Dedicación y persuasión** en el método que deberá aplicar al utilizar
                                        las
                                        herramientas necesarias en la limpieza de las superficies interiores y
                                        exteriores de la Tienda Departamental.</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Aplicar la **honestidad**, demostrando una buena conducta con buenas
                                        aptitudes
                                        en su centro de trabajo.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="mt-5">
                        Del cual <b>“EL TRABAJADOR”</b> deberá demostrar resultados y cifras que derivan
                        conforme a los
                        parámetro de medición a efecto de verificar que <b>“EL TRABAJADOR”</b> desempeña un
                        actividad
                        laboral conforme al cumplimiento de los estándares de limpieza para aplicar desinfección
                        del
                        lugar
                        determinado, limpieza e higiene derivado que <b>“EL CLIENTE”</b> requiere que el área de
                        su
                        centro
                        de trabajo <b>(Tienda Departamental)</b> se encuentre en óptimas condiciones de higiene,
                        calidad,
                        mantenerse organizado y aseado a efecto de iniciar las ventas departamentales en razón a
                        su
                        objeto
                        social del cual debe de estar esterilizados, es decir contener una buena higiene
                        conforme a los
                        estándares de salubridad y enfocado al control de limpieza en el piso, muebles,
                        proveedores,
                        almacenes y entre otros espacios que requiera <b>“EL CLIENTE”</b> para cumplir con la
                        norma de
                        higiene y salud cumpliendo con los estándares que son requisitos fundamentales para la
                        venta de
                        productos que se pretenden comercializarse en Centros Comerciales y/o Plazas
                        Comerciales.
                    </p>
                    <p class="mt-5">
                        <b>“EL TRABAJADOR”</b> deberá de contener una herramienta identificada como (teléfono
                        inteligente
                        con un sistema operativo <b>ANDROID/IOS con PLAY STORE</b>, con excepción de teléfonos
                        <b>HAWEI,
                            LG
                            Y MODELOS DESCONTINUADOS</b>, es decir es un teléfono celular con pantalla táctil,
                        que
                        permite a
                        <b>“EL TRABAJADOR”</b> conectarse a internet, gestionar cuentas de correo electrónico e
                        instalar
                        otras aplicaciones como <b>(TrackPoin)</b> y recursos necesarios a efecto de que “EL
                        TRABAJADOR”
                        se
                        encuentre en un periodo de prueba y de capacitación no mayor de <b>3 (tres) meses</b>,
                        por lo
                        que
                        <b>“EL TRABAJADOR”</b> deberá demostrar un desarrollo y desempeño laboral totalmente
                        satisfactorio
                        para <b>“LA EMPRESA” y “EL CLIENTE”</b>, dicho supuesto <b>“EL TRABAJADOR”</b> no
                        acredita de
                        forma
                        satisfactoria las acciones que determinara <b>“LA EMPRESA”</b> conforme a los resultados
                        obtenidos
                        en razón a sus evaluaciones semanales se procederá con la rotación del
                        <b>“PERSONAL”</b>. En
                        consecuencia, si <b>“EL TRABAJADOR”</b> demuestra una evaluación satisfactoria sirve
                        como
                        instrumento de supervisión y desarrollo para determinar la permanencia de su empleo,
                        acreditando
                        siempre con la aprobación de su jefe inmediato y jefe de taller del cual deberán de
                        estar
                        firmadas
                        por parte del área de Gerencia y Recursos Humanos, para proceder con su estancia en el
                        centro de
                        trabajo.
                    </p>
                    <i class="mt-4">
                        <b>
                            NOTA: Esto no quiere decir que será de forma permanente su estancia en el centro de
                            trabajo,
                            derivado que “EL TRABAJADOR” acepto estar evaluado de forma SEMANAL, confirmado
                            dentro de su
                            Contrato Individual de Trabajo; del cual “EL TRABAJADOR” tiene la obligación de
                            demostrar
                            que
                            sus actividades son de manera satisfactorias a efecto de permanecer dentro del
                            centro de
                            trabajo
                            y conforme a su Contrato de forma Determinada.
                        </b>
                    </i>
                </div>

                <div class="container m-4">
                    <h3 class="text-primary">PROCESO DE EVALUACIÓN:</h3>
                    <div class="section">
                        <h4 class="mt-5 text-primary">
                            I. INICIO DE LA CONTRATACIÓN:
                        </h4>
                        <p class="mt-4">
                            <b>“LA EMPRESA”</b> somete a un <b>Periodo de Evaluación a “EL TRABAJADOR”</b> de
                            manera
                            <b>SEMANAL</b> constando de <b>6 (seis días)</b> iniciando el día <b>Lunes</b> y
                            finalizando
                            el
                            día Domingo conforme a su jornada laboral y a efecto de realizarle a <b>“EL
                                TRABAJADOR”</b>
                            evaluaciones periódicas a cargo de su <b>JEFE INMEDIATO y JEFE DE TALLER</b>, por
                            medio de
                            la
                            plataforma <b>TrackPoint</b>.
                        </p>
                    </div>
                    <div class="section mt-5">
                        <h4 class="text-primary">II. DURANTE SU ESTANCIA LABORAL:</h4>
                        <p>
                            El proceso de la evaluación estará a cargo de su <b>JEFE INMEDIATO</b> del cual
                            procederá a
                            evaluar a <b>“EL TRABAJADOR”</b> que iniciara el día lunes hasta el día domingo
                            durante su
                            horario laboral, por medio de la plataforma <b>TrackPoint</b> y trabajando
                            conjuntamente con
                            el
                            <b>ENCARGADO DE TIENDA</b> que realizará las observaciones pertinentes a efecto de
                            corroborar
                            los parámetros evaluados sea satisfactorios para <b>“EL CLIENTE”</b>.
                        </p>
                    </div>
                    <div class="section mt-5">
                        <h4 class="text-primary">III. EVALUACIÓN: </h4>
                        <p class="mt-5">
                            La evaluación de <b>“EL TRABAJADOR”</b>, se convierte en un proceso para estimular o
                            juzgar
                            el
                            valor, la excelencia las cualidades del desempeño y determinar su permanencia dentro
                            del
                            empleo
                            de <b>“EL TRABAJADOR”</b>, es una herramienta de dirección, imprescindible en la
                            actividad
                            administrativa, ayuda a determinar políticas de recursos humanos adecuada a las
                            necesidades
                            de
                            la organización a cargo del jefe inmediato y conjunto con el jefe de taller
                            evaluaran
                            conforme
                            al desempeño de sus aptitudes y capacidades para ejercer el puesto de <span
                                class="puesto bg-info">“AUXILIAR DE LIMPIEZA”</span> en relación a los
                            Parámetros de
                            medición de <b>PROSMAN</b>.
                        </p>
                    </div>

                    <div class="section mt-5">
                        <h4 class="text-primary">IV. PARÁMETRO DE MEDICIÓN: </h4>
                        <p class="mt-4">
                            El Parámetro de Medición es el proceso por el cual objetivamente se valora
                            cuantitativa y
                            cualitativamente a <b>“EL TRABAJADOR”</b> en el puesto que desempeña de manera
                            semanal y se
                            obtiene con la suma de factores determinantes; positivo o negativo de su rendimiento
                            laboral
                            conforme a la limpieza de la Tienda Departamental en relación a los estándares de
                            calidad
                            requeridos por parte del <b>“CLIENTE”</b> del cual debe de ofrecer calidad, higiene,
                            presentación y limpieza para la venta y distribución del producto que ofrece a sus
                            compradores,
                            por lo estará bajo los siguientes lineamientos:
                        </p>
                    </div>
                </div>

                <div class="container m-4">
                    <div class="table-responsive">
                        <div class="bg-primary text-white text-center fw-bold p-2">Parámetros específicos a
                            considerar
                            en la evaluación</div>
                        <p class="mt-3">
                            Se enlistan los parámetros específicos los cuales se estarán tomando en cuenta para
                            la
                            evaluación individual de cada trabajador y determinar la acción a aplicar:
                        </p>
                        <div class="table-responsive">
                            <table border="1">
                                <tr>
                                    <td class="categoria border-1 bg-primary text-white">Puntualidad y
                                        asistencia
                                        (jornada
                                        completa)</td>
                                    <td class="border-1">
                                        Realizar check in y mandar lista de asistencia <br><br>
                                        Enviar selfie al inicio de turno <br><br>
                                        Cumplir la jornada laboral completa <br><br>
                                        Al finalizar la jornada laboral realizar check out
                                    </td>
                                </tr>
                                <tr>
                                    <td class="categoria border-1 bg-primary text-white">Envío de reportes</td>
                                    <td class="border-1">
                                        Enviar reportes de materiales (insumos, herramienta de trabajo) <br><br>
                                        Enviar reporte de incidencias <br><br>
                                        Enviar bitácora de actividades
                                    </td>
                                </tr>
                                <tr>
                                    <td class="categoria border-1 bg-primary text-white">Cumplen con
                                        Herramientas de
                                        trabajo</td>
                                    <td class="border-1">
                                        Evidencia fotográfica de materiales, utensilios y uniforme completo
                                    </td>
                                </tr>
                                <tr>
                                    <td class="categoria border-1 bg-primary text-white">Cumplimiento oportuno
                                        y
                                        calidad de
                                        actividades</td>
                                    <td class="border-1">
                                        Enviar y realizar el Check list (bitácoras) de actividades a desempeñar
                                        como
                                        <span class="puesto bg-info"> Auxiliar de Limpieza </span> del cual
                                        deberá
                                        de ser
                                        firmada por el encargado de tienda
                                    </td>
                                </tr>
                                <tr>
                                    <td class="categoria border-1 bg-primary text-white">
                                        Calidad en el trabajo
                                    </td>
                                    <td class="border-1">
                                        Evidencia fotográfica y reporte diario verificando la información
                                        enviada
                                    </td>
                                </tr>
                                <tr>
                                    <td class="categoria border-1 bg-primary text-white">
                                        Cumplimiento de reglamento interno
                                    </td>
                                    <td class="border-1">
                                        No acatar las indicaciones y las normas de PROSMAN/CLIENTE <br><br>
                                        No incurrir en incidencias conforme al 47 LFT <br><br>
                                        No incurrir en el incumplir de reglamentos, protocolo, manuales,
                                        procedimientos
                                        y
                                        condiciones generales que conforman PROSMAN /CLIENTE <br><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ategoria border-1 bg-primary text-white">Actitud</td>
                                    <td>
                                        Incumplir a los valores de la empresa, cliente y compañeros de trabajo
                                        sin
                                        ejecutar una buena conducta y probidad para su desempeño laboral como
                                        pueden ser evidenciados por medio de llamadas, mensajes, reportes,
                                        actividades
                                        que desempeña como entre otros factores que influyen para tener un
                                        control en
                                        la relación laboral
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="mt-5">
                        <i>
                            <b>
                                NOTAS: Este Parámetro de Medición este sujeto a su modificación o variación
                                conforme a
                                las
                                etapas que vaya acreditando “EL TRABAJADOR” conforme a las capacitaciones que
                                derivan de
                                sus
                                aptitudes y capacidades necesarias para aplicar el puesto de <span
                                    class="puesto bg-info">“AUXILIAR DE LIMPIEZA“</span>
                            </b>
                        </i>
                    </div>
                </div>

                <div class="container m-4">
                    <h4 class="text-primary">V. RESULTADOS DE EVALUACIÓN: </h4>
                    <p class="mt-4">
                        La evaluación de resultados permite obtener informaciones y analizar el cumplimiento de
                        las
                        obligaciones laborales que tiene <b>“EL TRABAJADOR”</b> con <b>“LA EMPRESA”</b> para
                        cada uno de
                        los
                        objetivos específicos de las operaciones en términos de su actividad, su eficacia y su
                        eficiencia en
                        su actividades laborales, que permitan retroalimentar para que <b>“EL TRABAJADOR”</b>
                        mejore sus
                        aptitudes y capacidades laborales dentro del centro de trabajo o en su caso se proceda
                        su baja
                        derivado que no crédito de manera satisfactoria las actividades por el cual el <b>“JEFE
                            INMEDIATO”</b> gestionaría y analizara la evaluación conforme a los parámetros a
                        efecto de
                        proporcionar los resultados que concluyen con un informe de evaluación que permita
                        identificar
                        la
                        efectividad, la validez y la eficiencia que tuvo <b>“EL TRABAJADOR”</b> al aplicar las
                        operaciones
                        de <b><span class="puesto bg-info">“AUXILIAR DE LIMPIEZA”</span></b>
                    </p>
                </div>

                <div class="container m-4">
                    <h3 class="text-primary">VI. PROCESO PARA CALIFICAR:</h3>
                    <section class="contenedor-tabla p-2">
                        <div class="table-responsive mb-5">
                            <table class="p-4 table">
                                <tr>
                                    <td colspan="5" class="subtitulo fw-bold fs-4 text-primary">Objetivo:
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        Esta evaluación tiene por objetivo validar el desempeño laboral del
                                        colaborador
                                        dentro de la tienda departamental para verificar el cumplimiento de los
                                        estándares
                                        de calidad del servicio de
                                        limpieza y se valore la permanecía del mismo
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>Nombre del trabajador: <span
                                            class="nombreTrabajador">{{ $nombreCompleto }}</span></td>

                                    <td>No. de evaluación: <input type="text" name="evaluacion" id="evaluacion"
                                            style="width:100px; margin-top: 0.5rem;" disabled>
                                    </td>
                                    <td class="">Fecha de evaluación: <input type="date" name="dates"
                                            id="dates" style="width:100px; margin-top: 0.5rem;" disabled></td>
                                    <td>Periodo a evaluar: <input type="date" name="per_evaluar" id="per_evaluar"
                                            style="width:100px; margin-top: 0.5rem;" disabled></td>
                                    <td>Tienda Departamental: <input type="text" name="servicio" id="servicio"
                                            style="width:100px; margin-top: 0.5rem;" disabled>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="mb-5 table-responsive">
                            <table border="1">
                                <thead class="">
                                    <tr>
                                        <th colspan="4">El resultado de esta evaluación determina las
                                            acciones a
                                            aplicar
                                            según los
                                            resultados obtenidos, tomando en cuenta los siguientes lineamientos:
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="excelente text-danger">95% - 100%<br>Excelente</th>
                                        <th class="buen text-danger">85% - 94%<br>Buen Desempeño</th>
                                        <th class="condicionado text-danger">71% - 84%<br>Condicionado a
                                            permanencia
                                        </th>
                                        <th class="recision text-danger">0% - 70%<br>Recisión Laboral</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="table-responsive mb-5">
                            <table class="table table-bordered">

                                <thead>
                                    <tr>
                                        <th rowspan="2">Valor por día: 2.38 %</th>
                                        <th colspan="7"></th>
                                    </tr>
                                    <tr>
                                        <th>Lunes</th>
                                        <th>Martes</th>
                                        <th>Miércoles</th>
                                        <th>Jueves</th>
                                        <th>Viernes</th>
                                        <th>Sábado</th>
                                        <th>Domingo</th>
                                        <th>Sumatoria</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Puntualidad y asistencia (jonarda completa)</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td></td>
                                        <td>14.28%</td>
                                    </tr>
                                    <tr>
                                        <td>Envio de reportes</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td></td>
                                        <td>14.28%</td>
                                    </tr>
                                    <tr>
                                        <td>Cumple con Herramientas de trabajo</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td></td>
                                        <td>14.28%</td>
                                    </tr>
                                    <tr>
                                        <td>Cumplimient o oportuno de actividades</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td></td>
                                        <td>14.28%</td>
                                    </tr>
                                    <tr>
                                        <td>Calidad en el trabajo</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td></td>
                                        <td>14.28%</td>
                                    </tr>
                                    <tr>
                                        <td>Cumplimient o de reglamento interno</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td></td>
                                        <td>14.28%</td>
                                    </tr>
                                    <tr>
                                        <td>Actitud</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td>2.38%</td>
                                        <td></td>
                                        <td>14.28%</td>
                                    </tr>
                                    <tr>
                                        <td colspan="8">PORCENTAJE SEMANAL OBTENIDO</td>
                                        <td colspan="1">100%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                    <section class="mt-4">
                        <h3 class="text-primary">Comentarios:</h3>
                        <textarea rows="4" class="" disabled></textarea>
                    </section>
                    <section class="mt-4 mb-4">
                        <p>Nombre de quien realiza la evaluación</p>
                        <span class="jefetaller"></span>
                    </section>
                </div>

                <div class="container m-4">
                    <ul>
                        <li>
                            * <b>EVALUADOR:</b> Jefe Inmediato (supervisor) y Encargado de Tienda (C&A)
                        </li>
                        <li>
                            * <b>CALIFICADOR</b>: jefe Inmediato (supervisor) y Coordinador de Proyecto
                        </li>
                        <li>
                            <b>APROBACIÓN</b>: Gerente de Operaciones y Recursos Humanos.
                        </li>
                    </ul>
                </div>

                <div class="container m-4">
                    <h3 class="text-primary">VII. RESULTADO:</h3>
                    <p class="mt-4">
                        El resultado será conforme al rol de lavado de unidades y a los estándares que aplique
                        <b>“LA
                            EMPRESA”</b> para determinar las actividades de limpieza que ha realizado <b>“EL
                            TRABAJADOR”</b>
                        con los siguientes lineamientos:
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center align-middle">
                            <tbody>
                                <tr>
                                    <td class="fw-bold">95% al 100%</td>
                                    <td class="fw-bold">EXCELENCIA</td>
                                    <td>⭐</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">85% AL 94% </td>
                                    <td class="fw-bold">BUEN DESEMPEÑO</td>
                                    <td>👍</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">71% AL 84%</td>
                                    <td class="fw-bold">CONDICIONADO A PERMANENCIA</td>
                                    <td>😟</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">0% AL 70% </td>
                                    <td class="fw-bold">PRESCINDIR DE SUS SERVICIOS</td>
                                    <td>🛑👎</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="container m-4">
                    <h4 class="text-primary">VIII. NOTIFICACIÓN DEL RESULTADO:</h4>
                    <p class="mt-4">
                        <b>“LA EMPRESA”</b> procederá en notificarle por medio de su correo electrónico al
                        <b>“TRABAJADOR”</b> previamente proporcionado en su Contrato Individual de Trabajo en el
                        que le
                        estará informando lo siguiente:
                    </p>
                    <div class="container m-4">
                        <h3 class="text-primary mt-5">RESULTADOS DE LA EVALUACIÓN SEMANAL</h3>
                        <p class="mt-2">
                            La evaluación de <b>“EL TRABAJADOR”</b> generará uno de los siguientes resultados:
                        </p>
                        <table class="table table-bordered table-hover">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th style="width: 10%;">No.</th>
                                    <th>Resultado de la Evaluación</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        La evaluación correspondiente al número de la semana con fecha y hora
                                        que se
                                        procedió en evaluarlo. (Parece ser la notificación general de la
                                        evaluación).
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        Acreditó la evolución de forma **satisfactoria** correspondiente al
                                        número de la
                                        semana con fecha y hora que se procedió en evaluarlo.
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        Acreditó la evaluación **condicionada a permanencia**, por lo que estará
                                        sujeto
                                        a evaluaciones constantes.
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        **No acreditó la evaluación** correspondiente al número de la semana con
                                        fecha y
                                        hora que se procedió en evaluarlo, del cual se procede a **rescindir la
                                        relación
                                        laboral**.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="mt-3">
                        Previamente a la información, el <b>“JEFE INMEDIATO”</b> le informará a <b>“EL
                            TRABAJADOR”</b>
                        su
                        resultado los días lunes de cada semana por medio del correo electrónico de <b>“EL
                            TRABAJADOR”</b> y
                        en caso de tener alguna una llamada telefónica y/o WhatsApp será para mencionarle los
                        puntos de
                        mejoramiento y/o condiciones para determinar su estancia en el centro de trabajo
                    </p>
                </div>
                <div class="container m-4">
                    <h3 class="text-primary">IX. NO ACREDITO LA EVALUACIÓN:</h3>
                    <p class="mt-4">
                        Conforme al Parámetro de la Evaluación y resultado de <b>“EL TRABAJADOR”</b> no acredito
                        de
                        manera
                        satisfactoria la evaluación:
                    </p>

                    <div class="table-responsive mt-2">
                        <table class="table table-bordered text-center align-middle">
                            <tbody>
                                <tr>
                                    <td class="fw-bold">84% AL 0 %</td>
                                    <td class="fw-bold">PRESCINDIR DE SUS SERVICIOS</td>
                                    <td>👎</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <p class="mt-4">
                        <b>“LA EMPRESA”</b> determinará que la capacitación inicial y conforme a la evaluación
                        que
                        <b>“EL
                            TRABAJADOR”</b> se sometió para el puesto de <b><span class="puesto bg-info">AUXILIAR DE
                                LIMPIEZA</span></b> y del cual no acredita la competencia <b>“EL TRABAJADOR”;
                            “LA
                            EMPRESA”</b> dará por terminada la relación de trabajo, sin responsabilidad para el
                        patrón conforme un Aviso de Rescisión y anexando las evidencias por el cual no acredita
                        las
                        aptitudes
                        necesarias para el puesto por el cual fue Contrato Individual de Trabajo y conforme al
                        artículo
                        39-B. de la
                        Ley Federal del Trabajo.
                    </p>
                </div>

                <div class="container m-4">
                    <h3 class="text-primary">PAGARE ANEXO VIII</h3>
                    <p class="mt-5">
                        <b>“EL TRABAJADOR”</b> quien es contratado bajo el puesto de <span
                            class="puesto bg-info">AUXILIAR DE LIMPIEZA</span>, una de sus principales
                        actividades
                        con
                        forme al <b>Anexo I Perfil del Puesto</b>, deberá de realizar la limpieza de distintas
                        áreas que
                        requiera <b>“EL CLIENTE”</b> del cual estará a cargo bajo su responsabilidad toda vez
                        que sus
                        actividades consisten en hacer la limpieza en los muebles, así como caja de cobro,
                        almacén de
                        ropa y
                        como los objetos que se encuentren en el centro de trabajo <b>“C&A”</b> , del cual
                        <b>“EL
                            TRABAJADOR”</b> acepta asumir la responsabilidad que pudiese ocasionarle por un
                        descuido
                        imputable <b>“EL TRABAJADOR”</b> es decir que cause perjuicios o daños en el inmueble
                        por la
                        imprudencia que pueda generar y está conforme que sea susceptible a un <b>“Anexo VII
                            Pagare”</b>
                        por
                        el concepto de <b class="bg-info">$12,000.00 MXN (DOCE MIL PESOS MEXICANOS)</b> en el
                        supuesto
                        antes mencionado y que este dependerá de ser efectuado con forme a los daños que sean
                        causados
                        por
                        el mal uso del puesto por el cual fue contratado, es decir que sea causal a un abuso de
                        confianza y
                        conforme a lo debidamente deducible del Seguro en razón al daño o perjuicio ocasionado
                        será
                        correspondiente a una <b>“Responsabilidad Civil” “EL TRABAJADOR”</b> en relación a la
                        contingencia
                        de daños <b>“AL CLIENTE”</b>.
                    </p>
                    <p class="mt-5">
                        De lo anterior debidamente manifestado en el presente clausulado <b>VIGESIMA “A”</b>
                        conforme al
                        Contrato Individual de Trabajo, <b>“EL TRABAJADOR”</b> tendrá responsabilidad con <b>“EL
                            CLIENTE”</b> y con <b>“LA EMPRESA”</b> en el supuesto del incumplimiento a la
                        cláusula o en
                        su
                        caso por incurrir conforme a lo estipulado en la cláusula <b>VIGÉSIMA PRIMERA</b>, del
                        cual
                        pueda
                        ser causal a una responsabilidad de carácter Penal y Civil conforme a la competencia
                        jurídicamente o
                        legalmente se disponga por el concepto de <b>“daños o abuso de confianza”</b> al
                        establecimiento
                        de
                        la Tienda Departamental en el supuesto de la inmobiliaria que se encuentra en el centro
                        de
                        trabajo
                        <b>“C&A” <span class="nombreCedis bg-info"></span></b>.
                    </p>
                </div>
                <div class="container m-4">
                    <h3 class="text-primary">DESCANSOS, VACACIONES Y DÍAS FESTIVOS:</h3>
                    <p>Los descansos, vacaciones, días festivos se darán de la siguiente manera:</p>
                    <h4 class="text-primary">1. DESCANSOS:</h4>
                    <p class="mt-4">
                        <b>“EL TRABAJADOR”</b> podrá disfrutar un <b>día de descanso</b>, por cada <b>seis días
                            de
                            trabajo</b> que corresponderá <b>ENTRE SEMANA</b>, que este será determinado por su
                        <b>JEFE
                            INMEDIATO</b> con goce de salario íntegro con forme a su Contrato Individual de
                        Trabajo
                        cláusula
                        <b>DÉCIMA</b>.
                    </p>
                    <p class="mt-4">
                        <b>“El TRABAJADOR”</b> será causal a descuentos conforme al <b>INCUMPLIMIENTO DE LA
                            JORNADA
                            LABORAL</b>, en razón a la inasistencia durante su jornada laboral por causa
                        injustificada,
                        del
                        cual <b>“EL TRABAJADOR”</b> será acreedor al descuento de su día descanso conforme lo
                        determine
                        <b>“LA EMPRESA”</b>.
                    </p>
                    <h4 class="text-primary"> 2. VACACIONES:</h4>
                    <p class="mt-4">
                        <b>“EL TRABAJADOR”</b> que tengan más de un año contratado en <b>“LA EMPRESA”</b>
                        disfrutarán de
                        un
                        periodo
                        anual de vacaciones, del cual <b>“EL TRABAJADOR”</b> del cual serán aprodas conforme a
                        las
                        siguientes disposiciones:
                    </p>
                    <p>
                        <b>“EL TRABAJADOR”</b> deberá de acreditar a “LA EMPRESA” que ha cumplido más de un año
                        conforme
                        a
                        su Contrato Individual de Trabajo y a sus obligaciones laborales.
                    </p>
                    <p>
                        <b>“EL TRABAJADOR”</b> tiene la obligación de manifestarle a su <b>JEFE INMEDIATO</b>
                        con un mes
                        antes como anticipo para solicitar las vacaciones, conforme a los siguiente:
                    </p>

                    <div class="container m-4">
                        <h3 class="text-primary mt-5">PROCEDIMIENTO PARA LA SOLICITUD DE VACACIONES</h3>
                        <p class="mt-2">
                            Para la solicitud, revisión y aprobación de vacaciones, <b>“EL TRABAJADOR”</b> y el
                            <b>JEFE
                                INMEDIATO</b> deberán seguir los siguientes pasos:
                        </p>
                        <table class="table table-bordered table-hover">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th style="width: 10%;">Paso</th>
                                    <th>Descripción del Proceso</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <b>Solicitud del Trabajador:</b> <b>“EL TRABAJADOR”</b> deberá solicitar
                                        las
                                        vacaciones a su <b>JEFE INMEDIATO</b> por escrito, identificado como
                                        <b>“SOLICITUD DE VACACIONES”</b>. La solicitud debe realizarse con el
                                        tiempo y
                                        la forma requerida por <b>“LA EMPRESA”</b>.
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        **Canales de Notificación:** La solicitud debe ser notificada mediante
                                        correo
                                        electrónico al <b>JEFE INMEDIATO</b> y por medio de un mensaje de texto
                                        a través
                                        de la plataforma <b>WhatsApp</b>, a efecto de realizar la anotación
                                        pertinente.
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        **Recepción y Filtro Inicial:** El <b>JEFE INMEDIATO</b> recibirá la
                                        **“SOLICITUD DE VACACIONES”**. Toda solicitud que no cumpla con el
                                        término
                                        solicitado por <b>“LA EMPRESA”</b> no será autorizada.
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        **Aprobación Interna:** El <b>JEFE INMEDIATO</b> deberá analizar la
                                        solicitud
                                        con el Departamento de **OPERACIONES y RECURSOS HUMANOS**, corroborando
                                        que
                                        <b>“EL TRABAJADOR”</b> contempla los requisitos necesarios para su
                                        aprobación.
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        **Notificación de Resultados:** El **JEFE INMEDIATO** le notificará a
                                        **“EL
                                        TRABAJADOR”** el resultado, que será uno de los siguientes:
                                        <ul>
                                            <li>**Aprobación:** Se aprobó su solicitud y se determinan los días
                                                que
                                                tomará **“EL TRABAJADOR”** como vacaciones.</li>
                                            <li>**Negación:** Se negó la solicitud, informando la causa por la
                                                que no
                                                fue autorizada.</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="container m-4">
                        <h4 class="text-primary mt-5">OPCIONES ANTE SOLICITUD DE VACACIONES NO APROBADA</h4>
                        <p class="mt-2">
                            En caso de que la solicitud de vacaciones no sea aprobada, **“EL TRABAJADOR”** podrá
                            optar
                            por las siguientes opciones:
                        </p>
                        <table class="table table-bordered table-hover">
                            <thead class="bg-info text-white">
                                <tr>
                                    <th style="width: 10%;">Opción</th>
                                    <th>Descripción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Solicitar que le sean **pagadas** las vacaciones correspondientes.</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Solicitar las vacaciones con posterioridad, después de un mes de la
                                        fecha
                                        original.</td>
                                </tr>
                            </tbody>
                        </table>

                        <h4 class="text-primary mt-5">PROCEDIMIENTO EN CASO DE NEGACIÓN POR FALTA DE REEMPLAZO
                        </h4>
                        <p class="mt-2">
                            En caso de que se haya negado la solicitud por la causa específica de **no encontrar
                            un
                            reemplazo**, **“EL TRABAJADOR”** podrá realizar lo siguiente:
                        </p>
                        <table class="table table-bordered table-hover">
                            <thead class="bg-info text-white">
                                <tr>
                                    <th style="width: 10%;">Paso</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>A</td>
                                    <td>**“EL TRABAJADOR”** buscará su reemplazo conforme al **“PERFIL DEL
                                        PUESTO”**, el
                                        cual **no podrán ser familiares**.</td>
                                </tr>
                                <tr>
                                    <td>B</td>
                                    <td>**Notificación del Reemplazo:** Una vez encontrado, **“EL TRABAJADOR”**
                                        deberá
                                        informar a su **JEFE INMEDIATO** por medio de una NOTIFICACIÓN
                                        electrónica y
                                        WhatsApp que encontró a su reemplazo. Este reemplazo solo será
                                        contemplado como
                                        **“CUBRE VACACIONES”**.</td>
                                </tr>
                            </tbody>
                        </table>

                        <h4 class="text-primary mt-5">PAGO DE VACACIONES NO DISFRUTADAS</h4>
                        <p class="mt-2">
                            Si <b>“EL TRABAJADOR”</b> solicitó que le sean pagadas las vacaciones (Opción 1),
                            este pago
                            se realizará conforme <b>“LA EMPRESA”</b> lo determine. Se emitirá una
                            **NOTIFICACIÓN** y un
                            documento escrito en el cual <b>“EL TRABAJADOR”</b> acepta la cantidad que le será
                            cubierta.
                            Se le asignará fecha del día en que serán cubiertas conforme a la disponibilidad
                            presupuestal del área Contable.
                        </p>
                    </div>
                    <div class="container m-4">
                        <h3 class="text-primary mt-5">DÍAS DE DESCANSO OBLIGATORIO (DÍAS FESTIVOS)</h3>
                        <hr class="w-50 ms-0 border-primary">
                        <p>
                            <b>“EL TRABAJADOR”</b> podrá disfrutar como **DÍAS FESTIVOS** de descanso
                            obligatorio,
                            conforme a lo dispuesto por el Artículo 74 de la Ley Federal del Trabajo:
                        </p>
                        <table class="table table-bordered table-hover">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th style="width: 10%;">No.</th>
                                    <th>Fecha o Evento</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>El 1° de enero.</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>El primer lunes de febrero en conmemoración del 5 de febrero.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>El tercer lunes de marzo en conmemoración del 21 de marzo.</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>El 1° de mayo.</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>El 16 de septiembre.</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>El tercer lunes de noviembre en conmemoración del 20 de noviembre.</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>El 1° de diciembre de cada seis años, cuando corresponda a la
                                        transmisión del
                                        Poder Ejecutivo Federal.</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>El 25 de diciembre.</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>El que determinen las leyes federales y locales electorales, en el caso
                                        de
                                        elecciones ordinarias, para efectuar la jornada electoral.</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-4 alert alert-primary">
                            **Nota Importante:** Cualquier día que no esté estipulado dentro del marco jurídico
                            (fiestas
                            patronales, parroquiales, mayordomía o cualquier festividad de uso personal) no
                            serán
                            considerados como días festivos de descanso obligatorio.
                        </p>
                    </div>
                    <div class="container m-4">
                        <p class="mt-3">
                            <b>“LA EMPRESA”</b> podrá requerirle y solicitarle a <b>“EL TRABAJADOR”</b> cubrir
                            una
                            jornada
                            laboral conforme a los <b>DÍAS FESTIVOS</b>, siempre que exista un acuerdo de
                            voluntad de
                            ambas
                            partes y así mismo se le notificará por medio de un mensaje de WhatsApp del <b>DÍA
                                FESTIVO</b>
                            por
                            el cual estará trabajando y por el cual <b>“EL TRABAJADOR”</b> dará de confirmar con
                            la
                            palabra
                            <b>SI ACEPTO</b> o en su caso <b>NO ACEPTO</b>.
                        </p>
                    </div>
                    <div class="container m-4">
                        <h3 class="text-primary mt-5">DESCUENTOS Y SANCIONES ECONÓMICAS</h3>
                        <hr class="w-75 ms-0 border-primary">
                        <p class="mt-4">
                            Los descuentos que se pueden aplicar dentro de las **NORMAS y CONDICIONES DE TRABAJO
                            de
                            PROSMAN** se reflejarán vía nómina, suscitándose en los siguientes casos:
                        </p>
                        <table class="table table-bordered table-hover">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th style="width: 5%;">No.</th>
                                    <th style="width: 30%;">Causa del Descuento/Sanción</th>
                                    <th>Disposición Aplicable</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>**Retardos**</td>
                                    <td>
                                        * Por **cada retardo** se aplicará una sanción económica descontando vía
                                        nómina.
                                        * Aplicar **3 retardos** de forma consecutiva durante la quincena
                                        corriente
                                        aplicará el descuento de un **día de trabajo**.
                                        * El primer y segundo retardo (no tendrán descuento, pero serán
                                        sancionados
                                        conforme a la política de evaluación semanal descrita en los parámetros
                                        de la
                                        evaluación).
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>**Faltas Injustificadas**</td>
                                    <td>
                                        * Por cada **día de inasistencia** se aplicará el descuento vía nómina
                                        del día
                                        de inasistencia.
                                        * En caso de ser injustificado, **no será acreedor al pago de día de
                                        descanso**
                                        (séptimo día).
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>**Daños a Material, Equipo o Unidades**</td>
                                    <td>
                                        En caso de que **“EL TRABAJADOR”** provoque un daño (material, equipo o
                                        unidades) dentro de las instalaciones del **“CLIENTE”**, con previa
                                        notificación
                                        y evidencia, será sancionado conforme al monto de los daños causados. El
                                        monto
                                        tendrá que ser cubierto por **“EL TRABAJADOR”**, quien autoriza de
                                        manera
                                        expresa el descuento vía nómina.
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>**Uniforme Otorgado**</td>
                                    <td>
                                        Descuento aplicable por pérdida o mal uso del uniforme. (El costo se
                                        determinará
                                        internamente).
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>**Incumplimiento en Resultados**</td>
                                    <td>
                                        Se generará cuando el colaborador no cumpla con lo mínimo solicitado por
                                        el área
                                        correspondiente, de acuerdo a las evaluaciones semanales. (El monto de
                                        la
                                        sanción se determinará internamente).
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>**Incumplimiento de Envío de Reportes Digitales**</td>
                                    <td>
                                        Incumplimiento en el envío de reportes mediante la aplicación de
                                        **PROSMAN**
                                        (TRACK POINT). (El monto de la sanción se determinará internamente).
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="container m-4">
                        <h3 class="text-primary">NOMINA</h3>
                        <h4 class="text-primary">ESQUEMAS DE PAGO ETIPULADO POR CONTRATO</h4>
                        <p>
                            <b>
                                “EL TRABAJADOR” tendrá un esquema de pago correspondiente a su salario devengado
                                conforme
                                sea
                                contratado, por lo que serán dos formas de pago de manera SEMANAL y QUINCENAL.
                            </b>
                        </p>
                        <p>
                            <b>
                                1. SEMANAL
                            </b>
                        </p>
                        <p>Ejemplo</p>
                        <ul>
                            <li>
                                * Lo trabajado de lunes a domingo de la <b>semana 1</b> se paga viernes de la
                                siguiente
                                semana.
                            </li>
                            <li>
                                * Lo trabajado de lunes a domingo de la <b>semana 2</b> se paga viernes de la
                                siguiente
                                semana.
                            </li>
                            <li>
                                * Lo trabajado de lunes a domingo de la <b>semana 3</b> se paga viernes de la
                                siguiente
                                semana.
                            </li>
                            <li>
                                * Lo trabajado de lunes a domingo de la <b>semana 4</b> se paga viernes de la
                                siguiente
                                semana.
                            </li>
                        </ul>

                        <div class="table-responsive">
                            <img src="../public/img/anexos/semanas_mes.png" alt="" width="100%">
                            <!-- <img src="./public/img/anexos/semanas_mes.png" alt="" width="100%"> ***********************************************-->
                        </div>
                    </div>
                    <div class="container m-4">
                        <h3 class="fw-bold text-primary">2. QUINCENAL</h3>

                        <p><strong>Ejemplo</strong></p>
                        <p>
                            Los días de pago de nómina son los días
                            <b>05 y 20 de cada mes</b> en la cual se da a conocer lo siguiente:
                        </p>

                        <div class="mt-3 d-flex justify-content-center">
                            <table class="table table-bordered text-center shadow-sm rounded "
                                style="max-width: 450px;">
                                <thead>
                                    <tr class="text-white">
                                        <th>PERIODO</th>
                                        <th>DÍA DE PAGO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01–15</td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <td>16–31</td>
                                        <td>05</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="w-50 d-flex justify-content-center">
                        <i>
                            Para que el pago sea en quincena corriente este debe
                            de tener mínimo 5 días trabajados, en caso de que se
                            tengan menos de 5 días, los trabajadores le serán
                            pagados en la siguiente quincena próxima
                        </i>
                    </div>

                    <div class="container m-4">
                        <h3 class="text-primary">DISPOSICIONES FINALES</h3>
                        <hr>

                        <h4 class="text-primary">FORMA DE PAGO</h4>
                        <p>
                            La forma de pago será a través de vía <b>NOMINA BBVA, SANTANDER, BANCO AZTECA,
                                BANAMEX</b>
                        </p>
                        <p>
                            El pago será realizado en horario abierto de 24 hrs
                        </p>

                        <h4 class="text-primary">MANEJO DE LA INFORMACIÓN</h4>
                        <p>
                            Toda información que se te sea conferida para realizar tus actividades, deberá de
                            manejarse
                            únicamente con el fin con el que se te fue brindada. Toda la información debe de ser
                            respaldada, manejando y custodiada conforme a los estatutos que marcan
                            <b>PROSMAN</b>, así
                            como en la <b>Ley de protección de datos</b>. En caso de que el manejo de la
                            información se
                            use de manera incorrecta y no sea conforme a los intereses de <b>PROSMAN, “EL
                                TRABAJADOR”</b> que sea hallado como responsable será acreedor a una sanción de
                            carácter
                            administrativo, a su vez será investigado por el área jurídica y Relaciones
                            Laborales, para
                            determinar el dictamen con el que será sancionando el colaborador según a la
                            gravedad del
                            caso.
                        </p>

                        <h4 class="text-primary">BAJA DEL TRABAJADOR</h4>
                        <p>
                            En caso de una baja del Trabajador de forma voluntaria o por otra índole pueden ser
                            de la
                            siguiente forma:
                        </p>

                        <table class="table table-bordered table-hover">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th style="width: 25%;">Causa de Baja</th>
                                    <th>Descripción y Disposición</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b>1. RENUNCIA VOLUNTARIA:</b></td>
                                    <td>Se da cuando <b>“EL TRABAJADOR”</b> ya no dese continuar laborando con
                                        <b>“LA
                                            EMPRESA” PROSMAN</b>, este deberá de notificar como mínimo <b>5 días
                                            antes</b>, al área de <b>RRHH y JEFE DIRECTO</b> del porque ya no
                                        desea
                                        continuar colaborando con la empresa.
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>2. FALTAS INJUSTIFICADAS:</b></td>
                                    <td>Se da cuando <b>“EL TRABAJADOR”</b> tenga más de <b>3 faltas sin
                                            justificar</b>
                                        durante un mes corriente o exceso de retardos dentro del mismo periodo.
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>3. CAUSAULES:</b></td>
                                    <td>Son aquella que se encuentran señaladas dentro del artículo 47 de la Ley
                                        Federal
                                        del Trabajo del cual deriva de ciertas, conductas inapropiadas que
                                        ejerce <b>“EL
                                            TRABAJADOR”</b> en el centro de trabajo.</td>
                                </tr>
                                <tr>
                                    <td><b>4. EVALUACIÓN SEMANAL:</b></td>
                                    <td>Conforme al <b>ANEXO VII “Parámetros De Evaluación Y Medición Semanal
                                            PROSMAN”</b>, derivado que <b>“EL TRABAJADOR”</b> se pondrá en
                                        evaluación a
                                        efecto de verificar la limpieza de la <b>TIENDA DEPARTAMENTAL</b> <span
                                            class="nombreCedis bg-warning"></span> y dar cumplimiento con los
                                        estándares técnicas para el lavado, desinfección, limpieza e higiene
                                        derivado
                                        que <b>“EL CLIENTE”</b>, toda vez que si <b>“EL TRABAJADOR”</b> no
                                        cumple con
                                        los estándares requeridos para el puesto por el cual aplico se procederá
                                        con su
                                        baja correspondiente.</td>
                                </tr>
                                <tr>
                                    <td><b>5. PERIODO DE PRUEBA:</b></td>
                                    <td>Cada parámetro a evaluar determinara un porcentaje del cual se
                                        encontrara
                                        sometido <b>“EL TRABAJADOR”</b> a dar cumplimiento a sus obligaciones
                                        laborales
                                        del cual dependerá del rendimiento que genere <b>“EL TRABAJADOR”</b> con
                                        forme a
                                        su desempeño dentro de su jornada laboral y del que determinara si
                                        obtiene el
                                        <b>100%</b> o en su caso sea menor que el <b>100%</b> es decir bajo
                                        rendimiento
                                        conforme a los parámetro de la evaluación que acredite que su desempeño
                                        es
                                        consecuencia de un rendimiento de calidad insuficiente que no acredita
                                        los
                                        estándares de calidad para lo cual fue contratado enfocado a las
                                        técnicas para
                                        la limpieza, desinfección e higiene de la <b>TIENDA DEPARTAMENTAL
                                            C&A</b>,
                                        conforme a los resultados obtenidos serán debidamente notificado a
                                        efecto de
                                        proceder con la terminación de la relación laboral y proceder con su
                                        Aviso de
                                        Rescisión conforme al artículo 39- B de la Ley Federal de Trabajo.
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>6. ABANDONO LABORAL:</b></td>
                                    <td>Es cuando <b>“EL TRABAJADOR”</b> no acude al trabajo durante un número
                                        determinado de días sin avisar a su empresa ni indicar su fecha de
                                        regreso, del
                                        cual <b>“EL TRABAJADOR”</b> no haya manifestado formalmente su intención
                                        de
                                        abandonar el puesto de trabajo, tenga <b>más de 4 faltas de forma
                                            consecutiva</b> conforme al mes, sin notificar a <b>JEFE DIRECTO y
                                            RRHH</b>.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="container m-4">
                        <p>
                            <b>
                                Todas las anteriores serán causales a proceder con su baja del “TRABAJADOR” de
                                forma
                                inmediata
                                sin responsabilidad para “LA EMPRESA” conforme al artículo 47 y 39 B de la Ley
                                Federal
                                del
                                Trabajo.
                            </b>
                        </p>
                        <h3 class="text-primary">
                            AVISO DE RESCISIÓN LABORAL:
                        </h3>
                        <p>
                            El aviso de rescisión laboral es el escrito por medio del cual <b>“LA EMPRESA”</b>
                            informa
                            claramente a <b>“EL TRABAJADOR”</b> la conducta o conductas que dan lugar a la
                            terminación
                            de la
                            relación laboral.
                        </p>
                        <h4 class="text-primary">PROCESO:</h4>
                        <ul>
                            <li>
                                1. Se da derivado <b>Aviso de Rescisión Laboral</b> por medio de un escrito del
                                cual
                                <b>“LA
                                    EMPRESA”</b>
                                informa claramente a <b>“EL TRABAJADOR”</b> la conducta o conductas conforme a
                                los
                                <b>artículos
                                    39-B y
                                    47 de la Ley Federal de Trabajo</b> que dan lugar a la terminación de la
                                relación
                                laboral
                                con <b>“LA
                                    EMPRESA”</b> conforme a toma decisiones por parte de <b>RRHH – COORDINADOR
                                    DE
                                    PROYECTO Y
                                    GERENCIA</b>.
                            </li>
                            <li>
                                2. Se procede en Notificarle a <b>“EL TRABAJADOR”</b> que derivado a la conducta
                                o
                                acción
                                que
                                ejecuto ya
                                no seguirá presentándose a laborar para <b>“LA EMPRESA”</b>.
                            </li>
                            <li>
                                3. <b>“LA EMPRESA”</b> le mencionara a <b>“EL TRABAJADOR”</b> el día y hora por
                                el cual
                                concluyen sus actividades y ya no podrá presentarse a laborar.
                            </li>
                            <li>
                                4. Se notifica el Aviso de Rescisión Laboral a <b>“EL TRABAJADOR”</b> un día
                                previo a su
                                aviso,
                                por parte de <b>“EL TRABAJADOR”</b> se le notificará de forma inmediata a su
                                correo
                                electrónico
                                adjuntando el escrito y del cual tendrá 24 horas para ser firmada y enviada por
                                correo
                                electrónico a su jefe inmediato.
                            </li>
                            <li>
                                5. Se notifica el Aviso de Rescisión Laboral a <b>“EL TRABAJADOR”</b> solo en
                                caso de
                                que
                                sean
                                causales que sean de riesgo para la permanencia o en su caso vulnere la
                                estabilidad del
                                centro
                                de trabajo por parte de <b>“EL TRABAJADOR”</b> se le notificara de forma
                                inmediata y
                                será
                                por
                                medio de una llamada previamente graba y así mismo anexada por medio de una
                                WhatsApp o
                                correo
                                electrónico adjuntando el escrito y del cual deberán ser firmada tendrá 3 horas
                                para ser
                                firmada
                                y enviada por WhatsApp o correo electrónico a su jefe inmediato.
                            </li>
                            <li>
                                6. Se notifica el Aviso de Rescisión Laboral a <b>“EL TRABAJADOR”</b> con siete
                                días
                                previos
                                en
                                caso de no haber acreditado el Periodo de Prueba y/o Evaluación Semanal conforme
                                al
                                Contrato
                                Individual de Trabajo, por lo que el escrito será enviado a su correo
                                electrónico
                                avisando
                                la
                                causa del porque será rescindido asimismo se le informara cuantos días se
                                encontrara
                                laborando y
                                el día por el cual se le enviara el Aviso de Rescisión Laboral que
                                posteriormente <b>“EL
                                    TRABAJADOR”</b> deberá de adjuntar el escrito firmado y enviar la
                                información a su
                                jefe
                                inmediato.
                            </li>
                        </ul>
                        <p>
                            <b>
                                “Todo Aviso de Rescisión Laboral será notificado por medio de un escrito firmado
                                por
                                Jefe
                                Inmediato como Gerente Administrativo, Gerente de Operaciones y Recursos Humanos
                                de “LA
                                EMPRESA”.”
                            </b>
                        </p>
                    </div>
                    <div class="container m-4">
                        <h3 class="text-primary">TERMINACIÓN DE LA RELACIÓN CONTRACTUAL CON EL CLIENTE</h3>
                        <p class="mt-4">
                            Este supuesto se adecua cuando existe una terminación de la relación contractual con
                            <b>“EL
                                CLIENTE”</b> por causa de Rescisión o Terminación Anticipada de los servicios de
                            limpieza
                            que
                            presta <b>“LA EMPRESA”</b> a favor del <b>“CLIENTE”</b>.
                        </p>
                        <p class="mt-4">
                            <b>“LA EMPRESA”</b> acuerda con <b>“EL TRABAJADOR”</b> que en caso de quedar
                            rescindido de
                            forma
                            anticipada el
                            Contrato de Prestación de Servicios que la empresa tiene con el <b>“CLIENTE”</b>
                            contratante
                            del
                            servicio, <b>“EL
                                TRABAJADOR”</b> solo será merecedor al salario equivalente de los días laborados
                            que no
                            hayan
                            sido
                            cubiertos por la nómina, con su finiquito correspondiente y una gratificación
                            conforme a los
                            días
                            laborados
                            y desempeño demostrado en el trabajo sin responsabilidad para <b>“LA EMPRESA”</b>.
                            En caso
                            de
                            que
                            <b>“EL
                                TRABAJADOR”</b> lo solicite podrá ser re ubicado con otro <b>“CLIENTE”</b>
                            correspondiente a
                            su
                            ciudad, si en este
                            hubiera plazas laborales disponibles.
                        </p>
                    </div>
                    <div class="container m-4">
                        <h3 class="text-primary">PAGOS PENDIENTES </h3>
                        <p class="mt-3">
                            Un pago pendiente es aquel que <b>“LA EMPRESA”</b> debe erogar a <b>“EL
                                TRABAJADOR”</b> por
                            los
                            días
                            laborados que no fueron pagados en tiempo y forma acordados en su Contrato
                            Individual de
                            Trabajo,
                            dicho monto se pagará en la próxima fecha estipulada para ello (5 o 20 de cada mes
                            dependiendo
                            el
                            caso) o en su defecto en los próximos 15 días hábiles posteriores a la fecha de
                            baja.
                        </p>
                    </div>
                    <div class="container m-4">
                        <h3 class="text-primary">FINIQUITOS</h3>
                        <p>
                            Para tener derecho a estas prestaciones se deberá evaluar el tipo y motivo de baja
                            de <b>“EL
                                TRABAJADOR”</b>, una vez verificado el tiempo real laborado de <b>“EL
                                TRABAJADOR</b>
                        </p>

                        <ul>
                            <li>
                                <b>PROCESO:</b> Para tener derecho al pago de esta prestación <b>“EL
                                    TRABAJADOR”</b>
                                deberá
                                de
                                contar con un mínimo de <b>90 días laborados</b> dentro de las instalaciones de
                                PROSMAN,
                                siempre
                                y cuando que la baja se haya dado en amigable composición entre ambas partes.
                                Efectuándose
                                el
                                pago a partir de <b>los 30 días hasta 60 días hábiles</b> del término de la
                                relación
                                laboral
                                con
                                <b>“EL TRABAJADOR”</b>.
                            </li>
                        </ul>
                    </div>
                    <div class="container m-4">
                        <i>
                            <b>
                                Para que el pago pueda proceder se deberá hacer una previa investigación entre
                                el Jefe
                                Directo
                                del Trabajador, Contabilidad y Recursos Humanos de PROSMAN, para determinar el
                                motivo de
                                la
                                baja
                                y conciliar si el pago del mismo es procedente o no según sea el caso concreto.
                            </b>
                        </i>
                        <p>
                            Entendiendo que todo se me ha sido manifestado de forma clara y concisa no tenga
                            ninguna
                            duda
                            aceptando las <b>CONDICIONES GENERALES DE TRABAJO.</b>
                        </p>
                    </div>
                    <div class="container my-4">
                        <div class="row justify-content-between">


                            <div class="col-md-5 text-center p-3 border rounded shadow-sm bg-light d-flex flex-column">


                                <div class="d-flex align-items-center justify-content-center mb-2"
                                    style="height: 150px;">
                                    <img src="{{ asset('img/anexos/firmaOF.png') }}" alt="Firma representante"
                                        style="max-height: 100%; max-width: 100%; object-fit: contain;">
                                </div>

                                <hr class="w-50 mx-auto">

                                <span class="fw-bold d-block">JANETT FLOREZ ESPINOSA</span>
                                <span class="text-muted">Representante Legal</span>
                            </div>


                            <div class="col-md-5 text-center p-3 border rounded shadow-sm bg-light d-flex flex-column">


                                <div class="d-flex align-items-center justify-content-center mb-2"
                                    style="height: 150px;">
                                    <img src="{{ asset('storage/Datos_Colaborador/' . $idColaborador . '/historial/firmas_colaborador/firma_' . $idColaborador . '.png') }}"
                                        alt="Firma trabajador"
                                        style="max-height: 100%; max-width: 150%; object-fit: contain;">
                                </div>

                                <hr class="w-50 mx-auto">

                                <h5 class="fw-bold mb-1 text-uppercase text-dark">
                                    {{ $nombreCompleto }}
                                </h5>
                                <span class="text-muted">TRABAJADOR</span>
                            </div>

                        </div>
                    </div>


                    <div class="container m-4">
                        <b>
                            Leído y enterado que lo antes manifestado es cierto y verídico, sin existir dolo,
                            error,
                            lesión
                            y
                            reticencia en razón a la Solicitud de Empleo. Una vez hecho lo anterior, ratifican y
                            firman
                            el
                            presente documento en cada una de las fojas que lo contiene la Solicitud de Empleo,
                            a los
                            <span class="dia"></span> días del mes de <span class="mes"></span>
                            del año <span class="year"></span>
                        </b>
                    </div>


                </div>
            </div>
        </div>






        <div class="col-sm-12 col-lg-6 mt-4 mx-auto border rounded text-justify mb-5 bg-white shadow-lg p-4 p-md-5">
            <div class="w-100 d-flex flex-column px-1 align-items-center mb-4">
                <h2 class="pb-5 text-primary" style="font-size: 2.5rem;">ANEXO III “PRUEBA”</h2>

                <div class="container m-4 ">
                    <h3 class="text-primary">CARTA DE ACEPTACIÓN A UN PERIODO DE PRUEBA PROSMAN</h3>

                    <p>
                        Yo <span class="nombreTrabajador bg-info">{{ $nombreCompleto }}</span>, quien me
                        identifico
                        con Credencial
                        para
                        Votar expedida por <b>Instituto Nacional Electoral</b> con numero de Clave Elector <span
                            class="claveElector bg-warning"></span> y siendo el día <b
                            class="bg-warning fechaIngreso"></b> por el cual soy contratado para el puesto de
                        <b><span class="puesto bg-info">AUXILIAR DE LIMPIEZA</span></b> en el Centro de trabajo
                        identificado como <b>“TIENDA DEPARTAMENTAL C&A”</b>; así mismo conforme al Contrato
                        Individual
                        de Trabajo dentro de su cláusula cuarta, manifiesto que <b>ACEPTO SOMETERME A UN PERIODO
                            DE
                            PRUEBA</b> a partir de la contratación y cual consiste en pruebas continuas conforme
                        lo
                        requiera <b>“LA EMPRESA”</b> hasta fenecer su contrato de tiempo determinado con Periodo
                        de
                        Prueba; fecha que determina la duración de la relación laboral con <b>“LA EMPRESA”</b>,
                        conforme
                        al fundamento de los artículos 35 y 36 fracción I y III de la Ley Federal del Trabajo; a
                        efecto
                        de acreditar que se cumple con los requisitos y conforme al Perfil del Puesto
                        acreditando
                        que
                        cuento con los conocimientos necesarios para desarrollar los labores para las cuales soy
                        contratado, y en el caso que <b>“LA EMPRESA”</b>, determine que aún no soy apto para
                        desempeñar
                        el referido puesto, procederá con la terminación de la relación laboral sin
                        responsabilidad
                        patronal
                    </p>
                </div>
                <div class="col-md-5 text-center p-3 border rounded shadow-sm bg-light d-flex flex-column">


                    <div class="d-flex align-items-center justify-content-center mb-2" style="height: 150px;">
                        <img src="{{ asset('storage/Datos_Colaborador/' . $idColaborador . '/historial/firmas_colaborador/firma_' . $idColaborador . '.png') }}"
                            alt="Firma trabajador" style="max-height: 100%; max-width: 150%; object-fit: contain;">
                    </div>

                    <hr class="w-50 mx-auto">

                    <h5 class="fw-bold mb-1 text-uppercase text-dark">
                        {{ $nombreCompleto }}
                    </h5>
                    <span class="text-muted">TRABAJADOR</span>
                </div>
                <div class="container m-4">
                    <b>
                        <i> Leído y enterado que lo antes manifestado es cierto y verídico, sin existir
                            dolo, error, lesión y reticencia en razón al PERIODO DE PRUEBA. Una vez
                            hecho lo anterior, ratifican y firman el presente documento en cada una de
                            las fojas que lo contienen como ANEXO III del Contrato Individual de
                            Trabajo, a los <span class="dia"></span> días del mes de <span class="mes"></span>
                            del año <span class="year"></span>
                            .</i>
                    </b>
                </div>

            </div>
        </div>

        <div class="col-sm-12 col-lg-6 mt-4 mx-auto border rounded text-justify mb-5 bg-white shadow-lg p-4 p-md-5">
            <div class="w-100 d-flex flex-column px-1 align-items-center mb-4">
                <h2 class="pb-3 text-primary" style="font-size: 2.5rem;">ANEXO IV</h2>
                <h2 class="text-center text-primary" style="font-size: 2rem;">REGLAMENTO INTERIOR DE TRABAJO
                    DE
                    “SERVICIOS E INSUMOS PROSMAN S.A. DE C.V, PARA TRABAJADORES NO SINDICALIZADOS</h2>
            </div>

            <div class="container m-4">
                <p class="text-justify">
                    Reglamento Interior de Trabajo para trabajadores no sindicalizados de la empresa
                    <strong>“SERVICIOS E INSUMOS PROSMAN S.A. DE C.V.”</strong> DENTRO DE LAS INSTALACIONES
                    DE <span class="bg-info text-white p-1 rounded">C&A</span>, con domicilio Fiscal en Puebla,
                    Puebla.
                    Para la creación del presente
                    Reglamento Interior de Trabajo comparece la C. JANETT FLORES ESPINOSA como
                    administrador único, celebra la creación del presente reglamento interior de trabajo que
                    deberá regir las relaciones internas de la empresa “SERVICIOS E INSUMOS PROSMAN
                    S.A. DE C.V.” ubicada en Puebla, Puebla. y en cualquier sucursal que pudiera abrir en el
                    territorio mexicano, o en los domicilios de los clientes de la empresa antes citada...
                </p>
                <p class="m-4">
                    El presente reglamento se crea el presente al tenor de lo siguiente
                </p>
            </div>

            <div class="container m-4">
                <h3 class="text-primary">DEFINICIONES</h3>
                <table class="table table-bordered table-striped">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th style="width: 30%;">Término</th>
                            <th>Definición</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>EMPRESA</td>
                            <td>“SERVICIOS E INSUMOS PROSMAN S.A. DE C.V.”</td>
                        </tr>
                        <tr>
                            <td>REPRESENTANTES DE LOS TRABAJADORES</td>
                            <td>Comité de empleados no sindicalizados que participan en la formulación del
                                presente
                                reglamento interior de trabajo.</td>
                        </tr>
                        <tr>
                            <td>TRABAJADORES</td>
                            <td>Los trabajadores de “SERVICIOS E INSUMOS PROSMAN S.A. DE C.V.”</td>
                        </tr>
                        <tr>
                            <td>LEY</td>
                            <td>Ley Federal del Trabajo</td>
                        </tr>
                        <tr>
                            <td>SEGURO SOCIAL</td>
                            <td>Instituto Mexicano del Seguro Social</td>
                        </tr>
                        <tr>
                            <td>EL REGLAMENTO</td>
                            <td>Conjunto de disposiciones obligatorias para las partes establecidas en el
                                presente
                                documento.</td>
                        </tr>
                        <tr>
                            <td>SUCURSAL</td>
                            <td>Cualquier establecimiento de la empresa que sirva como unidad de negocio o de
                                operaciones en que los trabajadores no sindicalizados deban prestar sus
                                servicios
                                etc.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="container m-4">
                <h3 class="text-primary">DISPOSICIONES GENERALES</h3>
                <h3 class="text-primary">INGRESO</h3>
                <table class="table table-bordered table-hover">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th style="width: 10%;">No.</th>
                            <th style="width: 30%;">Título/Concepto</th>
                            <th>Disposición</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Requisitos de Ingreso</td>
                            <td>Para poder ingresar al servicio de la Empresa se requerirá previamente llenar
                                una
                                solicitud de empleo en la cual el solicitante manifieste sus aptitudes y
                                capacidades
                                para el trabajo, además de cumplir con los siguientes requisitos:
                                <ul>
                                    <li>* Acta de nacimiento</li>
                                    <li>* Certificado de último grado de estudios (mínimo secundario)</li>
                                    <li>* Comprobante de domicilio actual (no mayor a tres meses)</li>
                                    <li>* Cartilla liberada del Servicio Nacional Militar en el caso de varones
                                    </li>
                                    <li>* Comprobante de filiación al IMSS</li>
                                    <li>* CURP</li>
                                    <li>* Acta de matrimonio cuando sea casado o acta de nacimiento de la pareja
                                        en
                                        concubinato.</li>
                                    <li>* Acta de nacimiento de los hijos</li>
                                    <li>* Credencial con domicilio actual</li>
                                    <li>* Dos cartas de recomendación personales</li>
                                    <li>* Constancias laborales de los últimos cuatro años, con fecha de ingreso
                                        y
                                        salida, membretadas y selladas.</li>
                                    <li>* Licencia de manejo tipo B, si el puesto lo requiere. Si los prospectos
                                        laboraron en el ejército o la marina, deberán presentar el oficio de
                                        baja de
                                        servicio activo, cuando este haya tenido como causales a solicitud del
                                        interesado y por retiro del activo (jubilación)</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Exámenes</td>
                            <td>El solicitante deberá someterse previamente a los exámenes necesarios para
                                comprobar
                                su
                                estado físico, capacidad mental, habilidades y conocimientos generales y
                                especialidades
                                que posea.</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Aceptación del Reglamento</td>
                            <td>El solicitante al ingresar a laborar a la Empresa acepta el presente Reglamento
                                como
                                parte de sus obligaciones laborales.</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Domicilio</td>
                            <td>El solicitante tendrá la obligación de proporcionar su domicilio y los cambios
                                posteriores del mismo.</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Antecedentes No Penales</td>
                            <td>Carta de antecedentes no penales.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="container m-4">
                <h3 class="text-primary">JORNADA DE TRABAJO Y DESCANSO SEMANAL</h3>
                <table class="table table-bordered table-hover">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th style="width: 10%;">No.</th>
                            <th>Disposición</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>6</td>
                            <td>De acuerdo a las funciones del personal no sindicalizado, este deberá apegarse a
                                la
                                jornada que será impuesta por la empresa, conforme a la Ley</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Es obligación de los trabajadores presentarse puntualmente a su trabajo,
                                considerando
                                una tolerancia hasta de cinco minutos para presentarse a sus labores después de
                                la
                                cual
                                la Empresa se reserva el derecho de recibir a él trabajador.</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Los trabajadores convienen que en la Empresa podrá aplicar cualquier otra
                                modalidad
                                de
                                las establecidas en el artículo 59 de la Ley o volver al sistema de seis días
                                semanales
                                de trabajo, según lo requieran las necesidades de trabajo.</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Las horas de entrada y salida y los horarios de tomar alimentos y descanso
                                podrán
                                ser
                                variados discrecionalmente por la empresa de acuerdo con sus necesidades de
                                trabajo.
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Empresa y Trabajadores convienen en que estos últimos podrán ser cambiados de
                                sus
                                turnos
                                y puestos de trabajo de acuerdo con las necesidades de la Empresa.</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>La Empresa podrá variar el lugar de prestación de servicios de acuerdo con sus
                                necesidades y avisando a los trabajadores con 48 horas de anticipación.</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Los trabajadores tendrán un período de 30 minutos para tomar sus alimentos o
                                para el
                                fin
                                que decidan darle, fuera de las instalaciones de la Empresa.</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Las jornadas principiarán y terminarán en el domicilio que especifique la
                                Empresa y
                                todos los Trabajadores deberán marcar personalmente su tarjeta de tiempo al
                                iniciar
                                y
                                terminar sus labores.</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Los Trabajadores disfrutarán de un día de descanso por cada seis de trabajo que
                                de
                                preferencia será el domingo.</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Para obtener permiso para ausentarse de sus labores se requerirá aprobación por
                                escrito
                                del jefe inmediato y del Departamento de Personal.</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Cuando el permiso abarque el resto de la jornada deberá marcarse en la tarjeta
                                de
                                tiempo, en el entendido que deberá solicitarse con 24 horas de anticipación
                                aprobándose
                                en función de las necesidades de la Empresa.</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>En caso de riesgos de trabajo o enfermedades que impidan al trabajador
                                presentarse a
                                su
                                jornada, deberá avisarse a la Empresa a más tardar dos horas después de iniciada
                                la
                                jornada.</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>Únicamente serán válidas las incapacidades que extienda el Seguro Social para la
                                comprobación de enfermedades o riesgos profesionales.</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Los Trabajadores deberán dar aviso de inmediato a la Empresa cuando sufran un
                                riesgo
                                de
                                trabajo, una enfermedad o accidente no profesional y alguna enfermedad
                                contagiosa.
                            </td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Los certificados médicos del Seguro Social que acreditan una incapacidad deberán
                                entregarse oportunamente al Departamento de Personal dentro de las 24 horas
                                siguientes a
                                la fecha de su expedición.</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Los Trabajadores que opten por el uso de la Cafetería en sus horas de comida y/o
                                descanso deberán someterse a las reglas para el uso de la misma.</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>Queda prohibido a los Trabajadores laborar tiempo extraordinario sin la previa
                                autorización de la EMPRESA</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="container m-4">
                <h3 class="text-primary">LUGAR DE TRABAJO</h3>
                <table class="table table-bordered table-hover">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th style="width: 10%;">No.</th>
                            <th>Disposición</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>23</td>
                            <td>Los Trabajadores deberán estar siempre en el lugar asignado para su trabajo a la
                                hora
                                señalada para iniciar su jornada y no podrán ausentarse del mismo sin la
                                autorización
                                previa de su Superior.</td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td>Los Trabajadores están obligados a asear, mantener limpio y libre de objetos
                                personales
                                su lugar de trabajo.</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>El Trabajador deberá portar su credencial de identificación diariamente y en un
                                lugar
                                visible desde el momento de ingresar a la Empresa.</td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>El Trabajador no podrá retirarse de su lugar de trabajo hasta que lo deje aseado
                                y
                                prepararlo para el siguiente turno.</td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td>Los Trabajadores deberán presentarse a sus labores con el uniforme que
                                corresponda
                                de
                                acuerdo a sus funciones.</td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td>Las vacaciones de los Trabajadores se concederán dentro de los dos meses
                                siguientes
                                al
                                cumplimiento de los años de antigüedad que correspondan, deberán disfrutarse de
                                acuerdo
                                a lo preceptuado en la Ley.</td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td>Las vacaciones de los Trabajadores no serán acumuladas y para poder gozar de
                                ellas
                                se
                                solicitarán con quince días de anticipación.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="container m-4">
                <h3 class="text-primary">SALARIO, LUGAR Y DIA DE PAGO.</h3>
                <table class="table table-bordered table-hover">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th style="width: 10%;">No.</th>
                            <th>Disposición</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>30</td>
                            <td>El pago de salarios de los trabajadores será convenido en de cada semana.</td>
                        </tr>
                        <tr>
                            <td>31</td>
                            <td>La Empresa se reserva el derecho de cambiar el día de pago si sus necesidades lo
                                requieren.</td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td>Cualquier reclamación sobre el pago del salario deberá hacerse al momento.</td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td>En circunstancias excepcionales, cuando el trabajador no pueda cobrar su
                                salario, el
                                pago se podrá hacer a un familiar mediante carta poder suscrita ante dos
                                testigos,
                                autorizada por el representante de la empresa.</td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td>Cuando el día de pago del salario coincida con uno de descanso se pagará el día
                                anterior
                                o posterior.</td>
                        </tr>
                        <tr>
                            <td>35</td>
                            <td>El lugar de pago del salario será el pactado en el contrato por la Empresa y el
                                trabajador, ya sea en forma personal o por vía transferencia a la cuenta que el
                                trabajador indique a la empresa.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="container m-4">
                <h3 class="text-primary">RIESGOS DE TRABAJO, HIGIENE Y SEGURIDAD.</h3>
                <table class="table table-bordered table-hover">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th style="width: 10%;">No.</th>
                            <th>Disposición</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>36</td>
                            <td>Los trabajadores que estén incapacitados para asistir a su trabajo, deberán
                                notificar a
                                la Empresa dicha falta y la causa, en la inteligencia de que únicamente se
                                justificará
                                esta mediante la incapacidad que para tal efecto expida el Seguro Social, en
                                caso de
                                enfermedad general o riesgo de trabajo, no aceptándose ningún otro medio para
                                justificar
                                la falta. La incapacidad deberá ser presentada a la Empresa, dentro del término
                                de
                                24
                                horas contadas a partir de que esta sea expedida por el Seguro Social. Así como
                                el
                                dictamen de calificación del probable riesgo de trabajo y alta del mismo en su
                                caso.
                            </td>
                        </tr>
                        <tr>
                            <td>37</td>
                            <td>Si un Trabajador contrae una enfermedad contagiosa o está en contacto directo
                                con
                                personas que la padezcan, deberá dar aviso a la Empresa y al Seguro Social de
                                dicha
                                circunstancia.</td>
                        </tr>
                        <tr>
                            <td>38</td>
                            <td>Si algún Trabajador padece alguna enfermedad que a criterio de la Empresa puede
                                ponerlo
                                en peligro a él o a los demás trabajadores en el desempeño de su trabajo, deberá
                                someterse a un examen médico en el Seguro Social o en el lugar que la Empresa
                                designe.
                                En caso necesario, la Empresa actuará conforme a la ley y a las disposiciones
                                del
                                Seguro
                                Social.</td>
                        </tr>
                        <tr>
                            <td>39</td>
                            <td>En caso de epidemia, los Trabajadores se someterán a un examen médico y
                                cumplirán
                                con
                                las medidas dictadas por autoridades competentes tendientes a evitar contagios y
                                profusión del mal.</td>
                        </tr>
                        <tr>
                            <td>40</td>
                            <td>Las Trabajadores que queden embarazadas están obligadas a dar aviso inmediato a
                                la
                                Empresa de su embarazo a fin de que puedan cumplir con lo estipulado en el
                                Artículo
                                170
                                de la Ley, y Artículo 110 de la Ley del Seguro Social.</td>
                        </tr>
                        <tr>
                            <td>41</td>
                            <td>La Empresa se obliga a proporcionar a sus trabajadores los primeros auxilios que
                                sean
                                necesarios y el equipo de seguridad que se requiera.</td>
                        </tr>
                        <tr>
                            <td>42</td>
                            <td>Los Trabajadores deberán usar todo el tiempo los equipos o prendas que para su
                                seguridad
                                le proporcione la empresa. La negativa a usarlos se considerará como
                                desobediencia a
                                las
                                órdenes del patrón.</td>
                        </tr>
                        <tr>
                            <td>43</td>
                            <td>Los Trabajadores tendrán la obligación de mantener limpios y en buen estado
                                todos
                                los
                                baños, así como depositar la basura en los cestos correspondientes.</td>
                        </tr>
                        <tr>
                            <td>44</td>
                            <td>Cualquier Trabajador que cometa alguna violación o infracción en el uso de los
                                baños
                                se
                                aplicarán las medidas disciplinarias establecidas en este Reglamento.</td>
                        </tr>
                        <tr>
                            <td>45</td>
                            <td>Es obligación de los Trabajadores someterse a los tratamientos médicos que les
                                prescriban en el Seguro Social.</td>
                        </tr>
                        <tr>
                            <td>46</td>
                            <td>Las labores que se desempeñan por la Empresa, no se consideran insalubres o
                                peligrosas.
                            </td>
                        </tr>
                        <tr>
                            <td>47</td>
                            <td>La Empresa y los Trabajadores constituirán las comisiones de seguridad e
                                higiene, de
                                acuerdo como lo establece la Ley.</td>
                        </tr>
                        <tr>
                            <td>48</td>
                            <td>Los trabajadores se obligan a cumplir con lo pactado en su contrato individual
                                de
                                trabajo.</td>
                        </tr>
                        <tr>
                            <td>49</td>
                            <td>Los Trabajadores deberán someterse a las prácticas profilácticas que, como
                                campañas
                                de
                                vacunación, higiene, etc., emprenda la Empresa, el Seguro Social, o las
                                Autoridades
                                de
                                Salud.</td>
                        </tr>
                        <tr>
                            <td>50</td>
                            <td>Los Trabajadores deberán usar el equipo de seguridad que les señale la Empresa
                                en
                                los
                                lugares que se les indiquen, así como respetar las áreas donde no se permite
                                fumar,
                                señaladas por la Empresa.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="container m-4">
                <h3 class="text-primary">CAPACITACIÓN, ADIESTRAMIENTO Y PRODUCTIVIDAD</h3>
                <table class="table table-bordered table-hover">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th style="width: 10%;">No.</th>
                            <th>Disposición</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>51</td>
                            <td>Todos los Trabajadores estarán obligados a recibir la capacitación que la
                                Empresa
                                proporcione en cumplimiento de sus obligaciones de capacitar y adiestrar.</td>
                        </tr>
                        <tr>
                            <td>52</td>
                            <td>Ningún Trabajador podrá operar una máquina si no ha sido entrenado previamente o
                                autorizado por su jefe inmediato.</td>
                        </tr>
                        <tr>
                            <td>53</td>
                            <td>Los Trabajadores estarán obligados a desempeñar las prácticas, rutinas o
                                simulacros,
                                etc., relacionadas con la seguridad, higiene o productividad en el trabajo.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="container m-4">
                <h3 class="text-primary">RESPONSABILIDADES.</h3>
                <table class="table table-bordered table-hover">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th style="width: 10%;">No.</th>
                            <th>Disposición</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>54</td>
                            <td>Todos los Trabajadores estarán obligados a cumplir con las disposiciones que
                                marca
                                la
                                ley:</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="container m-4">
                <h3 class="text-primary">NORMAS DISCIPLINARIAS Y SANCIONES</h3>
                <table class="table table-bordered table-hover">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th style="width: 10%;">No.</th>
                            <th>Disposición</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>55</td>
                            <td>El incumplimiento de las obligaciones contraídas por el Trabajador y la
                                violación a
                                las
                                normas de este Reglamento, del Contrato Individual, del Contrato Colectivo y de
                                la
                                ley,
                                darán derecho a la Empresa para sancionar a los Trabajadores.</td>
                        </tr>
                        <tr>
                            <td>56</td>
                            <td>La Empresa podrá sancionar a sus trabajadores mediante la aplicación de
                                cualquiera
                                de
                                las siguientes medidas disciplinarias, de acuerdo con la gravedad de la falta.
                                <ul>
                                    <li>A). AMONESTACIONES VERBALES,</li>
                                    <li>B). AMONESTACION ESCRITA, Y</li>
                                    <li>C). SUSPENSION DE 1 A 8 DIAS SIN GOCE DE SUELDO</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>57</td>
                            <td>La reincidencia en las causas que ameritan medidas disciplinarias dará derecho
                                de
                                aumentar el grado de sanción que se imponga en cada caso.</td>
                        </tr>
                        <tr>
                            <td>58</td>
                            <td>La Empresa podrá en todo tiempo optar por sancionar una falta a este Reglamento
                                de
                                acuerdo con lo establecido en el mismo o rescindir la relación y Contrato de
                                Trabajo
                                conforme a la Ley.</td>
                        </tr>
                        <tr>
                            <td>59</td>
                            <td>La suspensión del servicio del Trabajador podrá ser aplicada en los siguientes
                                casos:
                                <ul>
                                    <li>a). - Por dedicarse a labores distintas a las que correspondan o tengan
                                        destinadas el Trabajador durante las horas de trabajo.</li>
                                    <li>b). - Por falsear informes de trabajo rendidos a su jefe Inmediato
                                        Superior
                                        en
                                        provecho propio o en contra de algún compañero de trabajo.</li>
                                    <li>c). - Por no usar el equipo de protección que haya sido proporcionado
                                        por la
                                        Empresa, así como por negarse a seguir las normas de seguridad.</li>
                                    <li>d). - Por dejar su sitio de trabajo sin autorización del jefe Inmediato
                                        Superior.</li>
                                    <li>e). - Por transportar o hacer que se transporte en vehículos de la
                                        Empresa a
                                        personas que no estén autorizadas, así como transportar objetos ajenos a
                                        la
                                        Empresa.</li>
                                    <li>f). - por permitir el uso de vehículos de la Empresa a personas no
                                        autorizadas
                                        por la misma.</li>
                                    <li>g). - Por introducir al interior de la Empresa a personas ajenas sin
                                        previa
                                        autorización.</li>
                                    <li>h). - Por tener más de tres retardos en 30 días, independientemente que
                                        haya
                                        sido admitido a laborar en cada ocasión.</li>
                                    <li>i). - Por incumplimiento a las medidas de higiene y seguridad.</li>
                                    <li>j). - Por tener más de dos amonestaciones escritas.</li>
                                    <li>k). - Por faltar de uno a tres días injustificadamente en un período de
                                        30
                                        días.
                                    </li>
                                    <li>l). - Por usar los aparatos y herramientas para trabajos que no sean de
                                        la
                                        Empresa.</li>
                                    <li>m). - Por introducir al lugar de trabajo o consumir en el mismo
                                        cualquier
                                        tipo
                                        de drogas o bebidas embriagantes.</li>
                                    <li>n). - Por no ejecutar el trabajo con la intensidad cuidado y esmero
                                        debidos.
                                    </li>
                                    <li>o). - por no observar buenas costumbres y respeto a sus compañeros y/o
                                        los
                                        representantes del Patrón.</li>
                                    <li>p). - Por salir del trabajo antes de la hora señalada.</li>
                                    <li>q). - Por quitar o mover tableros protectores, señales de aviso contra
                                        incendio
                                        y seguridad destinados a proteger a los demás trabajadores y a la
                                        Empresa.
                                        Igualmente, los avisos de no fumar, sistemas, métodos de trabajo y
                                        ayudas
                                        visuales.</li>
                                    <li>r). - Por entrar y salir a la Empresa por lugares no autorizados e
                                        introducir a
                                        las áreas de trabajo refrescos, golosinas, comestibles, o fumar en las
                                        áreas
                                        donde se prohíbe fumar.</li>
                                    <li>s). - Por practicar juegos, juegos de azar, leer periódicos y revistas o
                                        cualquier otra publicación durante las horas de trabajo.</li>
                                    <li>t). - Por vender boletos u otro artículo, efectuar loterías, circular
                                        publicaciones, distribuir literatura, letreros o material escrito dentro
                                        del
                                        inmueble que ocupa la Empresa.</li>
                                    <li>u). - Por rayar y dañar los servicios sanitarios, las llaves del agua,
                                        regaderas, mingitorios, casilleros y lavabos, etc.</li>
                                    <li>v). - Por entorpecer la producción intencionalmente o debido a la
                                        ausencia
                                        en el
                                        lugar de operación o cualquier otra causa.</li>
                                    <li>w). - Por amenazar a la Empresa, sus bienes, su personal o sus
                                        familiares,
                                        ejecutar cualquier acto de sabotaje o causar algún daño premeditado,
                                        ejecutar
                                        robos en bienes de la Empresa, materiales o artículos en almacén o en
                                        los
                                        bienes
                                        personales de los empleados.</li>
                                    <li>x). - Por correr, jugar o no usar la credencial de identificación en un
                                        lugar
                                        visible desde que se ingresa a la Planta.</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>60</td>
                            <td>Todo Supervisor o Representante del patrón podrá llamar la atención a los
                                Trabajadores a
                                su cargo por incumplimiento de sus obligaciones o violación a este Reglamento,
                                guardando
                                el debido respeto y consideración absteniéndose del mal trato.</td>
                        </tr>
                        <tr>
                            <td>61</td>
                            <td>Todos los demás casos de menos gravedad, no previstos en el artículo anterior,
                                que
                                no
                                constituyan causas de rescisión darán lugar a una amonestación verbal o escrita
                                a
                                juicio
                                de la Empresa.</td>
                        </tr>
                        <tr>
                            <td>62</td>
                            <td>Siempre que se vaya a aplicar una sanción a un Trabajador, deberá hacérsele
                                saber
                                previamente, pidiéndole una explicación acerca de su conducta, hecho lo cual se
                                procederá a aplicar la sanción correspondiente en caso de que no se justifique
                                la
                                falta
                                cometida.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="container m-4">
                <div class="d-flex justify-content-around py-5">
                    <div class="col-md-5 text-center p-3 border rounded shadow-sm bg-light d-flex flex-column">


                        <div class="d-flex align-items-center justify-content-center mb-2" style="height: 150px;">
                            <img src="{{ asset('img/anexos/firmaOF.png') }}" alt="Firma representante"
                                style="max-height: 100%; max-width: 100%; object-fit: contain;">
                        </div>

                        <hr class="w-50 mx-auto">

                        <span class="fw-bold d-block">JANETT FLOREZ ESPINOSA</span>
                        <span class="text-muted">Representante Legal</span>
                    </div>


                    <div class="col-md-5 text-center p-3 border rounded shadow-sm bg-light d-flex flex-column">


                        <div class="d-flex align-items-center justify-content-center mb-2" style="height: 150px;">
                            <img src="{{ asset('storage/Datos_Colaborador/' . $idColaborador . '/historial/firmas_colaborador/firma_' . $idColaborador . '.png') }}"
                                alt="Firma trabajador"
                                style="max-height: 100%; max-width: 150%; object-fit: contain;">
                        </div>

                        <hr class="w-50 mx-auto">

                        <h5 class="fw-bold mb-1 text-uppercase text-dark">
                            {{ $nombreCompleto }}
                        </h5>
                        <span class="text-muted">TRABAJADOR</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm-12 col-lg-6 mt-4 mx-auto border rounded text-justify mb-5 bg-white shadow-lg p-4 p-md-5">
            <div class="w-100 d-flex flex-column px-1 align-items-center mb-4"></div>
            <!-- Encabezado -->
            <div class="text-center mb-4">
                <h2 class="mb-3">ANEXO V</h2>
                <h4 class="fw-bold">ACTA DE ENTREGA, RECEPCIÓN Y RESPONSIVA DE UNIFORME PROSMAN</h4>
            </div>

            <!-- Fecha -->
            <div class="d-flex justify-content-end mb-3">
                <p class="mb-0">
                    <span class="dia"></span> de <span class="mes"></span> de <span class="year"></span>
                </p>
            </div>

            <!-- Texto principal -->
            <p class="text-justify">
                Por medio de la presente Acta se hace del conocimiento que la empresa
                <b>“SERVICIOS E INSUMOS PROSMAN S.A. DE C.V.”</b> entrega el uniforme correspondiente al
                trabajador
                <span class="nombreTrabajador bg-info px-1">{{ $nombreCompleto }}</span>, con fecha
                <span class="dia"></span> de <span class="mes"></span> de <span class="year"></span>,
                mismo
                que proporciona
                <b>“LA EMPRESA”</b> para portarlo durante su jornada laboral correspondiente a la
                <b>“TIENDA DEPARTAMENTAL C&A <span class="nombreCedis bg-warning px-1"></span>”</b>, conforme
                al
                siguiente desglose:
            </p>

            <!-- Tabla -->
            <div class="table-responsive my-4">
                <table class="table table-bordered text-center align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>NO. DE PIEZAS</th>
                            <th>DESCRIPCIÓN</th>
                            <th>OBSERVACIONES</th>
                            <th>PRECIO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>$</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>$</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>$</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>$</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Texto final -->
            <p class="text-justify">
                Los artículos antes listados Yo
                <span class="nombreTrabajador bg-info px-1">{{ $nombreCompleto }}</span>
                los recibo nuevos y en perfectas condiciones; me responsabilizo a portar el uniforme con
                pulcritud y
                conservarlo en buen estado. La dotación es propiedad de
                <b>“LA EMPRESA” SERVICIOS E INSUMOS PROSMAN S.A. DE C.V.</b>; en caso de terminación del
                contrato o entrega de nueva dotación, me comprometo a devolverla en su totalidad.
            </p>

            <p class="text-justify">
                Por lo anterior autorizo a <b>“LA EMPRESA”</b> a descontar de mi salario el costo por deterioro,
                daño o
                pérdida del uniforme atribuibles a mi uso.
            </p>

            <p class="text-justify">
                Yo
                <span class="nombreTrabajador bg-info px-1">{{ $nombreCompleto }}</span>
                ratifico y acepto la presente entrega y responsiva del uniforme en el mes de
                <span class="mes"></span> de <span class="year"></span>.
            </p>

        </div>



        <!-- ANEXO 7 PARAMETROS EVALUACIÓN-->
        <div class="col-sm-12 col-lg-6 mt-4 mx-auto border rounded text-justify mb-5 bg-white shadow-lg p-4 p-md-5">
            <div class="w-100 d-flex flex-column px-1 align-items-center mb-4"></div>
            <h2 class="d-flex justify-content-center align-items-center flex-column my-4">EVALUACIÓN DE
                DESEMPEÑO
                LABORAL</h2>

            <section class="contenedor-tabla p-2">
                <div class="table-responsive">
                    <table border="1">
                        <tr>
                            <td class="titulo bg-primary text-white" colspan="2">Objetivo:</td>
                            <td colspan="3" class="border-1">
                                Esta evaluación tiene por objetivo validar el desempeño laboral del colaborador
                                dentro
                                de su área de trabajo y resguardo para verificar el cumplimiento de los
                                estándares de
                                calidad del servicio de limpieza y se valore la permanencia del mismo.
                            </td>
                        </tr>
                        <tr>
                            <td class="border-1 bg-primary text-white">Nombre del trabajador:</td>
                            <td class="border-1" colspan=""></td>
                            <td class="border-1 bg-primary text-white">No. De evaluación</td>
                            <td class="border-1"></td>
                            <td class="border-1 bg-primary text-white">Fecha:</td>
                        </tr>
                        <tr>
                            <td class="border-1 bg-primary text-white">Período a evaluar:</td>
                            <td class="border-1"></td>
                            <td class="border-1 bg-primary text-white">Lugar del Servicio:</td>
                            <td colspan="2" class="border-1"></td>
                        </tr>
                        <tr>
                            <td class="border-1" colspan="5">
                                El resultado de esta evaluación determina las acciones a aplicar según los
                                resultados
                                obtenidos, tomando en cuenta los siguientes lineamientos:
                            </td>
                        </tr>
                        <tr>
                            <td class="border-1">100%</td>
                            <td class="border-1" colspan="2">99% al 94%</td>
                            <td class="border-1">94% al 85%</td>
                            <td class="border-1" colspan="2">del 84% al 0%</td>
                        </tr>
                        <tr>
                            <td class="border-1">Excelente</td>
                            <td class="border-1" colspan="2">Buen Desempeño</td>
                            <td class="border-1">Condicionado a permanencia</td>
                            <td class="border-1" colspan="2">Recisión laboral</td>
                        </tr>
                    </table>
                </div>
                <div class="mb-5 table-responsive">
                    <table border="1">
                        <thead class="">
                            <tr>
                                <th colspan="4">El resultado de esta evaluación determina las acciones a
                                    aplicar
                                    según los
                                    resultados obtenidos, tomando en cuenta los siguientes lineamientos:</th>
                            </tr>
                            <tr>
                                <th class="excelente">100%<br>Excelente</th>
                                <th class="buen">99% - 94%<br>Buen Desempeño</th>
                                <th class="condicionado">94% - 85%<br>Condicionado a permanencia</th>
                                <th class="recision">84% - 0%<br>Recisión Laboral</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="table-responsive mb-5">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th rowspan="2" class="">Criterios</th>
                                <th colspan="7">Días de la Semana</th>
                            </tr>
                            <tr>
                                <th class="bg-primary text-white">Lunes</th>
                                <th class="bg-primary text-white">Martes</th>
                                <th class="bg-primary text-white">Miércoles</th>
                                <th class="bg-primary text-white">Jueves</th>
                                <th class="bg-primary text-white">Viernes</th>
                                <th class="bg-primary text-white">Sábado</th>
                                <th class="bg-primary text-white">Domingo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="bg-primary text-white">Puntualidad y asistencia (jornada completa)
                                </td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                            </tr>
                            <tr>
                                <td class="bg-primary text-white">Reportes diarios digitales</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                            </tr>
                            <tr>
                                <td class="bg-primary text-white">Calidad en el trabajo</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                            </tr>
                            <tr>
                                <td class="bg-primary text-white">Cumplimiento del reglamento interno</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                            </tr>
                            <tr>
                                <td class="bg-primary text-white">Actitud</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                            </tr>
                            <tr class="porcentaje-semanal">
                                <td class="bg-primary text-white">Total</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                                <td>20%</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="">
                                <td colspan="7">PORCENTAJE SEMANAL OBTENIDO</td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </section>
            <section class="mt-4">
                <h3>Comentarios:</h3>
                <textarea rows="4" cols="25" disabled></textarea>
            </section>
            <section class="mt-4 mb-4">
                <h4>Nombre de quien realiza la evaluación</h4>
                <span class="jefetaller"></span>
            </section>

            <div class="container m-4">
                <div class="table-responsive">
                    <div class="bg-primary text-white text-center fw-bold p-2">Parámetros específicos a
                        considerar
                        en la evaluación</div>
                    <p class="mt-3">
                        Se enlistan los parámetros específicos los cuales se estarán tomando en cuenta para la
                        evaluación individual de cada trabajador y determinar la acción a aplicar:
                    </p>
                    <div class="table-responsive">
                        <table border="1">
                            <tr>
                                <td class="categoria border-1 bg-primary text-white">Puntualidad y asistencia
                                    (jornada
                                    completa)</td>
                                <td class="border-1">
                                    Realizar check in y mandar lista de asistencia <br><br>
                                    Foto de asistencia <br><br>
                                    Cumplir la jornada laboral completa <br><br>
                                    Al finalizar la jornada laboral realizar check out
                                </td>
                            </tr>
                            <tr>
                                <td class="categoria border-1 bg-primary text-white">Reportes digitales diarios
                                </td>
                                <td class="border-1">
                                    Enviar reportes de materiales (insumos, herramienta de trabajo) <br><br>
                                    Enviar reporte de incidencias <br><br>
                                    Enviar bitácora de actividades
                                </td>
                            </tr>
                            <tr>
                                <td class="categoria border-1 bg-primary text-white">
                                    Calidad en el trabajo
                                </td>
                                <td class="border-1">
                                    Enviar y realizar el Check list (bitácoras) de actividades a desempeñar como
                                    <span class="puesto bg-warning"></span> del cual deberá de ser firmada por
                                    el
                                    encargado de tienda
                                    <br><br>
                                    Evidencia fotográfica y reporte diario verificando la información enviada
                                </td>
                            </tr>
                            <tr>
                                <td class="categoria border-1 bg-primary text-white">
                                    Cumplimiento de reglamento interno
                                </td>
                                <td class="border-1">
                                    Acatar las indicaciones y las normas de PROSMAN/TIENDA <span
                                        class="nombreCedis bg-warning"></span> <br><br>
                                    No incurrir en incidencias conforme al 47 LFT <br><br>
                                    No incurrir en el incumplir de reglamentos, protocolo, manuales,
                                    procedimientos y
                                    condiciones generales que conforman PROSMAN/TIENDA <span
                                        class="nombreCedis bg-warning"></span>

                                </td>
                            </tr>
                            <tr>
                                <td class="ategoria border-1 bg-primary text-white">Actitud</td>
                                <td>
                                    Cumplir a los valores de la empresa, cliente y compañeros de trabajo,
                                    ejecutar una
                                    buena conducta y probidad para su desempeño laboral. como pueden ser
                                    evidenciados
                                    por medio de llamadas, mensajes.
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="mt-5">
                    <i>
                        <b>
                            NOTAS: Este Parámetro de Medición este sujeto a su modificación o variación conforme
                            a las
                            etapas que vaya acreditando “EL TRABAJADOR” conforme a las capacitaciones que
                            derivan de sus
                            aptitudes y capacidades necesarias para aplicar el puesto de <span
                                class="puesto bg-info">“AUXILIAR DE LIMPIEZA“</span>
                        </b>
                    </i>
                </div>
            </div>

            <section class="mt-5 mb-5 sect-firm d-flex flex-column w-100 align-items-center">
                <div class="col-md-5 text-center p-3 border rounded shadow-sm bg-light d-flex flex-column">


                    <div class="d-flex align-items-center justify-content-center mb-2" style="height: 150px;">
                        <img src="{{ asset('storage/Datos_Colaborador/' . $idColaborador . '/historial/firmas_colaborador/firma_' . $idColaborador . '.png') }}"
                            alt="Firma trabajador" style="max-height: 100%; max-width: 150%; object-fit: contain;">
                    </div>

                    <hr class="w-50 mx-auto">

                    <h5 class="fw-bold mb-1 text-uppercase text-dark">
                        {{ $nombreCompleto }}
                    </h5>
                    <span class="text-muted">NOMBRE Y FIRMA DEL COLABORADOR DE ENTERADO</span>
                </div>

            </section>






        </div>


        <div class="col-sm-12 col-lg-6 mt-4 mx-auto border rounded text-justify mb-5 bg-white shadow-lg p-4 p-md-5">
            <div class="w-100 d-flex flex-column px-1 align-items-center mb-4">
                <h2 class="pb-5 text-primary" style="font-size: 2.5rem;">Anexo VIII</h2>
                <h2 class="pb-5 text-primary" style="font-size: 2.5rem;">RESPONSIVA</h2>

                <section class="box">
                    <div>
                        En la Ciudad de <span class="ubicacion_cedis"></span>, Yo, <span
                            class="nombreTrabajador"></span>
                        manifiesto bajo protesta de decir verdad que:
                    </div>
                </section>

                <section class="box">
                    <div>
                        1.- Me comprometo a cubrir y/o saldar la deuda por la cantidad de
                        $12,000 MXN (DOCE MIL PESOS MEXICANOS), debido a que, por mi negligencia, descuido o
                        abuso soy
                        responsable de los daños causados a INSUMOS PROSMAN S.A. DE C.V., sobre
                        el incidente de fecha ,<span class="fechaIngreso"></span> en las instalaciones de
                        <span class="ubicacion_cedis"></span>.
                    </div>
                </section>

                <section class="box">
                    <div class="mt-3">
                        2.- Por lo que comprometo a reparar los daños y perjuicios causados.
                    </div>
                    <div class="mt-3">
                        La responsiva por daños es un concepto que se refiere a la obligación de una persona o
                        entidad
                        de
                        reparar o compensar los daños causados a otra persona o entidad.
                    </div>
                    <div class="mt-3">
                        De conformidad con lo establecido por el articulo 1910 establecido en el Código Civil
                        Federal
                        que a
                        la letra dice:
                    </div>
                    <div>
                        <b>“El que cause un daño a otro, está obligado a repararlo, sin perjuicio de las penas
                            que
                            correspondan”.</b>
                    </div>
                </section>

                <div class="container my-4">
                    <div class="row justify-content-between">


                        <div class="col-md-5 text-center p-3 border rounded shadow-sm bg-light d-flex flex-column">


                            <div class="d-flex align-items-center justify-content-center mb-2" style="height: 150px;">
                                <img src="{{ asset('img/anexos/firmaOF.png') }}" alt="Firma representante"
                                    style="max-height: 100%; max-width: 100%; object-fit: contain;">
                            </div>

                            <hr class="w-50 mx-auto">

                            <span class="fw-bold d-block">JANETT FLOREZ ESPINOSA</span>
                            <span class="text-muted">Representante Legal</span>
                        </div>


                        <div class="col-md-5 text-center p-3 border rounded shadow-sm bg-light d-flex flex-column">


                            <div class="d-flex align-items-center justify-content-center mb-2" style="height: 150px;">
                                <img src="{{ asset('storage/Datos_Colaborador/' . $idColaborador . '/historial/firmas_colaborador/firma_' . $idColaborador . '.png') }}"
                                    alt="Firma trabajador"
                                    style="max-height: 100%; max-width: 150%; object-fit: contain;">
                            </div>

                            <hr class="w-50 mx-auto">

                            <h5 class="fw-bold mb-1 text-uppercase text-dark">
                                {{ $nombreCompleto }}
                            </h5>
                            <span class="text-muted">TRABAJADOR</span>
                        </div>

                    </div>



                    @if (session()->has('success') || $status_anexos == 0)
                        <div class="alert alert-primary text-center p-4 my-4">
                            <strong>¡Proceso completado!</strong><br>

                            @if (session()->has('success'))
                                {{ session('success') }}
                            @else
                                Has aceptado correctamente los anexos del contrato digital.
                            @endif
                        </div>
                    @endif


                    @if ($status_anexos == 1)
                        <div class="container m-4">
                            <div class="d-flex justify-content-center align-items-center mb-3 me-3">

                                <form method="POST" action="{{ route('aceptar.anexo') }}">
                                    @csrf
                                    <button class="btn btn-primary" type="submit">
                                        Acepto los términos y condiciones del Contrato Digital
                                    </button>
                                </form>

                            </div>
                        </div>
                    @endif



                </div>
            </div>

        </div>
        </div>

</html>
