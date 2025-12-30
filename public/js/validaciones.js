document.addEventListener("DOMContentLoaded", function () {
    function validacionesInformacionColaborador(){
          const avisoModal = new bootstrap.Modal(
        document.getElementById("avisoRectificacion")
      );
      avisoModal.show();
    
      const form = document.getElementById("formDatosPersonales");
      const btnContinuar = document.getElementById("btnContinuar");
      const fechaNacimiento = document.getElementById("fechaNacimiento");
      const edadInput = document.getElementById("edad");
      const claveElectorInput = document.getElementById("claveElector");
      const telefonoInput = document.getElementById("telefono");
      const beneficiarioInput = document.getElementById("beneficiario");
      const btnConfirmar = document.getElementById("btnConfirmar");
    
      fechaNacimiento.addEventListener("change", function () {
        if (this.value) {
          const fechaNac = new Date(this.value);
          const hoy = new Date();
          let edad = hoy.getFullYear() - fechaNac.getFullYear();
          const mes = hoy.getMonth() - fechaNac.getMonth();
    
          if (mes < 0 || (mes === 0 && hoy.getDate() < fechaNac.getDate())) {
            edad--;
          }
    
          edadInput.value = edad;
          validateAge(edad);
        }
        validateForm();
      });
    
      function validateAge(age) {
        if (age < 15 || age > 100) {
          edadInput.classList.add("is-invalid");
          return false;
        } else {
          edadInput.classList.remove("is-invalid");
          return true;
        }
      }
    
      form.addEventListener("input", validateForm);
      form.addEventListener("change", validateForm);
    
      function validateForm() {
        let isValid = true;
    
        const camposRequeridos = [
          "nombre",
          "apellidoPat",
          "apellidoMat",
          "curp",
          "rfc",
          "claveElector",
          "telefono",
          "direccion",
          "beneficiario",
          "edad",
        ];
    
        camposRequeridos.forEach((id) => {
          const input = document.getElementById(id);
          if (!input.value.trim()) {
            markAsInvalid(input);
            isValid = false;
          } else {
            markAsValid(input);
    
            if (id === "curp" && input.value.length !== 18) {
              markAsInvalid(input);
              isValid = false;
            }
    
            if (
              id === "rfc" &&
              (input.value.length < 12 || input.value.length > 13)
            ) {
              markAsInvalid(input);
              isValid = false;
            }
    
            if (id === "telefono" && !/^\d{10}$/.test(input.value)) {
              markAsInvalid(input);
              isValid = false;
            }
    
            if (id === "claveElector" && !validarClaveElector(input.value)) {
              markAsInvalid(input);
              isValid = false;
            }
    
            if (id === "beneficiario" && !validarNombrePersona(input.value)) {
              markAsInvalid(input);
              isValid = false;
            }
    
            if (id === "edad") {
              if (!input.value || input.value === "") {
                markAsInvalid(input);
                isValid = false;
              } else {
                markAsValid(input);
              }
            }
          }
        });
    
        const selects = ["estadoCivil", "genero"];
        selects.forEach((id) => {
          const select = document.getElementById(id);
          if (!select.value) {
            markAsInvalid(select);
            isValid = false;
          } else {
            markAsValid(select);
          }
        });
    
        if (!fechaNacimiento.value) {
          markAsInvalid(fechaNacimiento);
          isValid = false;
        } else {
          markAsValid(fechaNacimiento);
          if (!validateAge(parseInt(edadInput.value))) {
            isValid = false;
          }
        }
    
        btnContinuar.disabled = !isValid;
    
        return isValid;
      }
    
      function markAsInvalid(element) {
        element.classList.add("is-invalid");
      }
    
      function markAsValid(element) {
        element.classList.remove("is-invalid");
      }
    
      document.getElementById("curp").addEventListener("blur", function () {
        const curp = this.value.toUpperCase();
        const regex = /^[A-Z]{4}\d{6}[HM][A-Z]{5}[A-Z0-9]\d$/;
    
        if (curp.length === 18 && !regex.test(curp)) {
          markAsInvalid(this);
          document.querySelector("#curp + .invalid-feedback").textContent =
            "El formato de la CURP no es válido";
          btnContinuar.disabled = true;
        }
      });
    
      document.getElementById("rfc").addEventListener("blur", function () {
        const rfc = this.value.toUpperCase();
        const regex = /^[A-Z&Ñ]{3,4}\d{6}[A-Z0-9]{2}[0-9A]$/;
    
        if ((rfc.length === 12 || rfc.length === 13) && !regex.test(rfc)) {
          markAsInvalid(this);
          document.querySelector("#rfc + .invalid-feedback").textContent =
            "El formato del RFC no es válido";
          btnContinuar.disabled = true;
        }
      });
    
      function validarClaveElector(clave) {
        const regex = /^[A-Z0-9]{18}$/;
        return regex.test(clave.toUpperCase());
      }
    
      claveElectorInput.addEventListener("blur", function () {
        if (!validarClaveElector(this.value)) {
          markAsInvalid(this);
          document.querySelector("#claveElector + .invalid-feedback").textContent =
            "La clave de elector debe tener 18 caracteres alfanuméricos";
          btnContinuar.disabled = true;
        }
      });
    
      telefonoInput.addEventListener("input", function () {
        this.value = this.value.replace(/\D/g, "");
        if (this.value.length > 10) {
          this.value = this.value.slice(0, 10);
        }
      });
    
      telefonoInput.addEventListener("blur", function () {
        if (!/^\d{10}$/.test(this.value)) {
          markAsInvalid(this);
          document.querySelector("#telefono + .invalid-feedback").textContent =
            "El teléfono debe tener exactamente 10 dígitos";
          btnContinuar.disabled = true;
        }
      });
    
      function validarNombrePersona(nombre) {
        const regex =
          /^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]{3,}(?:\s+[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]{3,})+$/;
        return regex.test(nombre);
      }
    
      beneficiarioInput.addEventListener("blur", function () {
        if (!validarNombrePersona(this.value)) {
          markAsInvalid(this);
          document.querySelector("#beneficiario + .invalid-feedback").textContent =
            "Ingrese un nombre completo válido (mínimo nombre y apellido)";
          btnContinuar.disabled = true;
        }
      });
    
      document.getElementById("curp").addEventListener("input", function () {
        this.value = this.value.toUpperCase();
      });
    
      document.getElementById("rfc").addEventListener("input", function () {
        this.value = this.value.toUpperCase();
      });
    
      btnContinuar.addEventListener("click", function (e) {
        if (!validateForm()) {
          e.preventDefault();
          const firstInvalid = form.querySelector(".is-invalid");
          if (firstInvalid) {
            firstInvalid.scrollIntoView({ behavior: "smooth", block: "center" });
            firstInvalid.focus();
          }
        }
      });
    
      btnConfirmar.addEventListener("click", function () {
        if (validateForm()) {
        let url = this.dataset.url;
        if (url) {
            window.location.href = url;
        } else {
            console.warn('No se encontró el atributo data-url en el botón.');
        }
            console.log('ok');
        }
      });

      
    }
    //hace confilcto
    function edadColaboradorInput(){
        const fechaNacimientoInput = document.getElementById("fechaNacimiento");
        const edadInput = document.getElementById("edad");

        if (fechaNacimientoInput && edadInput) {
            fechaNacimientoInput.addEventListener("change", function () {
                const fechaNacimiento = new Date(this.value);
                const edad = calcularEdad(fechaNacimiento);
                edadInput.value = edad;
            });
        }

        function calcularEdad(fechaNacimiento) {
            const hoy = new Date();
            let edad = hoy.getFullYear() - fechaNacimiento.getFullYear();
            const mes = hoy.getMonth() - fechaNacimiento.getMonth();
            const dia = hoy.getDate() - fechaNacimiento.getDate();

            if (mes < 0 || (mes === 0 && dia < 0)) {
                edad--;
            }

            return edad;
        }
    }

    validacionesInformacionColaborador();
    edadColaboradorInput();
    
});
