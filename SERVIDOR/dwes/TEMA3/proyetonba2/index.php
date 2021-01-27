<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
session_start();

if(!isset($_SESSION['posicion'])){
    $_SESSION['posicion'] = 0;
}
require_once ("bbdd/funciones.php");
require_once("formularios/conferencias.php");
require_once("formularios/equipos.php");
require_once("formularios/jugadores.php");
$_SESSION['posicion'] = 0;
?>
    <form action="index.php" method="post" name="frmSwitch">

<?php
        switch($_SESSION['posicion']){
            case 0:
                conferencias();
                break;
            case 1:
                echo "equipos";
                break;
            case 2:
                echo "jugadores";
                break;
            case 3:
                echo "tabla";
                break;
            default:
                session_destroy();
        }

?>
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

