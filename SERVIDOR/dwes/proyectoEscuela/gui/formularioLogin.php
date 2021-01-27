<?php

$cerrarSesion = $_REQUEST['sesionCerrada']??false;
$us = $_REQUEST['frmNombre']??'';
$pass = $_REQUEST['frmContraseña']??'';

if($cerrarSesion){
    unset($_SESSION['usuario']);
}

if(isset($_SESSION['usuario']) || validar_usuario($us,$pass)){
    ?>
    <div class="formulario">
            <form method="post" name="frmLogin" action="index.php">
                <input type="hidden" value="true" name="sesionCerrada">
                <input type="submit" value="Cerrar sesión" id="cerrarSesion">
            </form>
        </div>
    <?php
} else {
    ?>
    <div class="formulario">
        <form method="post" name="frmLogin" action="index.php">
            <label for="frmNombre">Usuario:</label>
            <input type="text" name="frmNombre" id="frmNombre">
            <label for="frmContraseña">Contraseña:</label>
            <input type="password" name="frmContraseña" id="frmContraseña">
            <input type="submit" value="Enviar" id="enviar">
        </form>
    </div>
    <?php

}
/*


<div class="formulario">
        <form method="post" name="frmLogin" action="index.php">
            <label for="frmNombre">Usuario:</label>
            <input type="text" name="frmNombre" id="frmNombre">
            <label for="frmContraseña">Contraseña:</label>
            <input type="password" name="frmContraseña" id="frmContraseña">
            <input type="submit" value="Enviar" id="enviar">
        </form>
    </div>


<div class="formulario">
    <form method="post" name="frmLogin" action="index.php">
        <input type="hidden" value="true" name="sesionCerrada">
        <input type="submit" value="Cerrar sesión" id="cerrarSesion">
    </form>
</div>
*/