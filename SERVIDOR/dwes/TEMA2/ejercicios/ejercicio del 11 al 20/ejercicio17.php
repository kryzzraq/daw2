<!DOCTYPE html>
<html lang="en">
<head>
<title>Ejercicios 17 php</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Visual Studio Code" />
    <meta name="author" content="Laura Martin Vicente" />
</head>
<body>
   <?php 
        $tamaño= $_REQUEST['tamaño']??'10';
        $color = $_REQUEST['color']??'blue';
        $estilo = $_REQUEST['estilo']??'dotted';
        
        echo '<p style="color:'.$color.';"  style="border: '.$estilo.';" style="size: '.$tamaño.'px;">Formateo del texto</p>';
        
   ?>
</body>
</html>