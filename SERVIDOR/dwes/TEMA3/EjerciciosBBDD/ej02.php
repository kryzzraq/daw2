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
const HOST = "localhost";
const US = "root";
const PW = "";
const BBDD ="nba";


if(!isset($_REQUEST['nombreEquipo'])){
@$conexion = mysqli_connect(HOST,US,PW,BBDD);

    if($conexion) {
        $query = "SELECT nombre FROM equipos";
        $resultado = mysqli_query($conexion, $query);
var_dump($row = mysqli_fetch_assoc($resultado));
        echo "
            <form name='seleccionarEquipo' method='post' action='ej02.php'>
                <label for='nombreEquipo'>Selecciona el nombre del equipo:</label>
                <select name='nombreEquipo' id='nombreEquipo'>";

        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<option value='{$row['nombre']}'>{$row['nombre']}</option>";
        }

        echo "</select><br/>";
        echo "<input type='submit' value='Consultar'>
                   </form> ";
    }
}
if(isset($_REQUEST['nombreEquipo'])){
    $nombreEquipo = $_REQUEST['nombreEquipo'];
    @$conexion = mysqli_connect(HOST,US,PW,BBDD);
    if($conexion){
        $consulta = "SELECT nombre FROM jugadores where nombre_equipo ='$nombreEquipo'";
        $resultado = mysqli_query($conexion,$consulta);

        while($row=mysqli_fetch_assoc($resultado)){
            echo $row['nombre'] . "<br/>";
        }
    }
}
?>

</body>
</html>