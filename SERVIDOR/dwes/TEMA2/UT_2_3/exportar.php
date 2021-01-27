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
                    <form action="" method="" name="importar"></form>
                        Seleccione el archivo a exportar: <br/>
                        <select name="exportarArchivo" id="exportar">
                            <option value="opcion1">1</option>
                        </select>
                    </form>
                <?php
                }
            ?>
        </div>
    <?php require_once("gui/footer.php");?>
</body>
</body>
</html>