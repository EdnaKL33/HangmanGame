<?php
    

    
    if (isset($_GET['letter'])) {
        // Obtenemos la letra seleccionada
        $letter = $_GET['letter'];    
        $game_id = $_GET['game_id']; 

        $url= "http://backend:5000/api/guess/$game_id";

        $data =  [
            'letter' => $letter,
            'game_id' =>  $game_id,
        ];

        // Codificar los datos en formato JSON
        $data_json = json_encode($data);

        // Inicializar cURL
        $ch = curl_init();

        // Configurar cURL para realizar una solicitud POST
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); // Cabecera de contenido JSON
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json); // Cuerpo de la solicitud
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Obtener la respuesta como string

        // Ejecutar la solicitud y obtener la respuesta
        $response = curl_exec($ch);

        if ($response !== false) {
            $data = json_decode($response, true);
            
            echo $response;
            
        } else{
            echo "ERROR AL COMUNICARSE CON LA API";
        } 
    }else{
        echo "Error";
    }
    
?>