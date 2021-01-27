<?php
require_once ("bbdd/bbddconfig.php");
require_once ("bbdd/bbdd.php");
require_once ("gui/cabecera.php");

if(!isset($_REQUEST['registro'])){
    ?>
    <form method="post" name="frmRegistro" action="registro.php">
        <label for="usu">Usuario:</label>
        <input type="text" name="usu" id="usu" required="required"><br/>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required="required"><br/>
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" required="required"><br/>
        <input type="hidden" name="registro" value="true">
        <input type="submit" value="Registrarse" id="registrarse">
    </form>
    <?php
}else{
    $us = $_REQUEST['usu'];
    $contrasenia = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    registrarUsuario($us,$contrasenia,$email);
}
?>

<a href="ejercicio1.php"><button>Volver</button></a>
</body>
</html>