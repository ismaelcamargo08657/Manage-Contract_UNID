document.addEventListener("DOMContentLoaded", function(){
    const validarIneBtn = document.getElementById('Verificacion');
    let validandoFotosBtn = document.getElementById('validarIne');
    const form = document.getElementById('container-ine-file');

    // console.log(form)

    ocultarSeccionFirma();
    btnFlujoSubirPhotos();
    btnFlujoFirmaIne();

    function ocultarSeccionFirma(){
         let ocultarCamposIne = [
        '#validarIne',
        '#validandoFotos',
        '#noAprovadosFotos',
        '#contenedorFirma'
        ];

        ocultarCamposIne.forEach((campo)=>{
            document.querySelectorAll(campo).forEach((c)=>{
                c.style.display = 'none'
            })
        });
    }

    function btnFlujoSubirPhotos(){
        validarIneBtn.addEventListener('click', function(e){
            // e.preventDefault();
            // validandoFotosBtn.style.display = 'block'
            // validarIneBtn.classList.add('disabled');
            // let btnVerificarPhotos = document.querySelector('#Verificacion');
            let inputAnverso = document.querySelector('#ineFrontal').files[0];
            let inputReverso = document.querySelector('#ineTrasera').files[0];
            let contenerdorFotosIne = document.querySelector('#container-ine');
            let btnVerificacionFotos = document.getElementById('Verificacion');
            let contenedorFirmaIne = document.getElementById('firmadiv');

            // btnVerificarPhotos.disabled = true;

            if(!inputAnverso || !inputReverso){
                alert('Es necesario subir ambas imagenes');
                return;
            }

            if(inputAnverso.size == 0 || inputReverso == 0){
                alert('Porfavor sube la imagen que te hace falta');
                return;
            }

            const validateFormats = ['image/png', 'image/jpeg', 'image/jpg'];
            if (!validateFormats.includes(inputAnverso.type) || !validateFormats.includes(inputReverso.type)) {
                alert('El formato no es el permitido porfavor suba PNG o JPG');
                return;
            }

            const formData = new FormData(form);
            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers:{
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                }
            })
            .then(response => response.json())
            .then(data =>{
                // console.log('respuesta del servidor', data);
                if(data.success == true && data.message == "Fotos guardadas correctamente"){
                    btnVerificacionFotos.style.display = 'none';
                    validandoFotosBtn.style.display = 'block';
                    alert('Fotos guardadas correctamente');
                    // contenerdorFotosIne.style.display = 'none';
                    // contenedorFirmaIne.style.display = 'block';
                }
            })
            .catch(error =>{
                console.error('error en la peticion', error)
            });
        });
    }

    function btnFlujoFirmaIne(){
        let btnVerificarPhotos = document.querySelector('#validarIne');

        btnVerificarPhotos.addEventListener('click', function(){
            let modalCargandoFotos = document.querySelector('#modalCargaFotos');
            const modal = new bootstrap.Modal(modalCargandoFotos);
            modal.show();
            setTimeout(()=>{
                window.location.reload();
            }, 8000)
        })
    }
});
