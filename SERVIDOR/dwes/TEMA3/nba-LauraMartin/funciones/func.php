<?php

function cerrarBBDD($cnn){
    $cnn->close();
}

function conferencias(){
    $_SESSION['pagina']++;

    #Si existe la conexion hago las querys:
    if($_SESSION['cnn']){
        $query = "SELECT DISTINCT Conferencia FROM equipos";

        $resul1 = $_SESSION['cnn']->query($query);
        $resul2 = $_SESSION['cnn']->query($query);


        # -- CONFERENCIA DEL JUGADOR 1 -- #
        echo "
             <label for='slctConferencias1'>Elige la conferencia del jugador 1</label>
             <select name='slctConferencias1' id='slctConferencias1'>";
                conferenciaJug($resul1);
        echo "</select> <br/>";

        # -- CONFERENCIA JUGADOR 2 -- #
        echo "
            <label for='slctConferencias2'>Elige la conferencia del jugador 2</label>
            <select name='slctConferencias2' id='slctConferencias2'>";
                conferenciaJug($resul2);
        echo "</select> <br/>";

    } else{
        echo "Error en la conexión con la base de datos.";
    }
}

function equipos(){
    $_SESSION['pagina']++;

    if(isset($_SESSION['cnn'])){
        $query1 = "SELECT DISTINCT nombre from equipos where conferencia = '{$_SESSION['jugador1']['conferencia']}'";
        $query2 = "SELECT DISTINCT nombre from equipos where conferencia = '{$_SESSION['jugador2']['conferencia']}'";

        $resul1 = $_SESSION['cnn']->query($query1);
        $resul2 = $_SESSION['cnn']->query($query2);

        # -- Equipo del jugador 1 -- #
        echo "
            <label for='slctEquipo1'>Elije el equipo del jugador 1:</label>
            <select name='slctEquipo1' id='slctEquipo1'>";
                equiposJug($resul1);
          echo "</select> <br/>

        <!-- Equipo del jugador 1 -->
        
            <label for='slctEquipo2'>Elije el equipo del jugador 2:</label>
            <select name='slctEquipo2' id='slctEquipo2'>";
                equiposJug($resul2);
            echo "</select> <br/>";
        }
}

function jugadores(){
    $_SESSION['pagina']++;

    if(isset($_SESSION['cnn'])){
        $query1 = "select nombre from jugadores where Nombre_equipo = '{$_SESSION['jugador1']['equipo']}'";
        $query2 = "select nombre from jugadores where Nombre_equipo = '{$_SESSION['jugador2']['equipo']}'";

        $resul1 = $_SESSION['cnn']->query($query1);
        $resul2 = $_SESSION['cnn']->query($query2);

        # -- Nombre del jugador 1 -- #
        echo "
            <label for='slctNombre1'>Elije el nombre del jugador 1:</label>
            <select name='slctNombre1' id='slctNombre1'>";
        equiposJug($resul1);
        echo "</select> <br/>

        <!-- Nombre del jugador 1 -->
        
            <label for='slctNombre2'>Elije el nombre del jugador 2:</label>
            <select name='slctNombre2' id='slctNombre1'>";
        equiposJug($resul2);
        echo "</select> <br/>";
    }

}
function guardarDatosJugador($nombre,$jug){
    $queryDatosJug = "SELECT nombre, posicion,altura, peso FROM `jugadores` WHERE nombre = '{$nombre}'";
    $queryEstadisticas = "select round(AVG(Puntos_por_partido),2) as 'Puntos', round(avg(Asistencias_por_partido),2) as 'Asistencias', 
        round(avg(Rebotes_por_partido),2) as 'Rebotes', round(avg(Tapones_por_partido),2) as 'Tapones' 
        from estadisticas where jugador = (SELECT codigo from jugadores where nombre = '{$nombre}')";

    if($_SESSION['cnn']){
        $resultadoDatos = $_SESSION['cnn']->query($queryDatosJug);
        $resultadoEstadisticas = $_SESSION['cnn']->query($queryEstadisticas);


        while($res = $resultadoDatos->fetch_assoc()){
           foreach ($res as $campo=>$contenido){
               $_SESSION[$jug][$campo] = $contenido;
            }
        }

       while($res1 = $resultadoEstadisticas->fetch_assoc()){
           foreach ($res1 as $campo=>$contenido){
              $_SESSION[$jug][$campo] = floatval($contenido);
            }
        }
    }
}
function mostrarTabla(){
    guardarDatosJugador($_SESSION['jugador1']['nombre'],"jugador1");
    guardarDatosJugador($_SESSION['jugador2']['nombre'],"jugador2");
    $todo = tablita($_SESSION['jugador1'], $_SESSION['jugador2']);

    echo "
        <table border='1' >
        <tr>
            <td>Nombre</td>
            <td>Conferencia</td>
            <td>Equipo</td>            
            <td>Posicion</td>
            <td>Altura</td>
            <td>Peso</td>
            <td>Puntos por partido</td>
            <td>Asistencias por partido</td>
            <td>Rebotes por partido</td>
            <td>Tapones por partido</td>
            <td>Puntuación total</td>
        </tr>
            {$todo}
        </table>";
}

function tablita($array1,$array2){
    $tdJug1 = '<tr>';
    $tdJug2 = '<tr>';
    $array1['puntuacion']=0;
    $array2['puntuacion']=0;
    foreach ($array1 as $campo => $valor){
        if(is_float($array1[$campo])){
            if($array1[$campo]< $array2[$campo]){
                $tdJug1 .= "<td align='center' bgcolor='red'>{$array1[$campo]}</td>";
                $tdJug2 .= "<td align='center' bgcolor='green'>{$array2[$campo]}</td>";
                $array2['puntuacion']++;
            } else{
                $tdJug1 .= "<td align='center' bgcolor='green'>{$array1[$campo]}</td>";
                $tdJug2 .= "<td align='center' bgcolor='red'>{$array2[$campo]}</td>";
                $array1['puntuacion']++;
            }
        }else{
            $tdJug1 .= "<td align='center'>{$array1[$campo]}</td>";
            $tdJug2 .= "<td align='center'>{$array2[$campo]}</td>";
        }

    }
    $tdJug1 .= '</tr>';
    $tdJug2 .= '</tr>';
    $todo = $tdJug1 . $tdJug2;
    return $todo;

}
function conferenciaJug($result){
    while($reg = $result->fetch_assoc()){
        echo "<option value='{$reg['Conferencia']}'>{$reg['Conferencia']}</option>";
    }
}


function equiposJug($resul){
    while($reg = $resul->fetch_assoc()){
        echo "<option value='{$reg['nombre']}'>{$reg['nombre']}</option>";
    }
}

