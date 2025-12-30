document.addEventListener("DOMContentLoaded", function () {

    let canvas = document.getElementById('signature-pad');
    let ctx = canvas.getContext('2d');

    let drawing = false;

    function resizeCanvas() {
        let ratio = Math.max(window.devicePixelRatio || 1, 1);
        canvas.width = canvas.offsetWidth * ratio;
        canvas.height = canvas.offsetHeight * ratio;
        canvas.getContext("2d").scale(ratio, ratio);
    }

    resizeCanvas();
    window.onresize = resizeCanvas;


   
    canvas.addEventListener('mousedown', () => drawing = true);
    canvas.addEventListener('mouseup', () => {
        drawing = false;
        ctx.beginPath();
    });
    canvas.addEventListener('mouseleave', () => drawing = false);

    canvas.addEventListener('mousemove', draw);


    canvas.addEventListener('touchstart', (e) => {
        drawing = true;
        draw(e);
    });

    canvas.addEventListener('touchend', () => {
        drawing = false;
        ctx.beginPath();
    });

    canvas.addEventListener('touchmove', draw);


    function draw(e) {
        if (!drawing) return;

        e.preventDefault();

        let rect = canvas.getBoundingClientRect();
        let x = (e.clientX || e.touches[0].clientX) - rect.left;
        let y = (e.clientY || e.touches[0].clientY) - rect.top;

        ctx.lineWidth = 2;
        ctx.lineCap = 'round';
        ctx.strokeStyle = "#000";

        ctx.lineTo(x, y);
        ctx.stroke();
        ctx.beginPath();
        ctx.moveTo(x, y);
    }


    document.getElementById('clear').addEventListener('click', function () {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.beginPath();
    });


    document.getElementById('firmForm').addEventListener('submit', function () {
        let inputFirma = document.getElementById('firma');
        inputFirma.value = canvas.toDataURL("image/png");
    });

});
