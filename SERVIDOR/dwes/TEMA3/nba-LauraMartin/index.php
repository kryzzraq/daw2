<?php

include_once("bbdd/conexion.php");
include_once("funciones/func.php");
include_once("funciones/guardarDatos.php");

 //session_destroy();
if(!isset($_SESSION['pagina'])){
    $_SESSION['pagina'] = 0;
}

?>
<form name="fmrNba" method="post" action="index.php">
    <?php
        switch ($_SESSION['pagina']){
            case 0:
                conferencias();
                break;
            case 1:
                equipos();
                break;
            case 2:
                jugadores();
                break;
            case 3:
                mostrarTabla();
                cerrarBBDD($_SESSION['cnn']);
                break;
            default:
                echo "Error no identificado.";
                break;
        }
    ?>
    <input type="submit" value="Enviar">
</form>