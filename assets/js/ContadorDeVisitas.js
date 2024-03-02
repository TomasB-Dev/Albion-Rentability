document.addEventListener("DOMContentLoaded", function () {
    // Ruta al archivo contador.php
    let contadorScript = 'assets/PHP_FUNCTION/contador.php';

    // Hacer una solicitud al servidor para obtener el contador actual
    fetch(contadorScript)
        .then(response => response.text())
        .then(data => {
            // Parsear el número y darle formato con puntos para separar los miles
            let formattedCounter = parseInt(data).toLocaleString();
            
            // Actualizar el contenido del elemento con el contador formateado
            document.getElementById("counter").innerText = formattedCounter;
        })
        .catch(error => console.error('Error al obtener el contador:', error));
});