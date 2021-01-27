<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ejercicio 19</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Visual Studio Code" />
    <meta name="author" content="Laura Martin Vicente" />
</head>
<body>
    <?php
        $a[0] = $_REQUEST['nombre'];
        $a[1] = $_REQUEST['apellidos'];
        $a[2] = $_REQUEST['telefono'];
        $a[3] = $_REQUEST['direccion'];
        $a[4] = $_REQUEST['poblacion'];
        $a[5] = $_REQUEST['provincia'];
        $a[6] = $_REQUEST['fecha'];
        $a[7] = $_REQUEST['estudios'];
        

        echo '<table>';

        for ($i=0; $i<8;$i++){
            echo '<tr>';
            echo '<td>'. $a[$i] . '</td>';
            
            echo '</tr>';
        }
        echo '</table>';
    ?>
    
</body>
</html>