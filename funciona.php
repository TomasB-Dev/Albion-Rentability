<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Elaboración en Albion</title>
</head>
<body>
    <h1>Calculadora de Elaboración en Albion</h1>

    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Endpoint de la API de Albion Online para precios actuales (JSON)
    $api_url = 'https://west.albion-online-data.com/api/v2/stats/prices/';

    // Reemplaza 'T4_BAG' con el ítem que deseas elaborar
    $item_a_elaborar = 'T4_BAG';

    // Reemplaza 'Caerleon,Bridgewatch' con las ciudades en las que deseas verificar los precios
    $ciudades = 'Caerleon,Bridgewatch';

    // Nivel de calidad para el ítem (por ejemplo, 2)
    $calidad = 2;

    // Construye la URL de la solicitud API
    $url_solicitud = "{$api_url}{$item_a_elaborar}.json?locations={$ciudades}&qualities={$calidad}";

    try {
        // Obtén datos de la API
        $respuesta_api = file_get_contents($url_solicitud);

        if ($respuesta_api !== false) {
            // Decodifica la respuesta JSON
            $datos = json_decode($respuesta_api, true);

            // Verifica si los datos contienen información válida
            if (!empty($datos)) {
                // Muestra información para cada ciudad
                foreach ($datos as $ciudad) {
                    echo "<p>Ciudad: {$ciudad['city']}</p>";
                    echo "<p>Precio mínimo de venta: {$ciudad['sell_price_min']} Plata</p>";
                    echo "<p>Precio máximo de venta: {$ciudad['sell_price_max']} Plata</p>";
                    echo "<p>Precio mínimo de compra: {$ciudad['buy_price_min']} Plata</p>";
                    echo "<p>Precio máximo de compra: {$ciudad['buy_price_max']} Plata</p>";
                    echo "<hr>";
                }
            } else {
                echo "<p>No se encontraron datos válidos en la respuesta de la API.</p>";
            }
        } else {
            echo "<p>Error al recuperar datos de la API. La respuesta está vacía.</p>";
        }
    } catch (Exception $e) {
        echo "<p>Error al procesar la solicitud API: {$e->getMessage()}</p>";
    }
    ?>
</body>
</html>



