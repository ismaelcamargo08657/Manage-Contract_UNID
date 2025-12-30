$(document).ready(function () {
   const acceptTermins = $('#aceptTermn');
    const modalTerm = new bootstrap.Modal(document.getElementById('termsModal'));

    // Mostrar el modal cuando el checkbox sea marcado
    acceptTermins.on('change', function () {
        if (this.checked) {
            modalTerm.show();
        }
    });

    $('#comenzar').click(function () {
         const url = $(this).data('url');
      // fetch(URL + '/src/api.php/getColaborador/'+ localStorage.getItem('email'))
      // .then(response => response.json())
      // .then(data =>{
      //     console.log(data);
      //     let estatus = data.status;
      //     console.log(estatus)
      //     switch (estatus) {
      //         case '0': // Activo
      //             activo();
      //         break;
      //         case '3': //Reingreso
      //             activo();
      //             break;
      //         case '1': // Inactivo
      //             inactivo();
      //             // Todo ya está oculto por defecto
      //             break;
      //         case '2': // Baja
      //             // $(".finiquito").show();
      //             baja();
      //             break;
      //         default:
      //             console.log("La respuesta es:"+data);
      //             break;
      //     }
      // });

      activo();

      function activo(){
          if (acceptTermins.is(':checked')) {
            window.location.href = url;
            //   window.location.replace(URL + '/informacion_basica.html');
            //   alert('Vamos a la siguiente ruta /getInformation');
          } else {
              Swal.fire({
                  title: "Términos y Condiciones",
                  text: "Por favor marca el recuadro de términos y condiciones para poder continuar.",
                  icon: "warning"
              });
          }
      }
      // function baja(){
      //     if (acceptTermins.is(':checked')) {
      //         window.location.replace(URL + '/main.html');
      //     } else {
      //         Swal.fire({
      //             title: "Términos y Condiciones",
      //             text: "Por favor marca el recuadro de términos y condiciones para poder continuar.",
      //             icon: "warning"
      //         });
      //     }
      // }

      // function inactivo(){
      //     if (acceptTermins.is(':checked')) {
      //         window.location.replace(URL + '/index.html');
      //     } else {
      //         Swal.fire({
      //             title: "Términos y Condiciones",
      //             text: "Por favor marca el recuadro de términos y condiciones para poder continuar.",
      //             icon: "warning"
      //         });
      //     }
      // }
      });
});