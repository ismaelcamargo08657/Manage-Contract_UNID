document.getElementById('sendEmail').addEventListener('click', function () {
    fetch('/enviar-correo', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({})
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert(data.message);
        } else {
            alert('Error al enviar el correo.');
        }
    })
    .catch(error => {
        console.error(error);
        alert('Error al procesar la solicitud.');
    });
});
