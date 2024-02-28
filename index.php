<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">   
    <title>Calculadora de Precios en Albion</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
    <h1>Calculadora de Precios en Albion</h1>
    <button id="modoOscuroBtn" onclick="toggleModoOscuro()">
    <svg id="iconoModoOscuro" width="24" height="24" viewBox="0 0 24 24">
        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-15.47c-3.44 0-6.25 2.81-6.25 6.25s2.81 6.25 6.25 6.25 6.25-2.81 6.25-6.25-2.81-6.25-6.25-6.25z"/>
    </svg>
</button>

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
        /**
        * The function `realizarSolicitudAPI` fetches data from an API based on selected item, quality,
        * enchantment, and tier, and then displays the results.
        */
        function realizarSolicitudAPI() {
            var itemSeleccionado = document.getElementById('itemSelect').value;
            var calidadSeleccionada = document.getElementById('calidadSelect').value;
            var encantamientoSeleccionado = document.getElementById('encantamientoSelect').value;
            var tier = document.getElementById('tierselct').value;

            // Ajuste para incluir el encantamiento en la URL de solicitud
            var api_url = 'https://west.albion-online-data.com/api/v2/stats/prices/';
            if (encantamientoSeleccionado == 0){
                var url_solicitud = `${api_url}${tier}${itemSeleccionado}.json?qualities=${calidadSeleccionada}`;
                
            }
            else{
                var url_solicitud = `${api_url}${tier}${itemSeleccionado}@${encantamientoSeleccionado}.json?qualities=${calidadSeleccionada}`;
            }

            /* This code snippet is making an asynchronous HTTP request using the `fetch` API to the
            URL specified in `url_solicitud`. Here's a breakdown of what each part does: */
            fetch(url_solicitud)
                .then(response => response.json())
                .then(data => {
                    mostrarResultados(data, calidadSeleccionada);
                    dibujarGrafico(data);
                })
                .catch(error => console.error('Error al realizar la solicitud API:', error));
            
        }

        /**
         * The function "mostrarResultados" creates HTML elements to display market data for cities,
         * including prices for buying and selling items in a game.
         * 
         * @return The `mostrarResultados` function is creating HTML elements to display market data
         * for each city in the provided `data` array. The function formats the prices using the
         * `formatMoney` function before displaying them. The `formatMoney` function formats the amount
         * as currency in USD without decimal fractions.
         */
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
        function dibujarGrafico(data) {
    var chartData = [['Ciudad', 'Precio Mínimo de Venta', 'Precio Máximo de Venta']];

    data.forEach(function(mercado) {
        var row = [mercado.city, mercado.sell_price_min, mercado.sell_price_max];
        chartData.push(row);
    });

    if (chartData.length > 1) {
        google.charts.load('current', {'packages':['corechart']});

        google.charts.setOnLoadCallback(function() {
            var chartDiv = document.createElement('div');
            chartDiv.id = 'chart_div';
            document.getElementById('resultados').appendChild(chartDiv);

            var chartDataObject = google.visualization.arrayToDataTable(chartData);

            var options = {
                title: 'Precios Mínimos y Máximos de Venta por Ciudad',
                chartArea: {width: '50%'},
                hAxis: {title: 'Ciudad', minValue: 0},
                vAxis: {title: 'Precio (Plata)'}
            };

            var chart = new google.visualization.ColumnChart(chartDiv);
            chart.draw(chartDataObject, options);
        });
    }
}

        
    </script>
    <script src="modoOscuro.js"></script>
</body>
</html>