<?php session_start();?>
<?php require_once("accdat/BBDD.php");?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="proyecto web insituto">
    <meta name="description" content="aplicacion web que permite ver, modificar, crear o borrar datos de los alumnos.">
    <title>Proyecto 1 servidor</title>
    <link rel="StyleSheet" href="gui/formato.css" type="text/css">
    <script type="text/javascript" src="js/eventos.js"></script>
</head>
<body onload="onLoad_body();">
    <?php require_once("gui/cabecera.php");?>
    <?php require_once("gui/aside.php");?>
        <div id="cuerpo">
            <?php 
                if(!isset($_SESSION['tipo']) || $_SESSION['tipo'] === 'c'){
                    require_once("C:/xampp/htdocs/dwes/TEMA2/UT_2_3/gui/prohibido.html");
                }else{ ?>
                    <form action="importar.csv" method="POST" name="importar" enctype="multipart/form-data">
                        Seleccione la tabla: <br/>
                        <select name="exportarArchivo" id="exportar">
                            <option value="alumnos">Alumnos</option>
                            <option value="usuarios">Usuarios</option>
                        </select> <br/>
                        Seleccione el archivo a importar: <br/>
                        <input type="file" value="fmlImportar" name="fmlImportar"><br/>
                        <input type="submit" value="Enviar" name="enviar" id="enviar">
                    </form>
                <?php
                }
                    $file = $_REQUEST['fmlImportar']??"";
                    $tabla = $_REQUEST['exportarArchivo']??"";

                    importarCSV($file,$tabla);

            ?>
        </div>
    <?php require_once("gui/footer.php");?>
</body>
</body>
</html>