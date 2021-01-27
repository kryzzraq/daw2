<h1>Importar CSV</h1>

<form name="frmImportarCSV" action="importarCSV.php" method="post" class="tbl_datos" enctype="multipart/form-data">
    <label class="etiqueta">Elige la tabla:</label>
    <select name="lstTabla">
        <option value="alumnos">Alumnos</option>
        <option value="usuarios">Usuarios</option>
    </select>
    <label class="etiqueta">Elige el fichero:</label>
    <input type="file" name="flFichero">
    <label class="etiqueta"></label>
    <input class="boton" type="submit" value="Importar" id="cmdEnviar">
</form>
<br>
<p class="nota"><b>Nota:</b> Se toma el siguiente formato de fichero obligatorio.
    Campos terminados en: Tabulador, encerrados entre comillas simples, Usando \\ como caracter par
    escapar los cartacteres, lineas terminadas en salto de línea (\n) empezando en la primera línea.</p>