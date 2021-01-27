<html>
    <body>
        <h1>Ejemplo</h1>

        <?php
        echo "Hola Mundo";
        ?>

        <h1>Ejemplo 2</h1>
        <?php
        //se puede escribir en la pantalla con la sentencia echo o print//
        echo "<h2><b>Hola</b></h2>";
        
        for($i=0 ; $i<=10; $i++){
            echo 5*$i."<br>";
           // echo "</br>";
        }

        //ejercicio1
        echo"<br>Ejercicio1<br>";
        $resultado =0.00;
        $tipo = gettype($resultado);
        echo "Resultado vale: $resultado y es de tipo $tipo <br>";
        $resultado = "Cero";
        $tipo = gettype($resultado);
        echo "y ahora vale: $resultado y es de tipo $tipo <br>";
         echo"<br>Ejercicio2<br>";
        //ejercicio2
        $resultado = 0;
        $tipo = gettype($resultado);
        echo "Resultado vale: $resultado y es de tipo $tipo<br>";
        $resultado2 = (double)$resultado;
        $tipo = gettype($resultado2);
        echo "y Resultado2: $resultado2 y es de tipo $tipo<br>";
        $tipo = gettype($resultado);
        echo "mientras Resultado vale: $resultado y es de tipo $tipo<br>";

        echo"<br>Ejercicio3<br>";
        //ejercicio3
        $numero = 5;
        $tipoNumero =gettype($numero);
        echo "La variable numero vale $numero y es de tipo $tipoNumero<br>";
        $numero = 5.5;
        echo "La variable numero vale $numero y es de tipo $tipoNumero<br>";

        echo"<br>Ejercicio4<br>";
        $numero2 = 5.5;
        $tipoNumero2 = gettype($numero2);
        echo "La variable numero2 vale $numero2 y es de tipo $tipoNumero2<br>";
        echo "La variable numero2 vale " . (int)$numero2 . " y es de tipo " . gettype($numero2) . "<br>";

        echo"<br>Ejercicio4<br>";
        $nombre = "Juan";
        $apellido = "Perro";
        $direccion ="C. Jardín Botánico";
        $codigoPostal = 28014;
        $localidad = "Madrid";
        $provincia = "Madrid";
        
        echo "<table border=1px>";
            echo "<tr>";
                echo "<td>Variable </td>";
                echo "<td>Valor</td>";
                echo "<td>Tipo </td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td> nombre</td>";
                echo "<td>$nombre </td>";
                echo "<td>".gettype($nombre)."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>apellidos </td>";
                echo "<td> $apellido</td>";
                echo "<td>".gettype($apellido). "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>direccion </td>";
                echo "<td>$direccion</td>";
                echo "<td>".gettype($direccion)."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>código postal </td>";
                echo "<td>$codigoPostal</td>";
                echo "<td>".gettype($codigoPostal)."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>localidad </td>";
                echo "<td>$localidad</td>";
                echo "<td>".gettype($localidad)."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>provincia </td>";
                echo "<td>$provincia</td>";
                echo "<td>".gettype($localidad)."</td>";
            echo "</tr>";
        echo "</table>";


        ?>
    </body>
</html>
