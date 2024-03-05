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

/* This block of code is determining the URL for the API request based on the selected item, quality,
enchantment, and tier. Here's a breakdown of the logic: */
    const Materiales_NoS = ["_WOOD", "_ROCK", "_ORE", "_HID","_FIBER"];
    if (encantamientoSeleccionado == 0 && Materiales_NoS.includes(itemSeleccionado)){
        var url_solicitud = `${api_url}${tier}${itemSeleccionado}`;
    
    }
    else if(encantamientoSeleccionado != 0 && Materiales_NoS.includes(itemSeleccionado)){
        
        var url_solicitud = `${api_url}${tier}${itemSeleccionado}_LEVEL${encantamientoSeleccionado}@${encantamientoSeleccionado}`;     
    }
    else if(encantamientoSeleccionado == 0){
        
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

        var nombreMercadoP = document.createElement('h4');
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