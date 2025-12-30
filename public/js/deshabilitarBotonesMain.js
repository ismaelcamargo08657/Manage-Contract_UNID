document.addEventListener("DOMContentLoaded", function(){

    let btnAceptTermsAnexoMain = document.querySelector('#btnAceptAnexo');
    let btnAceptTermnsContratoMain = document.querySelector('#btnAceptContract');
    let btnGenerateDocumentPdf = document.querySelector('#generarPdf');
    let btnSendDocumentEmail = document.querySelector('#sendEmail');
    // let btnSendDocumentEmail = document.querySelector('');

    function desabilitarBtnAnexosMain(){
      setTimeout(() => {
        if (localStorage.getItem("terminosCondicionesAnexo") === "true") {
          btnAceptTermsAnexoMain.classList.remove('disabled');
        }
      }, "2000");
      //cuando en local storage sea == true --> $("#cMedico").removeClass("disabled");
    }

    function desabilitarBtnContratoMain(){
      setTimeout(()=>{
        if(localStorage.getItem("terminosCondicionesContrato") === "true"){
          btnAceptTermnsContratoMain.classList.remove('disabled');
        }
      }, 2000);
    }

    // Deshabilitar el boton generar contrato
    //Una vez se escuche el evento del click tambien se va a bloquear a los 3 segundos
    function inhabilitarBtnGeneratePdf() {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        btnGenerateDocumentPdf.addEventListener('click', function (e) {
            e.preventDefault();
            window.open("/generar-pdf");
            setTimeout(() => {
                fetch("/update-contract", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({})
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        btnGenerateDocumentPdf.classList.add('disabled');
                        btnSendDocumentEmail.classList.remove('disabled');
                    } else {
                        alert('Error al actualizar: ' + (data.error || ''));
                    }
                })
                .catch(error => {
                    alert('Error AJAX: ' + error);
                });
            }, 2000);
        });
    }

    // Deshabilitar el boton envía por email
    //Una vez se escuche el evento del click tambien se va a bloquear a los 3 segundos
    function inhabilitarBtnSendEmail(){
        btnSendDocumentEmail.addEventListener('click', function(){
            setTimeout(()=>{
            btnSendDocumentEmail.classList.add('disabled');
        }, 1000);
        })
    }

    function test(){
      let btnAceptTermsAnexoDocument = document.querySelector('#aceptoTerminosAnexo');
        let formAceptarAnexos = document.querySelector('#formAceptarAnexos');

        if (btnAceptTermsAnexoDocument && formAceptarAnexos) {
            btnAceptTermsAnexoDocument.addEventListener('click', function (e) {
                e.preventDefault(); // Evita envío inmediato
                localStorage.setItem('terminosCondicionesContrato', 'true');
                formAceptarAnexos.submit(); // Enviar después de guardar en localStorage
            });
        }
    }

    desabilitarBtnAnexosMain();
    desabilitarBtnContratoMain();
    test();
    inhabilitarBtnGeneratePdf();
    inhabilitarBtnSendEmail();
});
