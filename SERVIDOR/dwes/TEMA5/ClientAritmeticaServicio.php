<?php
try{
    $clienteSOAP = new SoapClient("http://localhost/dwes/TEMA5/aritmetica.php?wsdl");
    $resultado_suma = $clienteSOAP->sumar(2.7,3.5);
    $resultado_resta = $clienteSOAP->restar(2.7,3.5);

    echo "La suma de 2.7 y 3.5 es:". $resultado_suma . "<br/>";
    echo "La resta de 2.7 y 3.5 es:". $resultado_resta . "<br/>";

}catch(SoapFault $e){
    var_dump($e);
}