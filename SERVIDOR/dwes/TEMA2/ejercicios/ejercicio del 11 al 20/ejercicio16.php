<!DOCTYPE html>
<html lang="en">
<head>
<title>Ejercicios tema2_4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Visual Studio Code" />
    <meta name="author" content="Laura Martin Vicente" />
</head>
<body>
    <?php
        $numero1 = $_REQUEST['numero1'];
        $numero2 = $_REQUEST['numero2'];
        $operacion = $_REQUEST['operacion'];

        //echo $numero1, $numero2, $operacion;

        switch($operacion){
            case 1: 
                echo ($numero1 + $numero2);
                break;
            case 2:
                echo ($numero1 - $numero2);
                break;
            case 3: 
                echo ($numero1 * $numero2);
                break; 
            case 4:
                echo ($numero1 / $numero2);
                break;
            case 5: 
                echo ($numero1 % $numero2);
                break;
            default:
                echo "Error";
        }
    ?>
</body>
</html>