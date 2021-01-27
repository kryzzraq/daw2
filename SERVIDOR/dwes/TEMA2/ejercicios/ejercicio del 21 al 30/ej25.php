<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $datosAlumno = $_REQUEST['dato']??[];
        if($_REQUEST['nombre']??false){
            $datosAlumno[count($datosAlumno)] = $_REQUEST['nombre'];
        }
        if(count($datosAlumno)<10){
    ?>
    <form action="ej25.php" method="post" name="form">
        <label for="nombre">Nombre del alumno:</label>
        <input type="text" name="nombre" id="nombre">
        <input type="hidden" name="contador" value="$cont">
        <input type="submit" value="Enviar">
        <?php
            for($i=0; $i<count($datosAlumno);$i++){
                echo "<input type='hidden' name='dato[$i]' value='$datosAlumno[$i]'>";
            }
        }
            ?>
        <table border="1">
            <tr>
                <?php for($i=0;$i<count($datosAlumno);$i++){
                    echo "<td>$datosAlumno[$i]</td>";
                }    ?>
            </tr>
        </table>
    </form>
</body>
</html>