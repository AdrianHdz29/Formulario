document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("form");
    const radios = document.querySelectorAll('input[name="queryType"]');
    const errorMessage = document.getElementById("radio-error");
  
    form.addEventListener("submit", function (event) {
      let seleccionado = false;
  
      // Revisar si algún radio está seleccionado
      radios.forEach(radio => {
        if (radio.checked) {
          seleccionado = true;
        }
      });
  
      if (!seleccionado) {
        event.preventDefault(); // Evita el envío del formulario
        errorMessage.style.display = "block"; // Muestra el mensaje de error
      } else {
        errorMessage.style.display = "none"; // Oculta el mensaje si hay selección
      }
    });
  
    // Ocultar el mensaje de error cuando el usuario seleccione un radio
    radios.forEach(radio => {
      radio.addEventListener("change", function () {
        errorMessage.style.display = "none";
      });
    });
  });

(() => {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.from(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

(() => {
    'use strict';

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation');

    // Alerta de éxito
    const successAlert = document.getElementById('alert-success');  // Corregido el ID para que coincida

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            } else {
                event.preventDefault(); // Previene el comportamiento de recarga de página
                successAlert.classList.remove('d-none'); // Muestra la alerta
                setTimeout(() => {
                    successAlert.classList.add('d-none'); // Oculta la alerta después de 5 segundos
                }, 5000);

                // Limpiar el formulario y resetear validaciones
                form.reset(); // Limpia el formulario después de enviarlo
                form.classList.remove('was-validated'); // Elimina las validaciones
            }

            form.classList.add('was-validated');
        }, false);
    });
})();