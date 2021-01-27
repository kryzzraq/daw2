<?php
if(isset($_POST["slctConferencias1"]) && isset($_POST['slctConferencias2'])){
    $_SESSION['jugador1']['conferencia'] = $_POST['slctConferencias1'];
    $_SESSION['jugador2']['conferencia'] = $_POST['slctConferencias2'];
}
if(isset($_POST['slctEquipo2']) && isset($_POST['slctEquipo1'])){
    $_SESSION['jugador1']['equipo'] = $_POST['slctEquipo1'];
    $_SESSION['jugador2']['equipo'] = $_POST['slctEquipo2'];
}
if(isset($_POST["slctNombre1"]) && isset($_POST['slctNombre2'])){
    $_SESSION['jugador1']['nombre'] = $_POST['slctNombre1'];
    $_SESSION['jugador2']['nombre'] = $_POST['slctNombre2'];
}