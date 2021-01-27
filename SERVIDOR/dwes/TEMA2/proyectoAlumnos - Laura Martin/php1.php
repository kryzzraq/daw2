<?php
    //si la sesión no está iniciada, la inicio
    if(session_status() === 1){
          session_start();
     }
    //si no existe
     if(isset($_REQUEST['nombre'])){
          $contadorAlumnos = $_REQUEST['contadorAlumnos'];
          $_SESSION['alumno'.$contadorAlumnos]['nombre'] = $_REQUEST['nombre'];
          $_SESSION['alumno'.$contadorAlumnos]['apellido'] = $_REQUEST['apellido'];
          $_SESSION['alumno'.$contadorAlumnos]['tlfn'] = $_REQUEST['tlfn'];
          $_SESSION['alumno'.$contadorAlumnos]['email'] = $_REQUEST['email'];
          $_SESSION['alumno'.$contadorAlumnos]['curso'] = $_REQUEST['curso'];
          $contadorAlumnos++;
     }
     if(isset($_REQUEST['alumnos'])){
          $contadorAlumnos = $_REQUEST['contadorAlumnos'];
          $_SESSION['seleccionado'] = $_REQUEST['alumnos'];
     }
     require_once("index.php");
?>