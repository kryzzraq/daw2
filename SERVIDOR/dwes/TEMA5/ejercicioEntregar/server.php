<?php
require_once("nusoap/nusoap.php");
$server = new soap_server();
$ns = "test";
$server->configureWSDL('nuSOAP_SERVER', $ns);
$server->wsdl->schemaTargetNamespace = $ns;

//hacer tantos register como funciones
$server->register('validar', array('us' => 'xsd:string','pw' => 'xsd:string'),
    array('return' => 'xsd:string'),$ns);

//Hay que hacer la función de validar usuario us->a clave->a
function validar($us,$pw){
    $conex= mysqli_connect("localhost","root","","servicios");
    if($conex){
        $sql="SELECT usuario FROM usuarios WHERE usuario ='$us' AND password ='$pw'";

        $resultado = mysqli_query($sql,$conex);

        $v = mysqli_fetch_assoc($resultado);
        return mysqli_errno($conex);
        return $v['usuario'];
        if($v == 1) {
            return 'a';
        }else{
            return 'v';
        }
    }
}

//función de echo: paso un token y compruebo si existe en la base de datos,
// paso un string y si ha validado el token lo devuelvo, si no devuelvo error.

//función date: imprimir la fecha del sistema actual (tras validar el token???)


function multiplicarNumeros($valor1, $valor2){
$res = $valor1 * $valor2;
return $res;
}

@$server->service(file_get_contents("php://input"));