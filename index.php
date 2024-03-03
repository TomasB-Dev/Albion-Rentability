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
    <header>
        <h1>Albion Rentability</h1>
        
        <div id="relojUTC" class="reloj-utc"></div>     
        <p id="visitas">Esta página ha sido visitada <span id="counter">0</span> veces.</p>
        <button id="modoOscuroBtn" onclick="toggleModoOscuro()">
            <svg id="iconoModoOscuro" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                <path d="M12 11.807A9.002 9.002 0 0 1 10.049 2a9.942 9.942 0 0 0-5.12 2.735c-3.905 3.905-3.905 10.237 0 14.142 3.906 3.906 10.237 3.905 14.143 0a9.946 9.946 0 0 0 2.735-5.119A9.003 9.003 0 0 1 12 11.807z"></path>
            </svg>
        </button>
        
    </header>
    <main>
    <form id="albionForm">
        <label for="itemSelect">Selecciona un ítem:</label>
        <select id="itemSelect" name="item">
            <?php 
            include ("data/opciones.php");
            ?>

        </select>
        <label for="tierselct">Tier:</label>
        <select id="tierselct" name="tierselct">
            <option value="T4">T2</option>
            <option value="T4">T3</option>
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
            <option value="3">Notable</option>
            <option value="4">Sobresaliente</option>
            <option value="5">Obra maestra</option>
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
<main>
<footer>
    <div class="footer-content">
        <p>&copy; 2024 Albion Rentability. Todos los derechos reservados.</p>
        <ul class="footer-links">
            <li><a href="Pages/politicaprivacidad.html"target="_blank">Política de privacidad</a></li>
            <li><a href="Pages/terminos-servicio.html"target="_blank">Términos de servicio</a></li>
            <li><a href="https://github.com/TomasB-Dev/Albion-Rentability"target="_blank">Contacto</a></li>
        </ul>
    </div>
</footer>
    <script src="assets/js/Hora_UTC.js"></script>
    <script src="assets/js/Main.js"></script>
    <script src="assets/js/modoOscuro.js"></script>
    <script src="assets/js/ContadorDeVisitas.js"></script>
</body>
</html>