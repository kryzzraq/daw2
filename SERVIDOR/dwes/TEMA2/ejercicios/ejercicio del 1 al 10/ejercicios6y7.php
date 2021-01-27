<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios tema 2_2</title>
    <meta name="generator" content="Visual Studio Code" />
    <meta name="author" content="Laura Martin Vicente" />
</head>
<body>
    <?php   
        echo"Ejercicio 6:<br/>";
        define ("PI", 3.1416);
        echo "El valor de la constante PI es: ".PI.".<br/>";
        $radio = 3;
        echo "Establecemos el radio en ".$radio.".<br/>";
        echo "La longitud de la circunferencia es ". PI*2*$radio .".<br/>";
        echo "El área de la circunferencia es: " . (PI*$radio)**2 .".<br/><br/>";

        echo "Ejercicio 7:<br/>";
        $valor1 =8;
        $valor2=3;
        echo "La suma de $valor1 y $valor2 es: ". ($valor1+$valor2) .".<br/>";
        echo "$valor1-$valor2=".($valor1-$valor2).".<br/>";
        echo "El producto de $valor1 y $valor2 es: ".($valor1*$valor2).".<br/>";
        echo "El cociente de dividir $valor1 entre $valor2 es: ".($valor1/$valor2).".<br/>";
        echo "El resto de dividir $valor1 entre $valor2 es: ".($valor1%$valor2).".<br/>";
        echo "Incrementamos el valor de $valor1 1 número: ".++$valor1.".<br/>";
        echo "Decrementamos el valor de $valor2 en 1: " .--$valor2.".<br/><br/>";
        
        
    ?>
    
</body>
</html>