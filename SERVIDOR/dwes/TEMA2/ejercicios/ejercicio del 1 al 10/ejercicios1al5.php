<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicios tema2_1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Visual Studio Code" />
    <meta name="author" content="Laura Martin Vicente" />
</head>
<body>
    <?php
        
        echo"<br/>Ejercicio1<br/>";
        $resultado =0.00;
        $tipo = gettype($resultado);
        echo "Resultado vale: $resultado y es de tipo $tipo <br/>";
        $resultado = "Cero";
        $tipo = gettype($resultado);
        echo "y ahora vale: $resultado y es de tipo $tipo <br/>";
        
        echo"<br/>Ejercicio2<br/>";
        $resultado = 0;
        $tipo = gettype($resultado);
        echo "Resultado vale: $resultado y es de tipo $tipo<br/>";
        $resultado2 = (double)$resultado;
        $tipo = gettype($resultado2);
        echo "y Resultado2: $resultado2 y es de tipo $tipo<br/>";
        $tipo = gettype($resultado);
        echo "mientras Resultado vale: $resultado y es de tipo $tipo<br/>";

        echo"<br/>Ejercicio3<br/>";
        $numero = 5;
        echo "La variable numero vale $numero y es de tipo ". gettype($numero) ."<br/>";
        $numero = 5.5;
        echo "La variable numero vale $numero y es de tipo ". gettype($numero) ."<br/>";
        echo "Sí se han cambiado los tipos <br/>";

        
        echo"<br/>Ejercicio4<br/>";
        $numero2 = 5.5;
        echo "La variable numero2 vale $numero2 y es de tipo " . gettype($numero2) ."<br/>";
        echo "La variable numero2 vale " . (int)$numero2 . " y es de tipo " . gettype($numero2) . "<br/>";
        echo "No cambia su tipo aunque sí su valor <br/>";
        echo "La variable numero2 vale " . (int)$numero2 . " y es de tipo " . gettype((int)$numero2) . ".<br/>";
        echo "Ahora sí cambia su tipo.<br/>";

        echo"<br/>Ejercicio5<br/>";
        $nombre = "Juan";
        $apellido = "Perro";
        $direccion ="C. Jardín Botánico";
        $codigoPostal = 28014;
        $localidad = "Madrid";
        $provincia = "Madrid";
        
        echo "<table border=1px>";
            echo "<tr>";
                echo "<td><b>Variable</b></td>";
                echo "<td><b>Valor</b></td>";
                echo "<td><b>Tipo</b></td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td> Nombre</td>";
                echo "<td>$nombre </td>";
                echo "<td>".gettype($nombre)."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>Apellidos </td>";
                echo "<td> $apellido</td>";
                echo "<td>".gettype($apellido). "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>Direccion </td>";
                echo "<td>$direccion</td>";
                echo "<td>".gettype($direccion)."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>Código postal </td>";
                echo "<td>$codigoPostal</td>";
                echo "<td>".gettype($codigoPostal)."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>Localidad</td>";
                echo "<td>$localidad</td>";
                echo "<td>".gettype($localidad)."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>Provincia </td>";
                echo "<td>$provincia</td>";
                echo "<td>".gettype($localidad)."</td>";
            echo "</tr>";
        echo "</table>";


        ?>
</body>
</html>