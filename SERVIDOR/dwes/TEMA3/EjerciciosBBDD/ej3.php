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
    const BBDD = "nba";


    if(!isset($_REQUEST['temporada'])) {
        @$conexion = mysqli_connect(HOST, US, PW, BBDD);

        //si se ha establecido la conexion correctamente...
        if ($conexion) {
            $queryEstadisticas = "SELECT distinct  temporada FROM estadisticas order by temporada desc";
            $resultadoTemporadas = mysqli_query($conexion, $queryEstadisticas);
            echo "
            <form name='datosNBA' method='post' action='ej3.php'>
            <label for='temporada'>Selecciona la temporada </label>
            <select name='temporada' id='temporada'>
        ";
            while ($row = mysqli_fetch_assoc($resultadoTemporadas)) {
                echo "<option name='temporada' value='{$row['temporada']}'>{$row['temporada']}</option>";
            }
            echo "
            </select><br/>
            <label for='estadistica'>Selecciona la estadística </label>
            <select name='estadistica' id='estadistica'>
                <option name='estadistica' value='Puntos_por_partido '>Puntos</option>
                <option name='estadistica' value='Rebotes_por_partido '>Rebotes</option>
                <option name='estadistica' value='Asistencias_por_partido '>Asistencias</option>
                <option name='estadistica' value='Tapones_por_partido '>Tapones</option>
            </select> <br/>
            <label for='jugadores'>Selecciona el número de jugadores</label>
            <input type='number' name='jugadores' id='jugadores' min='0'>
            <input type='submit' value='Consultar'>";
        }
    }

    if(isset($_REQUEST['temporada'])){
        $temporada = $_REQUEST['temporada'];
        $numJugadores = $_REQUEST['jugadores'];
        $estadistica = $_REQUEST['estadistica'];

        @$conexion = mysqli_connect(HOST, US, PW, BBDD);

        if($conexion){
            $sql = "SELECT  $estadistica, nombre, nombre_equipo from estadisticas, jugadores where estadisticas.jugador = jugadores.codigo 
                        and estadisticas.temporada = '$temporada' order by $estadistica desc limit $numJugadores";

            $resultado = mysqli_query($conexion,$sql);

            echo "<table border='1'>
                    <tr>
                        <td><b>Nombre jugador</b></td>
                        <td><b>Equipo</b></td>
                        <td><b>Puntos</b></td>
                    </tr>";
            while($row=mysqli_fetch_assoc($resultado)){
                echo "<tr>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['nombre_equipo'] . "</td>";
                echo "<td>" . $row[trim($estadistica)] . "</td>";
                echo "</tr>";
                var_dump($row);
            }
            echo "</table>";
        }
    }

?>
</body>
</html>


