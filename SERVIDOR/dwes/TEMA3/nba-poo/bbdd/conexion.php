<?php
#constantes de la base de datos
const HOST = "localhost";
const US = "root";
const PW = "";
const BBDD = "nba";

#Inicio la sesión
session_start();

#Creo la conexión a la bbdd
$_SESSION['cnn'] = new mysqli(HOST,US,PW,BBDD);