<?php
require_once("clases/Aplicacion.php");
$app = new Aplicacion();
$app ->runModificar($_REQUEST);

echo "<a href='index.php'><button>Volver</button></a>";