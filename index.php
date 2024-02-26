<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>Calculadora de Elaboración en Albion</title>
</head>
<body>
    <h1>Calculadora de Elaboración en Albion</h1>

    <form id="albionForm">
        <label for="itemSelect">Selecciona un ítem:</label>
        <select id="itemSelect" name="item">
            <?php 
            include ("opciones.php");
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

    <script>
        function realizarSolicitudAPI() {
            var itemSeleccionado = document.getElementById('itemSelect').value;
            var calidadSeleccionada = document.getElementById('calidadSelect').value;
            var encantamientoSeleccionado = document.getElementById('encantamientoSelect').value;
            var tier = document.getElementById('tierselct').value;

            // Ajuste para incluir el encantamiento en la URL de solicitud
            var api_url = 'https://west.albion-online-data.com/api/v2/stats/prices/';
            var url_solicitud = `${api_url}${tier}${itemSeleccionado}@${encantamientoSeleccionado}.json?qualities=${calidadSeleccionada}`;

            fetch(url_solicitud)
                .then(response => response.json())
                .then(data => mostrarResultados(data, calidadSeleccionada))
                .catch(error => console.error('Error al realizar la solicitud API:', error));
        }

        function mostrarResultados(data, calidad) {
            var resultadosDiv = document.getElementById('resultados');
            resultadosDiv.innerHTML = '';

            data.forEach(function(ciudad) {
                var mercadoDiv = document.createElement('div');
                mercadoDiv.className = 'mercado';

                var nombreMercadoP = document.createElement('p');
                nombreMercadoP.className = 'nombre-mercado';
                nombreMercadoP.textContent = ciudad.city;

                var precioMinVentaP = document.createElement('p');
                var precioMinVentaP = document.createElement('p');
                precioMinVentaP.textContent = 'Precio mínimo de venta: ' + formatMoney(ciudad.sell_price_min) + ' Plata';

                var precioMaxVentaP = document.createElement('p');
                precioMaxVentaP.textContent = 'Precio máximo de venta: ' + formatMoney(ciudad.sell_price_max) + ' Plata';

                var precioMinCompraP = document.createElement('p');
                precioMinCompraP.textContent = 'Precio mínimo de compra: ' + formatMoney(ciudad.buy_price_min) + ' Plata';

                var precioMaxCompraP = document.createElement('p');
                precioMaxCompraP.textContent = 'Precio máximo de compra: ' + formatMoney(ciudad.buy_price_max) + ' Plata';

                function formatMoney(amount) {
                    return amount.toLocaleString(undefined, { style: 'currency', currency: 'USD', minimumFractionDigits: 0, maximumFractionDigits: 0 });
                }
                mercadoDiv.appendChild(nombreMercadoP);
                mercadoDiv.appendChild(precioMinVentaP);
                mercadoDiv.appendChild(precioMaxVentaP);
                mercadoDiv.appendChild(precioMinCompraP);
                mercadoDiv.appendChild(precioMaxCompraP);

                resultadosDiv.appendChild(mercadoDiv);
            });
        }
    </script>
</body>
</html>