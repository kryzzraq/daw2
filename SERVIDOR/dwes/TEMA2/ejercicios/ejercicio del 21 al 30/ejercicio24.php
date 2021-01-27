<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $nombre = $_REQUEST['nombre']??"";
            $apellido = $_REQUEST['ape']??"";

            function validarUsuario($nombre,$apellido) {
                $existe=false;
                if (!empty($nombre) && empty(!$apellido)) $existe=true;
                return $existe;
            }
        ?>
        <form name="datos" method="GET" action="ejercicio24.php">
            Nombre: <input type="text" name="nombre"><br/>
            Apellido: <input type="text" name="ape"><br/>
            <input type="submit" value="Enviar">
        </form>
        <?php
            if(validarUsuario($nombre,$apellido)){
                echo "Bienvenido/a ",$nombre," ",$apellido,".";
            }
        ?>
    </div>
</body>
</html>