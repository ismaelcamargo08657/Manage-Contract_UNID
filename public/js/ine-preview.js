function mostrarPreview(inputFile, imgPreviewId) {
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const img = document.getElementById(imgPreviewId);
            img.src = e.target.result;
            img.classList.remove('d-none');
        }
        reader.readAsDataURL(file);
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const btn = document.getElementById('btn_previsualizar');

    if (!btn) return;

    btn.addEventListener('click', function() {
        const ineA = document.getElementById('ine_anverso');
        const ineB = document.getElementById('ine_reverso');

        if (!ineA.files.length || !ineB.files.length) {
            alert("Selecciona ambas imágenes antes de continuar.");
            return;
        }

        mostrarPreview(ineA, 'preview_anverso');
        mostrarPreview(ineB, 'preview_reverso');

        document.getElementById('btn_subir').classList.remove('d-none');
    });
});
