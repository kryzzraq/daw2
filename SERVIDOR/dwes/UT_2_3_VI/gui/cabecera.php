<header class="cabecera">
    <div class="titulo"> Proyecto 2º DAW - DWES  </div>
    <div class="login">
        <?php
        /**
         * Este formulario será llamado de tres maneras: Sin ningún dato, para validar un usuario y clave, para
         * desconectarse.
         *
         * Las condiciones son:
         *      1.- Si la sesion tiene ya un usuario validado, presentará un formulario de desconexión
         *      2.- Si se reciben datos de usuario y clave, pero no hay usuario en sesión se validará y como 1
         *      3.- Si se solicita cerrar la sesión se presenta el formulario de validación
        */
        $us=$_REQUEST['txtUser']??"";
        $pw=$_REQUEST['txtPass']??"";//Estos dos campos solo estarán activos cuando venga de validar
        $cerrarSess=$_REQUEST['hdnSess']??false; //Este campo solo estará activo cuando venga de cerrar sesión

        if($cerrarSess) unset($_SESSION['usuario']);//Si hay que cerrar la sesión porque se quiere desconectar vaciamos
        $usuAnt=$_SESSION['usuario']??""; //Ver si hay ya alguien validado.

        if ($usuAnt|| validarUsuario($us,$pw)){ //Si hay alguien ya validado no se vuelve a validar || es en cortocircuito.
            //Formulario de desconexión.
            ?>
            <form class="tbl" name="frmLogin" action="index.php" method="post">
                <input type="hidden" value="true" name="hdnSess">
                <input class="boton" type="submit" value="Cerrar Sesión" id="cmdCerrarSesion">
                <?php echo $_SESSION['usuario']; ?>
            </form>
            <?php
        }
        else {
            //Formulario para validar cuando no hay nadie almacenado ni se ha pedido validación y ha sido correcta
            ?>
            <form class="tbl" name="frmLogin" action="index.php" method="post">
                <label class="etiqueta">Usuario:</label><input class="cajatexto" type="text" name="txtUser" id="txtUser">
                <span></span>
                <label class="etiqueta">Clave:</label><input class="cajatexto" type="password" name="txtPass" id="txtPass">
                <input class="boton" type="button" value="Validar" id="cmdValidar">
            </form>
            <?php
        }
        ?>
    </div>
</header>
<ul class="menu">
    <li><a href="importarCSV.php">Importar CSV</a></li>
    <li><a href="exportarCSV.php">Exportar CSV</a></li>
    <li class="separador"><span href="">|</span></li>
    <li> <a href="crearAlumno.php">Crear Alumno</a></li>
    <li><a href="modificarAlumno.php">Modificar Alumno</a></li>
    <li><a href="borrarAlumno.php">Borrar Alumno</a></li>
    <li><a href="consultarAlumno.php">Consultar Alumno</a></li>
</ul>