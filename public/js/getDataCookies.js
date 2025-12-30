document.getElementById('btnColaboradorInfo').addEventListener('click', function(e) {
    e.preventDefault(); // evita que el enlace actúe

    const form = document.getElementById('formDatosPersonales');
    const formData = new FormData(form);

    fetch("/setInformation", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
        },
        body: formData
    })
    .then(response => {
        if (response.redirected) {
            // Laravel ya devolvió el redirect a /main, ¡lo seguimos!
            window.location.href = '/main';
        } else {
            // Si no redirigió, revisamos la respuesta
            response.text().then(console.log);
        }
    })
    .catch(error => console.error("Error:", error));
});
