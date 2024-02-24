<?php
// PHP script to fetch prices for the selected item, tier, and enchantment from the API

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedItem = $_POST['item'];
    $selectedTier = $_POST['tier'];
    $selectedEnchantment = $_POST['encantamiento'];

    // Validar que se ha seleccionado un ítem
    if (!empty($selectedItem) && is_numeric($selectedTier) && is_numeric($selectedEnchantment)) {
        // Construir el ID del ítem
        $itemID = strtoupper("{$selectedItem}_T{$selectedTier}_E{$selectedEnchantment}");

        $api_url = "https://west.albion-online-data.com/api/v2/stats/prices/{$itemID}.json";
        $api_response = file_get_contents($api_url);
        $api_data = json_decode($api_response, true);

        $prices = "<h2>Precios para {$itemID}</h2>";

        foreach ($api_data as $city) {
            $prices .= "<p><strong>{$city['city']}:</strong> Venta: {$city['sell_price_min']}, Compra: {$city['buy_price_max']}, Crafteo: {$city['sell_price_max']}</p>";
        }

        echo $prices;
    } else {
        echo "Por favor, selecciona un ítem, un nivel de tier y un nivel de encantamiento.";
    }
}
?>
