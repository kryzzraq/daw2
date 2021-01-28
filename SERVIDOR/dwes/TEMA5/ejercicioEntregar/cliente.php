<?php

try {
    $clienteSOAP = new SoapClient("http://localhost/dwes/TEMA5/ejercicioEntregar/server.php?wsdl");

    $resultado = $clienteSOAP->validar('a','a');
    echo $resultado;


} catch (SoapFault $e) {
    var_dump($e);
}