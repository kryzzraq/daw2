<?php session_start();?>
<?php require_once("accdat/BBDD.php");?>
<?php require_once("lib/ctes.php");?>
<?php require_once("lib/Funciones.php");?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="gui/gui.css" />
        <script type="text/javascript" src="js/eventos.js"></script>
    </head>
    <body onload="onLoad_body();">
        <?php require_once("gui/cabecera.php"); ?>
        <div class="cuerpo">
            <?php
            if (comprobarSeguridad()) {
               require("gui/notAllowed.php");
            }
            else{
                if (!isset($_FILES['flFichero']['tmp_name']) || !strlen($_FILES['flFichero']['tmp_name']))
                    require("gui/importarCSV.php");
                else
                    importarCSV($_FILES['flFichero']['tmp_name'],$_REQUEST['lstTabla']);
            }
            ?>
        </div>
        <?php require_once("gui/pie.php"); ?>
    </body>
</html>