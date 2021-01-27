<?php session_start();
?>
<?php 
    if(isset($_REQUEST['cerrarSesion'])){
       session_destroy(); 
    }
    
?>
<?php require_once("accdat/BBDD.php");?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="proyecto web insituto">
    <meta name="description" content="aplicacion web que permite ver, modificar, crear o borrar datos de los alumnos.">
    <title>Proyecto 1 servidor</title>
    <script type="text/javascript" src="js/eventos.js"></script>
    <link rel="StyleSheet" href="gui/formato.css" type="text/css">
</head>
<body onload="onLoad_body();">
    <?php require_once("gui/cabecera.php");?>
    <?php require_once("gui/aside.php");?>
        <div id="cuerpo">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, enim earum qui perspiciatis expedita praesentium beatae inventore ex officia quidem obcaecati officiis eligendi ipsa asperiores minus excepturi aspernatur necessitatibus sapiente.</div>
    <?php require_once("gui/footer.php");?>
</body>
</html>