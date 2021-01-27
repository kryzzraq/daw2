<?php
if($cerrarSesion){
    unset($_SESSION['usuario']);
    unset($_SESSION['tipo']);
    session_destroy();
}
if(isset($_SESSION['usuario']) || validar_usuario($us,$pass)){
    intentoLoginTrue($_SESSION['usuario']);
    ?>

    <div class="formulario">
            <form method="post" name="frmLogin" action="ejercicio1.php">
                <input type="hidden" value="true" name="sesionCerrada">
                <input type="submit" value="Cerrar sesión" id="cerrarSesion">
            </form>
        </div>
    <?php
} else {
    ?>
            <div class="formulario">
                <form method="post" name="frmLogin" action="ejercicio1.php">
                    <label for="frmNombre">Usuario:</label>
                    <input type="text" name="frmNombre" id="frmNombre">
                    <label for="frmContraseña">Contraseña:</label>
                    <input type="password" name="frmContraseña" id="frmContraseña">
                    <input type="hidden" value="true" name="intentoIncioSesion">
                    <input type="submit" value="Enviar" id="enviar">
                </form>
            </div>
<?php
    if(isset($_REQUEST['intentoIncioSesion']) && !isset($_SESSION['tipo'])){
        intentoLoginFalse($_REQUEST['frmNombre']);
        echo "Credenciales erróneos";
    }
        }
if(!isset($_SESSION['tipo'])){
?>
    <form method="post" name="frmRegistro" action="registro.php">
        <input type="hidden" value="true" name="registrarse">
        <input type="submit" value="Registrarse" id="registrarse">
    </form>
<?php
}
?>

<?php
if(isset($_SESSION['tipo'])){
    if($_SESSION['tipo'] === 'adm'){
?>
        <form method="post" name="editar" action="editar.php">
            <input type="hidden" value="true" name="editar">
            <input type="submit" value="Editar usuarios" id="editar">
        </form>
        <form method="post" name="listar" action="listar.php">
            <input type="hidden" value="true" name="listar">
            <input type="submit" value="Listar Usuarios" id="editar">
        </form>
        <form method="post" name="log" action="log.php">
            <input type="hidden" value="true" name="log">
            <input type="submit" value="Consultar el log" id="editar">
        </form>
<?php
    }else{
        if($_SESSION['tipo'] === 'usu'){
            ?>
            <form method="post" name="formulario" action="listar.php">
                <input type="hidden" value="true" name="listar">
                <input type="submit" value="Listar Usuarios" id="editar">
            </form>
            <?php

        }
    }
}
?>

</body>
</html>