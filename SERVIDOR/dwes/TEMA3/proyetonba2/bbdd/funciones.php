<?php
require_once("conexion_bbdd.php");


function conferencias(){
    $_SESSION['posicion']++;
    # --- SI EXISTE LA CONEXION, HAGO LAS PREGUNTAS --- #
    if($_SESSION['conexion']){
        $query = "select distinct conferencia from equipos";
        $resultado = mysqli_query($_SESSION['conexion'],$query);
        $resultado2 = mysqli_query($_SESSION['conexion'],$query);
    }
    # -- CONFERENCIA JUGADOR 1 -- #
    echo "
    <label for='slctConferencias1'>Elige la conferencia del jugador 1</label>
    <select name='slctConferencias1' id='slctConferencias1'>";
        conferenciaJug($resultado);
    echo "</select> <br/>";

    # -- CONFERENCIA JUGADOR 2 -- #
    echo "
    <label for='slctConferencias2'>Elige la conferencia del jugador 2</label>
    <select name='slctConferencias2' id='slctConferencias2'>";
        conferenciaJug($resultado2);
    echo "</select> <br/>";
}
?>