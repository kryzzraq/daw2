<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $nombre = $_REQUEST['nombre'];
        $jugada = $_REQUEST['opcion'];
        $num1 = rand(1,6);
        $num2 = rand(1,6);

        echo "Suerte, ",$nombre,"<br/>";
        echo "Jugada: ", $jugada,"<br/>";
        
        echo "El número del primer dado es: ", $num1,".<br/>";
        echo "El número del segundo dado es: ", $num2,".<br/>";
        echo "El resultado de la suma de los dados es: ", $num1 + $num2,".<br/>";

        if ($jugada === ($num1+$num2)){
            echo "¡¡¡Enhorabuena, ",$nombre," ha ganado!!!";
        } else {
            echo "Lo siento ",$nombre,", no has acertado.";
        }
    ?>
</body>
</html>