<?php
// PHP script to fetch items from the API

$api_url = "https://west.albion-online-data.com/api/v2/stats/items";
$api_response = file_get_contents($api_url);
$api_data = json_decode($api_response, true);

$options = "";

foreach ($api_data as $item) {
    $options .= "<option value='{$item['uniqueName']}'>{$item['uniqueName']}</option>";
}

echo $options;
?>
