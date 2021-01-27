<?php
require_once ("bbdd/bbddconfig.php");
require_once ("bbdd/bbdd.php");
require_once ("gui/cabecera.php");
if(isset($_SESSION['tipo'])){

    listarUsuarios();
} else{
    echo "<h2> No puedes acceder al contenido</h2>";
}
?>
<a href="ejercicio1.php"><button>Volver</button></a>