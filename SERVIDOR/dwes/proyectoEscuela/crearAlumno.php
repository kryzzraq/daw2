<?php

require_once("gui/cabecera.php");
require_once ("gui/menu.html");
if(isset($_SESSION['usuario'])){
    echo "Crear Alumno";
}else{
    require_once ("gui/notallowed.html");
}
require_once ("gui/footer.html");