<?php

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://opendata.aemet.es/opendata/api/valores/climatologicos/inventarioestaciones/todasestaciones/?api_key=eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJyZWRraXJ2ZXNGV9Jm2u7rmsCe65wKzPTw5jtS38n2tVEGijItYWFiOC00OGV9Jm2u7rmsCe65wKzPTw5jtS38n2tVEGiDtbLgjH2m5c8emE66pjdExmgep47BAdKTrsso2Vu8Ke6GEY5W51wwPPMqKZJowXQCeagtNDhhNi05OWQRFi3dgfSVKpc1B9idTEuN3cBScszNHP9sJ7.8wM6RNUst8xHF-zhVqkw35LJp_07KEEfn899JC27hgs",

    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
    ),
));
//Evitamos el protocolo SSL para no instalar certificados propios
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

//Ejecutamos la petición al API
$response = curl_exec($curl);
$err = curl_error($curl);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
$obj=json_decode($response);
curl_setopt_array($curl, array(
        CURLOPT_URL => $obj->datos,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache"
        ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);
       if (!$err) {
        //Mostramos los datos finales
        $datos=json_decode(utf8_encode($response),true);
        foreach ($datos as $dato) {print_r($dato);print "<br>";}
    }
}
curl_close($curl);