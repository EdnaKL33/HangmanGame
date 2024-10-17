<?php
$url = 'http://backend:5000/api/new_game';

// Realizar la solicitud GET
// Codificar los datos en formato JSON


// Inicializar cURL
$ch = curl_init();

// Configurar cURL para realizar una solicitud POST
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); // Cabecera de contenido JSON
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Obtener la respuesta como string

// Ejecutar la solicitud y obtener la respuesta
$response = curl_exec($ch);
if ($response !== false) {
    // Decodificar la respuesta JSON
    $data = json_decode($response, true);

    echo $response;
} else {
    echo "Error: No se pudo obtener la respuesta de la API";
}
?>