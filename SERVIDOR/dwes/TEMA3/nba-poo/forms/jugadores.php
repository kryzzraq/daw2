<?php
if(isset($_POST['slctEquipo2']) && isset($_POST['slctEquipo1'])){
    $_SESSION['jugador1']['equipo'] = $_POST['slctEquipo1'];
    $_SESSION['jugador2']['equipo'] = $_POST['slctEquipo2'];
}
function nombreJug($resul){
    while($reg = $resul->fetch_assoc()){
        echo "<option value='{$reg['nombre']}'>{$reg['nombre']}</option>";
    }
}