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
    session_start();
    const HOST = "localhost";
    const US = "root";
    const PW = "";
    const BBDD = "nba";
#session_destroy();
    #conectamos a la base de datos
    $conexion = mysqli_connect(HOST,US,PW,BBDD);

    if(!isset($_REQUEST['confJug1']) && !isset($_SESSION['jugador2']['conferencia'])){
        #si la conexion se ha realizado corectamente...
        if($conexion){
            #query para obtener las diferentes conferencias
            $queryConferencia = "select distinct conferencia from equipos";
            #obtenemos dos resultados, uno para el jugador1 y otro para el 2
            $resultadoConf = mysqli_query($conexion,$queryConferencia);
            $resultadoConf1 = mysqli_query($conexion,$queryConferencia);?>
            <!--- recogida de la conferencia del jugador 1 a comparar --->
            <form action='index.php' method='post' name='frmConferenciaJug1'>
                <label for='confJug1'>Elige la conferencia del jugador 1</label>
                <select name='confJug1' id='confJug1'>";
                    <?php
                        while($row = mysqli_fetch_assoc($resultadoConf)){
                        echo "<option name='{$row['conferencia']}'>{$row['conferencia']}</option>";
                    }   ?>
                </select> <br/>
                <!--- recogida de la conferencia del jugador 2 a comparar --->
                <label for='confJug2'>Elige la conferencia del jugador 2</label>
                <select name='confJug2' id='confJug2'>";
                    <?php
                    while($row = mysqli_fetch_assoc($resultadoConf1)){
                        echo "<option name='{$row['conferencia']}'>{$row['conferencia']}</option>";
                    }   ?>
                </select>
                <input type="submit" value="Enviar">
            </form>
        <?php
        }
    }

    if(isset($_REQUEST['confJug1'])){
        #recojo las conferencias de los jugadores
        $_SESSION['jugador1']['conferencia'] = $_REQUEST['confJug1'];
        $_SESSION['jugador2']['conferencia'] = $_REQUEST['confJug2'];

        if($conexion){
            #datos del jug1
            $queryEquipo1 = "select distinct nombre from equipos where conferencia = '{$_SESSION['jugador1']['conferencia']}'";
            $resultadoEquipo1 = mysqli_query($conexion,$queryEquipo1);
            #datos del jug2
            $queryEquipo2 = "select distinct nombre from equipos where conferencia = '{$_SESSION['jugador2']['conferencia']}'";
            $resultadoEquipo2 = mysqli_query($conexion,$queryEquipo2);
            ?>
            <!--- Recogida del equipo del jugador 1 --->
                <form action="index.php" method="post" name="equipos">
                    <label for="equipojug1">Selecciona el equipo del jugador 1:</label>
                    <select name="equipojug1" id="equipojug1">
                    <?php
                        while($row = mysqli_fetch_assoc($resultadoEquipo1)){
                            echo "<option value='{$row['nombre']}'>{$row['nombre']}</option>" ;
                        }
                    ?>
                    </select> <br/>
                    <!--- Recogida del equipo del jugador 2 --->
                    <label for="equipojug2">Selecciona el equipo del jugador 2:</label>
                    <select name="equipojug2" id="equipojug2">
                        <?php
                            while($row = mysqli_fetch_assoc($resultadoEquipo2)){
                                echo "<option value='{$row['nombre']}'>{$row['nombre']}</option>" ;
                            }
                        }
                        ?>
                    </select>
                    <input type="submit" value="Enviar">
                </form>
<?php
        }
    if(isset($_REQUEST['equipojug1']) && isset($_REQUEST['equipojug2'])){
        #recogemos los nuevos datos en las session:
        $_SESSION['jugador1']['equipo'] = $_REQUEST['equipojug1'];
        $_SESSION['jugador2']['equipo'] = $_REQUEST['equipojug2'];

        #querys de ambos jugadores
        $queryNombreJug1 = "select distinct nombre from jugadores where Nombre_equipo = '{$_SESSION['jugador1']['equipo']}'";
        $queryNombreJug2 = "select distinct nombre from jugadores where Nombre_equipo = '{$_SESSION['jugador2']['equipo']}'";

        #resultados de ambos jugadores
        $resultadonombreJug1 = mysqli_query($conexion,$queryNombreJug1);
        $resultadonombreJug2 = mysqli_query($conexion,$queryNombreJug2);
        ?>

        <!--- desplegable del jugador 1 --->
        <form action="index.php" method="post" name="nombreJugs">
            <label for="nombreJug1">Selecciona el nombre del jugador 1:</label>
            <select name="nombreJug1" id="nombreJug1">

        <?php
                while($row = mysqli_fetch_assoc($resultadonombreJug1)){
                    echo "<option value='{$row['nombre']}'>{$row['nombre']}</option>";
                }
        ?>
            </select><br/>
            <label for="nombreJug2">Selecciona el nombre del jugador 2:</label>
            <select name="nombreJug2" id="nombreJug2">
                <?php
                    while($row=mysqli_fetch_assoc($resultadonombreJug2)){
                        echo "<option name='nombreJug2' value='{$row['nombre']}'>{$row['nombre']}</option>";
                    }
                ?>
            </select><br/>
            <input type="submit" value="Enviar">
        </form>
    <?php
    }
    if(isset($_REQUEST['nombreJug2'])){
        $_SESSION['jugador1']['nombre'] = $_REQUEST['nombreJug1'];
        $_SESSION['jugador2']['nombre'] = $_REQUEST['nombreJug2'];

        $columnas = array('Nombre', 'Puesto', 'Equipo', 'Altura' ,'Peso','Puntos por partido',
                'Asistencias por partido', 'Rebotes por partido', 'Tapones por partido'
        );

        echo "<table border='1px'>
                <tr>
                    <td>{$columnas[0]}</td>
                    <td>{$_SESSION['jugador1']['nombre']}</td>
                    <td>{$_SESSION['jugador2']['nombre']}</td>
                </tr>
                <tr>
                    <td>{$columnas[1]}</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>{$columnas[2]}</td>
                    <td>{$_SESSION['jugador1']['equipo']}</td>
                    <td>{$_SESSION['jugador2']['equipo']}</td>
                    
                </tr><tr>
                    <td>{$columnas[3]}</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>{$columnas[4]}</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>{$columnas[5]}</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>{$columnas[6]}</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>{$columnas[7]}</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>{$columnas[8]}</td>
                    <td></td>
                    <td></td>
                </tr>
              </table>";

    }
?>

</body>
</html>