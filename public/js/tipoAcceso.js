document.addEventListener("DOMContentLoaded", function () {

  fetch('/getStatusColaborador')
    .then((response) => response.json())
    .then((data) => {
      console.log(data);

      let estatus = data[0].Status;
      console.log(estatus);
      ocultarDocumento();

      switch (estatus) {
        case '0':
          flujoActivoDocumentos();
          console.log('Hola Mundo soy 0');
          break;
        case '3':
          flujoReingreso();
          console.log('Hola Mundo soy 3');
          break;
        case '1':
          flujoInactivo();
          console.log('Hola Mundo soy 1');
          break;
        case '2':
          flujoBaja();
          sendEmailFiniquito();
          console.log('Hola Mundo soy 2');
          break;
        default:
          console.log(estatus);
          break;
      }
    });

  function ocultarDocumento() {
    let ocultarClases = [
      '.firma',
      '.anexo',
      '.contrato',
      '.finiquito',
      '.empleo',
      '.medico',
      '#generarPdf',
      '#sendEmail'
    ];
    ocultarClases.forEach((clase) => {
      document.querySelectorAll(clase).forEach((el) => {
        el.style.display = 'none';
      });
    });

    // document.querySelectorAll('.not-found').forEach((el) => {
    //   el.style.display = 'block';
    // });
  }

  function flujoActivoDocumentos() {
    let mostrarClases = [
      '.firma',
      '.anexo',
      '.contrato',
      '.empleo',
      '.medico',
      '#generarPdf',
      '#sendEmail'
    ];
    mostrarClases.forEach((clase) => {
      document.querySelectorAll(clase).forEach((el) => {
        el.style.display = ''; //no se agrega nada porque ya la propiedad ya lo tiene boostrap por default
      });
    });

    // document.querySelectorAll('.not-found').forEach((el) => {
    //   el.style.display = 'none';
    // });
  }

  function flujoReingreso() {
    flujoActivoDocumentos();
  }

  function flujoBaja() {
    let mostrarClases = [
      '.firma',
      '.finiquito',
      '#generarPdf',
      '#sendEmail'
    ];
    mostrarClases.forEach((clase) => {
      document.querySelectorAll(clase).forEach((el) => {
        el.style.display = '';
      });
    });

    // document.querySelectorAll('.not-found').forEach((el) => {
    //   el.style.display = 'none';
    // });
  }

  function flujoInactivo() {
    alert('Estas perdido, redireccionar al inicio');
    document.querySelectorAll('.not-found').forEach((el) => {
      el.style.display = 'block';
    });
  }
});
