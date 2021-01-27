<?php 
    //si la sesión no está iniciada, la inicio
    if(session_status() === 1){
          session_start();
     }
    //si no existe
     if(isset($_REQUEST['nombre'])){
          $contadorAlumnos = $_REQUEST['contadorAlumnos'];
          $_SESSION['nombre'.$contadorAlumnos] = $_REQUEST['nombre'];
          $_SESSION['apellido'.$contadorAlumnos] = $_REQUEST['apellido'];
          $_SESSION['tlfn'.$contadorAlumnos] = $_REQUEST['tlfn'];
          $_SESSION['email'.$contadorAlumnos] = $_REQUEST['email'];
          $_SESSION['curso'.$contadorAlumnos] = $_REQUEST['curso'];
          $contadorAlumnos++;
     }
     if(isset($_REQUEST['alumnos'])){
          $contadorAlumnos = $_REQUEST['contadorAlumnos'];
          $_SESSION['seleccionado'] = $_REQUEST['alumnos'];
     }
     require_once("index.php");
?>