document.addEventListener("DOMContentLoaded", function () {

    let fechaNacimiento = document.querySelector('.fechaNacimiento');
    let estadoCivil;
    let claveElector;
    const btnColaboradorInfo = document.getElementById('btnColaboradorInfo');
    
    if(fechaNacimiento){
        fechaNacimiento.addEventListener('input', ()=>{
            let fechaNacimientoValue = fechaNacimiento.value
            localStorage.setItem('fechaNacimiento', fechaNacimientoValue);
            console.log('Guardado en localStorage:', storageNacimiento);
        });
    };


    btnColaboradorInfo.addEventListener('click', function(){
        const valorGuardado = localStorage.getItem('fechaNacimiento')
        // console.log('--->', valorGuardado);
    })
    
    // este código es solo informativo, es decir no afecta nada
});
