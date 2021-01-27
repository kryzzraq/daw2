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
                <form action="crear.php" method="post" name="crear">
                    <label class="etiqueta" for="nombre">Nombre:</label> <input type="text" name="nombre" id="nombre">
                    <label class="etiqueta" for="apellidos">Apellidos:</label> <input type="text" name="apellidos" id="apellidos">
                    <label class="etiqueta" for="dni">DNI:</label> <input type="text" name="dni" id="dni"><br/>
                    <label class="etiqueta" for="naci">Fecha de nacimiento:</label> <input type="text" name="naci" id="naci"><br/>
                    <label class="etiqueta" for="tipovia">Tipo de vía:</label>
                        <select name="tipovia" id="tipovia" class="cajatexto">
                            <?php
                                foreach (getTipoVias() as $key =>$val){
                                    echo "<option value='$key'> $val </option>";
                                }
                            ?>
                    <label class="etiqueta" for="nombreVia">Nombre vía:</label> <input type="text" name="nombrevia" id="nombrevia"><br/>
                    <label class="etiqueta" for="numVia">Número vía:</label> <input type="text" name="numvia" id="numvia"><br/>
                    <label class="etiqueta" for="tlfn">Teléfono:</label> <input type="text" name="tlfn" id="tlfn"><br/>
                    <label class="etiqueta" for="localidad">Localidad:</label> <input type="text" name="localidad" id="localidad"><br/>
                            <input type="button" value="Crear alumno">
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