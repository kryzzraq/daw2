<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Visual Studio Code" />
    <meta name="author" content="Laura Martin Vicente" />
    <title>Ejercicio21</title>
</head>
<body>
    <?php
        $numeros = $_REQUEST['numeros'];
        $operacion = $_REQUEST['operacion'];
        echo "Inserta los números a continuación:<br/>";
        echo '<form name="numElegidos" method="GET" action="ejercicio21_2.php">';
        for($i=0;$i<$numeros;$i++){
            echo '<input type="number" name="numero'.$i.'"><br/>';
        }
        echo '<input type="submit" value="Enviar">';
        echo '<input type="hidden" name="numeros" value="'.$numeros.'">';
        echo '<input type="hidden" name="operacion" value="'.$operacion.'">';
        echo '</form>';

    ?>
</body>
</html>