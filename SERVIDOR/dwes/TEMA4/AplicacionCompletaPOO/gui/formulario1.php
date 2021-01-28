<form action="insertar.php" method="post" name="frmInsertarDatos">
    <table>
        <tr>
            <td>Nombre:</td>
            <td><input type="text" name="nombre" id="nombre" required="required"></td>
        </tr>
        <tr>
            <td>Apellidos:</td>
            <td><input type="text" name="apellidos" id="apellidos" required="required"></td>
        </tr>
        <tr>
            <td>DNI:</td>
            <td><input type="text" name="dni" id="dni" required="required"></td>
        </tr>
        <tr>
            <td>Fecha de nacimiento:</td>
            <td><input type="date" name="fechaNac" id="fechaNac" required="required"></td>
        </tr>
        <tr>
            <td>Tipo de vía:</td>
            <td>
            <?php
            $app = new Aplicacion();$app->printTipoVia()?></td>
        </tr>
        <tr>
            <td>Nombre vía:</td>
            <td><input type="text" name="nombrevia" id="nombrevia" required="required"></td>
        </tr>
        <tr>
            <td>Nº vía:</td>
            <td><input type="number" name="numVia" id="numVia" required="required"></td>
        </tr>
        <tr>
            <td>Teléfono:</td>
            <td><input type="tel" name="telefono" id="telefono" required="required"></td>
        </tr>
        <tr>
            <td>Localidad:</td>
            <td><input type="text" name="localidad" id="localidad" required="required"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Enviar"></td>
        </tr>
    </table>
</form>
