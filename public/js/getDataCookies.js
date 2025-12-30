document.getElementById('btnColaboradorInfo').addEventListener('click', function (e) {
    e.preventDefault(); // evitamos el submit normal

    const form = document.getElementById('formDatosPersonales');
    const formData = new FormData(form);

    fetch('/guardar-datos-contrato', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
        },
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Error al guardar los datos');
        }
       
        window.location.href = '/main';
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Ocurrió un error al guardar la información. Intenta nuevamente.');
    });
});
