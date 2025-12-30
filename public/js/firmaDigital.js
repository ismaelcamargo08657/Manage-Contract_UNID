let pictograma;

var canvas, ctx, flag = false,
    prevX = 0,
    currX = 0,
    prevY = 0,
    currY = 0,
    dot_flag = false;

var x = "black",
    y = 2;

function init() {
    canvas = document.getElementById('canvasFirma');
    ctx = canvas.getContext("2d");
    w = canvas.width;
    h = canvas.height;

    // Eventos de ratón (PC)
    canvas.addEventListener("mousemove", function (e) { findxy('move', e) }, false);
    canvas.addEventListener("mousedown", function (e) { findxy('down', e) }, false);
    canvas.addEventListener("mouseup", function (e) { findxy('up', e) }, false);
    canvas.addEventListener("mouseout", function (e) { findxy('out', e) }, false);

    // Eventos táctiles (Móvil)
    canvas.addEventListener("touchstart", function (e) { findxy('down', e, true) }, false);
    canvas.addEventListener("touchmove", function (e) { findxy('move', e, true) }, false);
    canvas.addEventListener("touchend", function (e) { findxy('up', e, true) }, false);
    canvas.addEventListener("touchcancel", function (e) { findxy('out', e, true) }, false);
}

function draw() {
    ctx.beginPath();
    ctx.moveTo(prevX, prevY);
    ctx.lineTo(currX, currY);
    ctx.strokeStyle = x;
    ctx.lineWidth = y;
    ctx.lineCap = "round";
    ctx.stroke();
    ctx.closePath();
}


function erase() {
    if (confirm("¿Deseas borrar la firma actual?")) {
        ctx.clearRect(0, 0, w, h);
        document.getElementById("canvasimg").style.display = "none";
        pictograma = null;  // Limpiar la variable
        localStorage.removeItem('pictograma');  // También en LocalStorage
    }
}


function save() {
    const rotatedCanvas = document.createElement('canvas');
    const rotatedCtx = rotatedCanvas.getContext('2d');

    // Intercambiamos ancho y alto para rotación 90°
    rotatedCanvas.width = canvas.height;
    rotatedCanvas.height = canvas.width;

    // Rotamos el canvas auxiliar
    rotatedCtx.translate(rotatedCanvas.width / 2, rotatedCanvas.height / 2);
    rotatedCtx.rotate(Math.PI / 2); // Rotación de 90 grados
    rotatedCtx.drawImage(canvas, -canvas.width / 2, -canvas.height / 2);

    const dataURL = rotatedCanvas.toDataURL();

    pictograma = dataURL;
    document.getElementById('contenedorFirma').style.display = "block";
    document.getElementById('firmadiv').style.display = "none";
    document.getElementById("canvasFirma").style.border = "2px solid";
    // let dataURL = canvas.toDataURL();
    document.getElementById("firmaautografa").src = dataURL;
    pictograma = dataURL;
    document.getElementById("firmaautografa").style.display = "flex";
    console.log('esta pasando algo?')
}

function findxy(res, e, isTouch = false) {
    e.preventDefault(); // Evita el scroll en móviles cuando se firma

    let rect = canvas.getBoundingClientRect();
    // let clientX = isTouch ? e.touches[0].clientX : e.clientX;
    // let clientY = isTouch ? e.touches[0].clientY : e.clientY;
    let clientX = isTouch && e.touches.length ? e.touches[0].clientX : e.clientX;
    let clientY = isTouch && e.touches.length ? e.touches[0].clientY : e.clientY;


    if (res == 'down') {
        prevX = currX;
        prevY = currY;
        currX = clientX - rect.left;
        currY = clientY - rect.top;

        flag = true;
        dot_flag = true;
        if (dot_flag) {
            ctx.beginPath();
            ctx.fillStyle = x;
            ctx.fillRect(currX, currY, 2, 2);
            ctx.closePath();
            dot_flag = false;
        }
    }
    if (res == 'up' || res == "out") {
        flag = false;
    }
    if (res == 'move') {
        if (flag) {
            prevX = currX;
            prevY = currY;
            currX = clientX - rect.left;
            currY = clientY - rect.top;
            draw();
        }
    }
}

function firmaDigital() {
    localStorage.setItem('pictograma', pictograma);
    saveFirmServer();
}

//ver si es posible meterlo en otro archivo con el evento de otro boton
function saveFirmServer() {
    let firmaBase64 = localStorage.getItem('pictograma');

    if (!firmaBase64 ) {
        alert('No se obtuvo la firma o el correo');
        return;
    }

    let data = {
        firma: firmaBase64,
    };

    fetch('/guardarFirma', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Firma guardada correctamente');
            localStorage.setItem('terminosCondicionesAnexo', 'true'); //********************************************************** */
            setTimeout(()=>{
                window.location.replace('./main');
            }, "1000");
        } else {
            alert('Error al guardar firma, inténtalo de nuevo');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error de red al guardar la firma. Intenta nuevamente, asegurate de tener buena conexión a internet');
    });

}

window.onload = init;


