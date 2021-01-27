<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Visual Studio Code" />
    <meta name="author" content="Laura Martin Vicente" />
    <title>Ejercicio21</title>
</head>
<body>
    <?php
        $numEleg = $_REQUEST['numeros'];
        $operacion = $_REQUEST['operacion'];
        $valorIntermedio = 2;
        $arrayNum = array();

        for($i=0;$i<$numEleg; $i++){
            $arrayNum[$i] = $_REQUEST['numero'.$i.''];
        }

        switch ($operacion){
            case "minimo":
                for ($i=0;$i<$numEleg;$i++){
                    if($valorIntermedio>$arrayNum[$i]){
                        $valorIntermedio = $arrayNum[$i];
                    }
                }
                echo "El valor mínimo elegido es: ".$valorIntermedio;
                break;
                
            case "maximo":
                for ($i=0;$i<$numEleg;$i++){
                    if($valorIntermedio<$arrayNum[$i]){
                        $valorIntermedio = $arrayNum[$i];
                    }
                }
                echo "El valor máximo elegido es: ".$valorIntermedio;
                break;
            case "suma":
                $sumatorio=0;
                for ($i=0; $i<$numEleg;$i++){
                    $sumatorio += $arrayNum[$i];
                }
                echo "El sumatorio de los números es: ". $sumatorio;
                break;
            case "media":
                $sumatorio = 0;
                for ($i=0; $i<$numEleg;$i++){
                    $sumatorio += $arrayNum[$i];
                }
                echo "La media es: ". $sumatorio/$numEleg;
                break;
        }
    ?>
</body>
</html>