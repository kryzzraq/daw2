<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ejercicio 18</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Visual Studio Code" />
    <meta name="author" content="Laura Martin Vicente" />
</head>
<body>
    <?php
        $filas = $_REQUEST['filas'];
        $columnas = $_REQUEST['columnas'];

        echo '<table border="1px">';
        for($i=0;$i<$filas;$i++){
            echo '<tr>';
            for ($k=0; $k<$columnas; $k++){
                echo '<td>'.$filas*$columnas.'</td>';
            }
            echo '/<tr>';
        }
        echo '</table>'
    ?>
</body>
</html>