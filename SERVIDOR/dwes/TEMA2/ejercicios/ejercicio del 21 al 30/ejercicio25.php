<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $datosAlumnos = $_REQUEST['dato']??[];

        if($_REQUEST['info']??false && $_REQUEST['infoedad']??false)
            $datosAlumnos[count($datosAlumnos)] = $_REQUEST['info'] . ", " . $_REQUEST['infoedad'];
     
    echo "
    <form name='datosAlumno' method='post' action='ejercicio25.php'>
        Alumnos: <input type='text' name='info'> <br/>
        Edad: <input type='num' name='infoedad'>
        <input type='submit' value='Enviar'>";
        for($i=0;$i<count($datosAlumnos);$i++){
            echo "<input type='hidden' name='dato[$i]' value='$datosAlumnos[$i]'>";
        }
            
    echo "</form>";
    echo join($datosAlumnos, '<br>');
?>
   
</body>
</html>