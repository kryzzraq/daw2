<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicios formularios</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Visual Studio Code" />
    <meta name="author" content="Laura Martin Vicente" />
</head>
<body>
    <?php
        $nombre = $_REQUEST['nombre'];
        $apellidos= $_REQUEST['apellidos'];
        $direccion = $_REQUEST['direccion'];
        $telefono = $_REQUEST['telefono'];

        echo "Ejercicio 13:<br/>";
        echo "<table border=1px>";
            echo "<tr>";
                echo "<td>Nombre:</td>";
                echo "<td>$nombre</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>Apellidos: </td>";
                echo "<td>$apellidos</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>Dirección: </td>";
                echo "<td>$direccion</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>Teléfono: </td>";
                echo "<td>$telefono</td>";
            echo "</tr>";
        echo "</table>";

        echo "<br/>Ejercicio 14 <br/>";
            $cantidadA = $_REQUEST['articuloa'];
            $cantidadB = $_REQUEST['articulob'];
            $cantidadC = $_REQUEST['articuloc'];
            define('PRECIOA',5.99);
            define('PRECIOB',12.49);
            define('PRECIOC',19.99);
            define('IVA',0.2);
            $subTotal = ($cantidadA*PRECIOA)+($cantidadB*PRECIOB)+($cantidadC*PRECIOC);
            $totalIva = ($subTotal)*IVA;
            $fecha = new DateTime("now");
            $totalUds = ($cantidadA+$cantidadB+$cantidadC);
            
            echo "<table>";
                echo "<tr>";
                    echo "<td colspan=4 align=right>Fecha de la factura: ".$fecha->format('d-m-y')."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Artículo</td>";
                    echo "<td>Precio</td>";
                    echo "<td>Unidades</td>";
                    echo "<td>Subtotal</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Artículo A &nbsp;</td>";
                    echo "<td align=right>5,99€</td>";
                    echo "<td align=center>".$cantidadA."</td>";
                    echo "<td align=right>".$cantidadA*PRECIOA."€</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Artículo B</td>";
                    echo "<td align=right>12,49€</td>";
                    echo "<td align=center>".$cantidadB."</td>";
                    echo "<td align=right>".$cantidadB*PRECIOB."€</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Artículo C</td>";
                    echo "<td align=right>19,99€</td>";
                    echo "<td align=center>".$cantidadC."</td>";
                    echo "<td align=right>".$cantidadC*PRECIOC."€</td>";
                echo "</tr>";
                echo "<tr></tr>";
                echo "<tr>";
                    echo "<td colspan=2></td>";
                    echo "<td>IVA 20%</td>";
                    echo "<td align=right>".round(($totalIva),2)."€</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td colspan=2></td>";
                    echo "<td>TOTAL</td>";
                    echo "<td align=right>".round(($subTotal+$totalIva),2)."€</td>";
                echo "</tr>";
            echo "</table><br/><br/>";

        echo "Ejercicio 15: <br/>";

            $descuento = 0;
            if($totalUds>=20){
                $descuento = 25;
            } elseif ($totalUds >= 11){
                $descuento = 10;
            } elseif ($totalUds >= 5){
                $descuento = 5;
            }
            
            $totalConDto = round(($subTotal * $descuento / 100),2);
            echo "<table>";
                echo "<tr>";
                    echo "<td colspan=4 align=right>Fecha de la factura: ".$fecha->format('d-m-y')."<br/>
                    *El descuento se aplicará al precio sin IVA.</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Artículo</td>";
                    echo "<td>Precio</td>";
                    echo "<td>Unidades</td>";
                    echo "<td>Subtotal</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Artículo A &nbsp;</td>";
                    echo "<td align=right>5,99€</td>";
                    echo "<td align=center>".$cantidadA."</td>";
                    echo "<td align=right>".$cantidadA*PRECIOA."€</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Artículo B</td>";
                    echo "<td align=right>12,49€</td>";
                    echo "<td align=center>".$cantidadB."</td>";
                    echo "<td align=right>".$cantidadB*PRECIOB."€</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Artículo C</td>";
                    echo "<td align=right>19,99€</td>";
                    echo "<td align=center>".$cantidadC."</td>";
                    echo "<td align=right>".$cantidadC*PRECIOC."€</td>";
                echo "</tr>";
                echo "<tr></tr>";
                echo "<tr>";
                    echo "<td colspan=2></td>";
                    
                    echo "<td>Dto. ".$descuento."%*</td>";
                    echo "<td align=right>". $totalConDto ."€</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td colspan=2></td>";
                    echo "<td>IVA 20%</td>";
                    echo "<td align=right>".round(($totalIva),2)."€</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td colspan=2></td>";
                    echo "<td>TOTAL</td>";
                    echo "<td align=right>".round(($subTotal+$totalIva-$totalConDto),2) ."€</td>";
                echo "</tr>";
            echo "</table>";
            
    ?>
</body>
</html>