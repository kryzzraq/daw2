<!DOCTYPE html>
<html lang="en">
<head>
<title>
    <?php
    $num = $_REQUEST['numero'];
    $operacion = $_REQUEST['operacion'];
    echo $operacion;
    ?>
</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Visual Studio Code" />
    <meta name="author" content="Laura Martin Vicente" />
</head>
<body>
    <?php
    echo 'Has escogido la operación '.$operacion.':<br/>';
        switch($operacion){
            case "opuesto":
                $opuesto = 0 - $num;
                echo 'El resultado es: '.$opuesto;
                break;
            case "inverso":
                $inverso = 
                /*he buscado informacion sobre esta operacion
                y no me ha quedado claro que es, por lo tanto no
                puedo hacer esta parte del ejercicio*/
                break;
            case "cuadrado":
                echo $num*$num;
                break;
            case "raiz cuadrada":
                echo sqrt($num);
                break;
            case "sumatorio":
                    $resultado=0;
                 for(; $num <>0; $num--){
                    $resultado+=$num;
                 }
                 echo $resultado;
                break;
            case "factorial":
                $resultado=1;
                 for(; $num <>0; $num--){
                    $resultado*=$num;
                 }
                 echo $resultado;
                break;
            default: 
                echo "Error.";
        
        }
    ?>
</body>
</html>