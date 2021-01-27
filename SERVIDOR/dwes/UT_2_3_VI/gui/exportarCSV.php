<h1>Exportar CSV</h1>

<form name="frmExportarCSV" action="exportarCSV.php" class="tbl_datos" method="post">
    <label class="etiqueta">Elige la tabla:</label>
    <select name="lstTabla">
        <option value="alumnos">Alumnos</option>
        <option value="usuarios">Usuarios</option>
    </select>
    <label class="etiqueta"></label>
    <input class="boton" type="submit" value="Exportar" id="cmdEnviar">
</form>