<?php
if(isset($_POST["slctConferencias1"]) && isset($_POST['slctConferencias2'])){
    $_SESSION['jugador1']['conferencia'] = $_POST['slctConferencias1'];
    $_SESSION['jugador2']['conferencia'] = $_POST['slctConferencias2'];
}

function equiposJug($resul){
    while($reg = $resul->fetch_assoc()){
        echo "<option value='{$reg['nombre']}'>{$reg['nombre']}</option>";
    }
}
