<form action="insertar.php" method="post" name="frmInsertarDatos">
    <table>
        <tr>
            <td>Nombre:</td>
            <td><input type="text" name="nombre" id="nombre"></td>
        </tr>
        <tr>
            <td>Apellidos:</td>
            <td><input type="text" name="apellidos" id="apellidos"></td>
        </tr>
        <tr>
            <td>DNI:</td>
            <td><input type="text" name="dni" id="dni"></td>
        </tr>
        <tr>
            <td>Fecha de nacimiento:</td>
            <td><input type="date" name="fechaNac" id="fechaNac"></td>
        </tr>
        <tr>
            <td>Tipo de vía:</td>
            <td>
            <?php
            $app = new Aplicacion();$app->printTipoVia()?></td>
        </tr>
        <tr>
            <td>Nombre vía:</td>
            <td><input type="text" name="nombrevia" id="nombrevia"></td>
        </tr>
        <tr>
            <td>Nº vía:</td>
            <td><input type="number" name="numVia" id="numVia"></td>
        </tr>
        <tr>
            <td>Teléfono:</td>
            <td><input type="tel" name="telefono" id="telefono"></td>
        </tr>
        <tr>
            <td>Localidad:</td>
            <td><input type="text" name="localidad" id="localidad"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Enviar"></td>
        </tr>
    </table>
</form>
