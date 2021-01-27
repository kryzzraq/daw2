<?php
require_once ("bbdd/bbddconfig.php");
require_once ("bbdd/bbdd.php");
require_once ("gui/cabecera.php");

if(isset($_SESSION['tipo'])){
    if($_SESSION['tipo'] === 'adm' && !isset($_REQUEST['usuario']) && !isset($_SESSION['usuarioModificar'])) {
    obtenerUsuarios();
    }
    if(isset($_REQUEST['usuario']) ){
        $_SESSION['usuarioModificar'] = $_REQUEST['usuario'];
        ?>
        <form action='editar.php' method='post' name='formEditar'>
            <label for='tipoUsuario'>Elige el tipo de usuario</label>
            <select name='tipoUsuario' id='tipoUsuario'>
                <option name='adm' value="adm">Administrador</option>
                <option name='usu' value="usu">Usuario</option>
            </select>
            <input type='submit' value='Enviar'>
        </form>
        <?php
    }
    if(isset($_SESSION['usuarioModificar']) && isset($_REQUEST['tipoUsuario'])){
        $_SESSION['tipoNuevo'] = $_REQUEST['tipoUsuario'];
        modificarTipoUsuario($_SESSION['usuarioModificar'], $_SESSION['tipoNuevo']);
        unset($_SESSION['usuarioModificar']);
        unset($_SESSION['tipoNuevo']);
    }
}else{
    require_once ("gui/usuarioInv-Administrador.html");
}
?>
<a href="ejercicio1.php"><button>Volver</button></a>
</body>
</html>