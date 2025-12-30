$("#btnMedico")
  .on("click", function (e) {
    e.preventDefault();
    
    let formularioValido = true;
    let camposVacios = [];

    $("#FormMedico input:not([disabled]):not([type=hidden]), #FormMedico select:not([disabled]), #FormMedico textarea:not([disabled])").each(function () {
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
      return; // Ignora radios/checkbox no seleccionados
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
    // Hace scroll al primer campo con error
    $(".input-error").first()[0].scrollIntoView({ behavior: "smooth", block: "center" });
    return;
  }
 
    const data = {
    idColaborador: localStorage.idColaborador,
    fechaNacimiento: $('#fechaNacimiento').val(),
    estadoCivil: $('#estadoCivil').val(),
    peso: $('#peso').val(),
    fecha_ultimo_estudio_medico: $('#fecha_ultimo_estudio_medico').val(),
    altura: $('#altura').val(),
    estado_salud: $("input[name='estado_salud']:checked").val(),
    ultima_revision: $("input[name='ultima_revision']:checked").val(),
    ultima_revision_estudios_fecha: $('#ultima_revision_estudios_fecha').val(),
    motivo_estudios: $('#motivo_estudios').val(),
    compartir_resultados: $("input[name='compartir_resultados']:checked").val(),
    enfermedad_cronica: $("input[name='enfermedad_cronica']:checked").val(),
    especifique_enfermedad: $("#especifique_enfermedad").val(),
    dolores_musculares: $("input[name='dolores_musculares']:checked").val(),
    parte_cuerpo_dolores: $('#parte_cuerpo_dolores').val(),
    ultima_enfermedad: $('#ultima_enfermedad').val(),
    atencion_enfermedad: $('#atencion_enfermedad').val(),
    medicamentos_controlados: $("input[name='medicamentos_controlados']:checked").val(),
    nombre_medicamento: $('#nombre_medicamento').val(),
    tratamiento_medico: $("input[name='tratamiento_medico']:checked").val(),
    tipo_tratamiento: $("#tipo_tratamiento").val(),
    medicamento_antidepresivo: $("input[name='medicamento_antidepresivo']:checked").val(),
    especificar_antidepresivos: $('#especificar_antidepresivos').val(),
    operacion_ultimos_5: $("input[name='operacion_ultimos_5']:checked").val(),
    tipo_operacion: $('#tipo_operacion').val(),
    operacion_programada: $("input[name='operacion_programada']:checked").val(),
    especificar_operacion_programada: $('#especificar_operacion_programada').val(),

    higiene_bucal: $("input[name='higiene_bucal']:checked").val(),
    frecuencia_dentista: $('#frecuencia_dentista').val(),
    tratamiento_bucal: $("input[name='tratamiento_bucal']:checked").val(),
    especificar_tratamiento_bucal: $('#especificar_tratamiento_bucal').val(),

    embarazo: $("input[name='embarazo']:checked").val(),
    tiempo_gestacion: $('#tiempo_gestacion').val(),
    control_embarazo: $("input[name='control_embarazo']:checked").val(),
    frecuencia_consulta_embarazo: $('#frecuencia_consulta_embarazo').val(),

    discapacidad: $("input[name='discapacidad']:checked").val(),
    especificar_discapacidad: $('#especificar_discapacidad').val(),
    enfermedades_familiares: $("input[name='enfermedades_familiares']:checked").val(), 
    especificar_enfermedad_familiar: $('#especificar_enfermedad_familiar').val(),
    parentezco_familiar: $('#parentezco_familiar').val(),
    familiar_viviendo: $("input[name='familiar_viviendo']:checked").val(),
    dependencia_economica: $("input[name='dependencia_economica']:checked").val(),
    gastos_medicos_familiar: $('#gastos_medicos_familiar').val(),
    tratamiento_vigente: $("input[name='tratamiento_vigente']:checked").val(),
    especifique_tratamiento: $('#especifique_tratamiento').val(),

    conoce_estupefacientes: $("input[name='conoce_estupefacientes']:checked").val(),
    tipo_estupefacientes: $('#tipo_estupefacientes').val(),
    consumo_estupefacientes: $("input[name='consumo_estupefacientes']:checked").val(),
    tipo_consumo: $('#tipo_consumo').val(),
    test_antidoping: $("input[name='test_antidoping']:checked").val(),
    familia_consumo_estupefacientes: $("input[name='familia_consumo_estupefacientes']:checked").val(),
    especificar_familia_consumo: $("#especificar_familia_consumo").val(),
    consume_alcohol: $("input[name='consume_alcohol']:checked").val(),
    frecuencia_alcohol: $('#frecuencia_alcohol').val(),
    fuma: $("input[name='fuma']:checked").val(),
    cuantas_veces_fuma: $('#cuantas_veces_fuma').val(),
    adiccion: $("input[name='adiccion']:checked").val(),
    tipo_adiccion: $('#tipo_adiccion').val(),
    anexo: $("input[name='anexo']:checked").val(),
    lugar_apoyo: $('#lugar_apoyo').val(),
    vacuna_covid: $("input[name='vacuna_covid']:checked").val(),
    n_vacuna_covid: $("input[name='n_vacuna_covid']:checked").val(),
    certificado_covid: $("input[name='certificado_covid']:checked").val(),
    contacto_covid: $("input[name='contacto_covid']:checked").val(),
    prueba_covid: $("input[name='prueba_covid']:checked").val(),
    fallecimiento_covid: $("input[name='fallecimiento_covid']:checked").val(),
    parentesco_covid: $('#parentesco_covid').val(),
    fiebre: $("input[name='fiebre']:checked").val(),
    tos: $("input[name='tos']:checked").val(),
    cansancio: $("input[name='cansancio']:checked").val(),
    garganta: $("input[name='garganta']:checked").val(),
    cabeza: $("input[name='cabeza']:checked").val(),
    diarreicos: $("input[name='diarreicos']:checked").val(),
    aire: $("input[name='aire']:checked").val(),
    gusto: $("input[name='gusto']:checked").val()
    };
    console.log(data);
    //deshabilitar el boton para que no haga mamadas
    $(this).prop("disabled", true);

    fetch(URL + "/src/api.php/CuestionarioMedico", {
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
        console.error("Error al enviar", error);
        alert("Ocurrio un error al enviar el formulario");
      });
  });
