<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $file = $_REQUEST['fichero'];
        $tabla1 = $_REQUEST['tabla1'];
        $tabla2 = $_REQUEST['tabla2'];
        $resultado = "";

        
        $archivo = fopen($file.'.txt', 'w');

        for($i=0;$i<=10;$i++){
            $resultado = $i*$tabla1."\n";
            fwrite($archivo, $resultado);
        }
        fwrite($archivo, "\n");
        for($i=0;$i<=10;$i++){
            $resultado = $i*$tabla2."\n";
            fwrite($archivo, $resultado);
            
        }

        fclose($archivo);

    ?>
</body>
</html>