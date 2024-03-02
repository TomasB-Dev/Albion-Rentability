<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/styles.css" rel="stylesheet">   
    <title>Calculadora de Precios en Albion</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="icon" href="assets/img/logo.ico">
</head>
<body>
    <h1>Calculadora de Precios en Albion</h1>
    <button id="modoOscuroBtn" onclick="toggleModoOscuro()">
    <svg id="iconoModoOscuro" width="24" height="24" viewBox="0 0 24 24">
        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-15.47c-3.44 0-6.25 2.81-6.25 6.25s2.81 6.25 6.25 6.25 6.25-2.81 6.25-6.25-2.81-6.25-6.25-6.25z"/>
    </svg>
</button>
<div id="relojUTC" class="reloj-utc"></div>
<p>Esta página ha sido visitada <span id="counter">0</span> veces.</p>
    <form id="albionForm">
        <label for="itemSelect">Selecciona un ítem:</label>
        <select id="itemSelect" name="item">
            <?php 
            include ("data/opciones.php");
            ?>

        </select>
        <label for="tierselct">Tier:</label>
        <select id="tierselct" name="tierselct">
            <option value="T4">T4</option>
            <option value="T5">T5</option>
            <option value="T6">T6</option>
            <option value="T7">T7</option>
            <option value="T8">T8</option>
        </select>

        <label for="calidadSelect">Selecciona la calidad:</label>
        <select id="calidadSelect" name="calidad">
            <option value="1">Normal</option>
            <option value="2">Bueno</option>
            <option value="3">Sobresaliente</option>
            <option value="4">Obra maestra</option>
        </select>

        <label for="encantamientoSelect">Selecciona el encantamiento:</label>
        <select id="encantamientoSelect" name="encantamiento">
            <option value="0">Sin encantamiento</option>
            <option value="1">Encantamiento 1</option>
            <option value="2">Encantamiento 2</option>
            <option value="3">Encantamiento 3</option>
            <option value="4">Encantamiento 4</option>
        </select>

        <button type="button" onclick="realizarSolicitudAPI()">Consultar Precios</button>
    </form>

    <div id="resultados" class="resultados"></div>
    <script src="assets/js/Hora_UTC.js"></script>
    <script src="assets/js/Main.js"></script>
    <script src="assets/js/modoOscuro.js"></script>
    <script src="assets/js/ContadorDeVisitas.js"></script>
</body>
</html>