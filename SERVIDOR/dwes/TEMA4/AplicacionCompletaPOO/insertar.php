<?php
require_once("clases/Aplicacion.php");
$app = new Aplicacion();
$app ->runInsertar($_REQUEST);

echo "<a href='index.php'><button>Volver</button></a>";
