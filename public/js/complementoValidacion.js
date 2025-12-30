document.addEventListener("DOMContentLoaded", function () {
    function edadColaboradorFecha(){
        // const edad
        let edad = parseInt(document.getElementById("edad").value);
        console.log('edad: ' + edad);
        const yearActual = new Date().getFullYear();
        const yearNacimiento = yearActual - edad;
        const fechaNacimiento = `${yearNacimiento}-01-01`;
        document.getElementById("fechaNacimiento").value = fechaNacimiento;
    }

    edadColaboradorFecha();
});