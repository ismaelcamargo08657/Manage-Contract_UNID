const sueldoDiarioBase = 278.8;
let diasMes = 30;
let sueldoBase = sueldoDiarioBase * diasMes;
let nacionalidad = "Mexicana";


document.getElementById("sueldoAutorizado").value = sueldoBase; // BAJARLO, ESE SI SE VA A LA BASE
document.getElementById("nacionalidad").value = nacionalidad;

$("#enviarFormularioSolicitud")
  .on("click", function (e) {
    e.preventDefault();

  let formularioValido = true;
  let camposVacios = [];

  // Validamos todos los inputs, selects y textareas que estén visibles y no deshabilitados
  $("#FormSolicitud input:not([disabled]):not([type=hidden]), #FormSolicitud select:not([disabled]), #FormSolicitud textarea:not([disabled])").each(function () {
    const tipo = $(this).attr("type");
    const name = $(this).attr('name');
    const id = $(this).attr("id");
    const valor = $(this).val()?.trim();

    if ((tipo === "radio" || tipo === "checkbox") && name) {
      const grupo = $(`input[name="${name}"]`);
      if(grupo.filter(":checked").length === 0){
        formularioValido = false;
        camposVacios.push(`Selecciona una opción para "${name}`);
        grupo.closest("div").addClass("input-error");
        grupo.addClass
      }else{
        grupo.closest("div").removeClass("input-error");
      }
      return;
    }

    if (!valor) {
      formularioValido = false;
      const label = $("label[for='" + id + "']").text().trim();
      camposVacios.push(label || name || id);
      $(this).addClass("input-error");
    } else {
      $(this).removeClass("input-error");
    }
  });

  if (!formularioValido) {
    alert("Por favor completa todos los campos obligatorios:\n\n" + camposVacios.join("\n"));
    $(".input-error").first()[0].scrollIntoView({ behavior: "smooth", block: "center" });
    return;
  }

    const data = {
    idColaborador: localStorage.idColaborador,
    sueldo_deseado: $("#sueldo_deseado").val(),
    fecha_contratacion: $("#fechaContratacion").val(),
    colonia: $("#colonia").val(),
    codigo_postal: $("#codigo_postal").val(),
      // Campos nuevos del fieldset Documentación
    afore: $("#afore").val(),
    licencia: $("#licencia").val(),
    cartilla: $("#cartilla").val(),
    pasaporte: $("#pasaporte").val(),
    nss: $("#nss").val(),
    clase_licencia: $("#clase_licencia").val(),
    extranjero: $("#extranjero").val(),

      //estado de salud
    estado_salud: $('#estado_salud').val(),
    enfermedad: $('#enfermedad').val(),
    deporte: $('#deporte').val(),
    club: $('#club').val(),
    libre: $('#libre').val(),
    vida: $('#vida').val(),

      // Nuevos campos del fieldset de datos familiares
    nombre_padre: $("#nombre_p").val(),
    vive_padre: $("#vive_p").val(),
    domicilio_padre: $("#domicilio_p").val(),
    ocupacion_padre: $("#ocupacion_p").val(),
    nombre_madre: $("#nombre_m").val(),
    vive_madre: $("#vive_m").val(),
    domicilio_madre: $("#domicilio_m").val(),
    ocupacion_madre: $("#ocupacion_m").val(),
    esposa_o: $("#esposa_o").val(),
    vive_esposa: $("#vive_e").val(),
    domicilio_esposa: $("#domicilio_e").val(),
    ocupacion_esposa: $("#ocupacion_e").val(),
    hijos_nombres_edades: $("#nombre_edad").val(),

      ///Escolaridad
    nivel_educacion: $("#nivel_educacion").val(),
    domicilio_primaria: $("#domicilio_primaria").val(),
    fecha_escolaridad_inicio: $("#fecha_escolaridad_inicio").val(),
    fecha_escolaridad_fin: $("#fecha_escolaridad_fin").val(),
    anios_primaria: $("#anios_primaria").val(),

    estudios_act: $("#estudios_act").val(),
    nombre_escuela_act: $("#nombre_escuela_act").val(),
    horaio_esc_inicio: $("#horaio_esc_inicio").val(),
    horaio_esc_fin: $("#horaio_esc_fin").val(),
    curso_carrera: $("#curso_carrera").val(),
    grado_c: $("#grado_c").val(),
    //conocimientos generales
    idiomas: $("#idiomas").val(),
    funciones: $("#funciones").val(),
    maquinas: $("#maquinas").val(),
    otros: $("#otros").val(),

    // Campos de Empleo Actual
    empresa: $("#empresa").val(),
    domicilio: $("#domicilio").val(),
    telefono: $("#telefono").val(),
    puesto_inicial: $("#puesto_inicial").val(),
    puesto_final: $("#puesto_final").val(),
    sueldo_inicial: $("#sueldo_inicial").val(),
    sueldo_final: $("#sueldo_final").val(),
    motivo: $("#motivo").val(),
    jefe: $("#jefe").val(),
    actividades: $("#actividades").val(),
    informes: $("input[name='informes']:checked").val(),

    // Campos de Empleos Anteriores
    empresa_ante: $("#empresa_ante").val(),
    domicilio_ante: $("#domicilio_ant").val(),
    telefono_ante: $("#telefono_ant").val(),
    puesto_inicial_ante: $("#puesto_inicial_ant").val(),
    puesto_final_ante: $("#puesto_final_ant").val(),
    sueldo_inicial_ante: $("#sueldo_inicial_ant").val(),
    sueldo_final_ante: $("#sueldo_final_ant").val(),
    motivo_ante: $("#motivo_ant").val(),
    jefe_ante: $("#jefe_ant").val(),
    actividades_ante: $("#actividades_ant").val(),

    // Campos de Referencias Personales
    nombre_ref1: $("#nombre_ref1").val(),
    domicilio_ref1: $("#domicilio_ref1").val(),
    telefono_ref1: $("#telefono_ref1").val(),
    ocupacion_ref1: $("#ocupacion_ref1").val(),

    nombre_ref2: $("#nombre_ref2").val(),
    domicilio_ref2: $("#domicilio_ref2").val(),
    telefono_ref2: $("#telefono_ref2").val(),
    ocupacion_ref2: $("#ocupacion_ref2").val(),

    nombre_ref3: $("#nombre_ref3").val(),
    domicilio_ref3: $("#domicilio_ref3").val(),
    telefono_ref3: $("#telefono_ref3").val(),
    ocupacion_ref3: $("#ocupacion_ref3").val(),

    //datos generales
    empleo_origen: $("input[name='empleo_origen']:checked").val(),
    otro_medio: $("#otro_medio").val(),
    afianzado: $("input[name='afianzado']:checked").val(),
    afianzadora: $("#afianzadora").val(),//*************** */
    seguro_vida: $("input[name='seguro_vida']:checked").val(),
    seguro_compania: $("#seguro_compania").val(), //******* */
    seguro_compania_precio: $("#seguro_compania_precio").val(),
    cambiar_residencia: $("input[name='cambiar_residencia']:checked").val(),
    cambiar_residencia_razon: $("#cambiar_residencia_razon").val(), //*** */
    familia_lab: $("input[name='familia_lab']:checked").val(),
    familia_lab_nombres: $("#familia_lab_nombres").val(), //*** */
    sindicato: $("input[name='sindicato']:checked").val(),
    sindicato_name: $("#sindicato_name").val(), //*** */
    viajar: $("input[name='viajar']:checked").val(),
    viajar_no: $("#viajar_no").val(), //** */
    trabajar_start: $("#trabajar_start").val(),

    // Nuevos campos del fieldset Datos Económicos
    otros_ingresos: $("input[name='otros_ingresos']:checked").val(),
    cuales_ingresos: $("#cuales_ingresos").val(),
    importe_mensual: $("#importe_mensual").val(),
    casa_propia: $("input[name='casa_propia']:checked").val(),
    auto_propio: $("input[name='auto_propio']:checked").val(),
    placas: $("#placas").val(),
    marca: $("#marca").val(),
    modelo: $("#modelo").val(),
    conyuge_trabaja: $("input[name='conyuge_trabaja']:checked").val(),
    donde_trabaja_conyuge: $("#donde_trabaja_conyuge").val(),
    importe_conyuge: $("#importe_conyuge").val(),
    paga_renta: $("input[name='paga_renta']:checked").val(),
    importe_renta: $("#importe_renta").val(), //*** */
    tienes_deudas: $("input[name='tienes_deudas']:checked").val(),
    concepto_deuda: $("#concepto_deuda").val(),
    importe_deuda: $("#importe_deuda").val(),
    abono_mensual: $("#abono_mensual").val(),

    // nuevos datos
    puesto: $('#puesto').val(),
    fechaIngreso: $('#fechaIngreso').val(),
    fechaNacimiento: $('#fechaNacimiento').val(),
    estadoCivil: $('#estadoCivil').val(),
    curp: $('#curp').val(),
    rfc: $('#rfc').val(),
    estadoPersona: $('#estadoPersona').val()

    };
    console.log(data);
    //deshabilitar el boton para que no haga mamadas
    $(this).prop("disabled", true);

    fetch(URL + "/src/api.php/guardarSolicitud", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    })
      .then((res) => res.json())
      .then((res) => {
        console.log(res);
        if (res.status === "ok") {
          alert("Formulario guardado con éxito");
        } else {
          alert("error", res.message);
        }
      })
      .catch((error) => {
        console.error("Eroor al enviar", error);
        alert("Ocurrio un error al enviar el formulario");
      });

    // setTimeout(()=>{
    //     location.replace('./main.html');
    // }, '4000')
  });
