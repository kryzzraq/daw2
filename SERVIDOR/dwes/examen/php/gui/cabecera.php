<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>examen</title>
</head>
<body>
<?php
session_start();
$cerrarSesion = $_REQUEST['sesionCerrada']??false;
$us = $_REQUEST['frmNombre']??'';
$pass = $_REQUEST['frmContraseña']??'';?>
<h1>Laura Martin Vicente</h1>
<?php

    if(isset($_SESSION['usuario']) || validar_usuario($us,$pass)){
        echo "<h2>Bienvenido {$_SESSION['usuario']}, eres de tipo {$_SESSION['tipo']}</h2>";
    }else {
        echo "<h2>Bienvenido invitado, eres de tipo invitado</h2>";
    }
?>
