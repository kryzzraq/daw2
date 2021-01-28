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

function mostrarTabla(){
    echo "tabla";
}
