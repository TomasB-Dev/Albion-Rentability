function actualizarReloj() {
    var ahora = new Date();
    var cadenaUTC = ahora.toISOString().slice(0, 19).replace("T", " ");
    document.getElementById("relojUTC").textContent = "Hora UTC: " + cadenaUTC;
}

// Actualizar el reloj cada segundo
setInterval(actualizarReloj, 1000);

// Ejecutar la función una vez para establecer la hora inicial
actualizarReloj();