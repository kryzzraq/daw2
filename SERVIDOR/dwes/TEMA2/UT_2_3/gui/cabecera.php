<header>
        <br/><h1>IES Articpreste de Hita</h1>

        <?php
            $us = $_REQUEST['frmUsuario']??"";
            $pw = $_REQUEST['frmContr']??"";

            if(isset($_REQUEST['frmUsuario']))
                validarUsuario($us,$pw);

            if (isset($_SESSION['usuario'])){ 
        ?>
        <div id="cerrarsesion">
            <form class="cerrarsesion" name="frmLogin" action="index.php" method="post">
                <input type="hidden" id="cerrarSesion" name="cerrarSesion">
                <input type="submit" value="Cerrar sesión" id="cmdCerrarSesion">
            </form>
        </div>

        <?php
            } else {
        ?>
            <div id="iniciarsesion">
                <form class="iniciosesion" name="frmLogin" method="POST" action="index.php">
                    <label for="usuario">Usuario:</label>
                    <input type="text" id="frmUsuario" name="frmUsuario"><br/>
                    <label for="contraseña">Contraseña:</label>
                    <input type="password" id="frmContr" name="frmContr"><br/>
                    <input type="button" value="Validar" id="cmdValidar" name="cmdValidar">
                </form>
            </div>
        <?php
            }
        ?>
        <br/>
    </header>