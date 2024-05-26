<?php
// api_handler.php

if (isset($_GET['lista']) && isset($_GET['sec'])) {
    $lista = $_GET['lista'];
    $sec = $_GET['sec'];
    $apiEndpoint = 'https://jesus.dipthroat.com/xx1.php';

    $url = $apiEndpoint . '?lista=' . urlencode($lista) . '&sec=' . urlencode($sec);

    $response = file_get_contents($url);
    echo $response;
} else {
    echo "Invalid request";
}
?>
