document.addEventListener("DOMContentLoaded", function () {
    // Ruta al archivo contador.php
    let contadorScript = 'assets/PHP_FUNCTION/contador.php';

    // Hacer una solicitud al servidor para obtener el contador actual
    fetch(contadorScript)
        .then(response => response.text())
        .then(data => {
            document.getElementById("counter").innerText = data;
        })
        .catch(error => console.error('Error al obtener el contador:', error));
});