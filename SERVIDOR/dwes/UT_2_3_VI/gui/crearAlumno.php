<h1>Crear Alumno</h1>
<div id="datosCentral" >
    <?php
        if(isset($_REQUEST['txtNombre'])){ //este if entrará con datos en los campos
            /* esto no sobra ya que no hay que confiar en la validación cliente */
            $nombre=$_REQUEST['txtNombre'];
            $apellidos=$_REQUEST['txtApellidos']??'';
            $dni=$_REQUEST['txtDNI']??'';
            $fechNac=$_REQUEST['txtFechaNac']??'';
            $tipoVia=$_REQUEST['lstTipoVia']??'';
            $nombreVia=$_REQUEST['txtNombreVia']??'';
            $numeroVia=$_REQUEST['txtNumeroVia']??'';
            $telefono=$_REQUEST['txtTelefono']??'';
            $localidad=$_REQUEST['txtLocalidad']??'';

            if (crearAlumno($nombre,$apellidos,$dni,$fechNac,$tipoVia,$nombreVia,$numeroVia,$telefono,$localidad))
                echo "<h2>Alumno: $nombre $apellidos creado</h2>";
        }
    ?>
    <form name="frmCrearAlumno" action="crearAlumno.php" method="post" class="gridDatos">
        <label class="etiqueta">Nombre:</label><input type="text" id="txtNombre" name="txtNombre" class="cajatexto" >
        <label class="etiqueta">Apellidos:</label><input type="text" id="txtApellidos" name="txtApellidos" class="cajatexto" >
        <label class="etiqueta">DNI:</label><input type="text" id="txtDNI" name="txtDNI" class="cajatexto" >
        <label class="etiqueta">Fecha Nacimiento:</label><input type="date" id="txtFechaNac" name="txtFechaNac" class="cajatexto" >
        <label class="etiqueta">Tipo Vía:</label>
        <select id="lstTipoVia" name="lstTipoVia" class="cajatexto" >
            <?php
                foreach (getTiposVias() as $key => $val)
                    echo "<option value='$key'>$val</option>"
            ?>
        </select>
        <label class="etiqueta">Nombre Vía:</label><input type="text" id="txtNombreVia" name="txtNombreVia" class="cajatexto" >
        <label class="etiqueta">Número Vía:</label><input type="text" id="txtNumeroVia" name="txtNumeroVia" class="cajatexto" >
        <label class="etiqueta">Teléfono:</label><input type="text" id="txtTelefono" name="txtTelefono" class="cajatexto" >
        <label class="etiqueta">Localidad:</label><input type="text" id="txtLocalidad" name="txtLocalidad" class="cajatexto" >
        <label class="etiqueta"></label><input type="button" value="Crear Usuario" onclick="onClick_crearAlumno();">
    </form>
</div>