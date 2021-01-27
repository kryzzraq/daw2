<?php
#constantes de la base de datos
const HOST = "localhost";
const US = "root";
const PW = "";
const BBDD = "nba";

#conexión a la base de datos
$_SESSION['conexion'] = mysqli_connect(HOST,US,PW,BBDD);


?>