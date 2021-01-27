<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body>
        <form action="ej28.php" method="post" name="formulario">
            <label for="origen">Ciudad de origen:</label>
            <select name="origen" id="ciudadOrigen">
                <option value="barcelona">Barcelona</option>
                <option value="coruña">A coruña</option>
                <option value="madrid">Madrid</option>
                <option value="sevilla">Sevilla</option>
            </select> <br/>
            <label for="destino">Ciudad de destino:</label>
            <select name="destino" id="destino">
                <option value="barcelona">Barcelona</option>
                <option value="coruña">A coruña</option>
                <option value="madrid">Madrid</option>
                <option value="sevilla">Sevilla</option>
            </select> <br/>
            <input type="submit" value="Calcular distancia" name="submit">
        </form>
        <?php
        $distancias = array(
                    'barcelona' => array(
                        'barcelona' => 0,
                        'coruña' => 1188,
                        'madrid' => 621,
                        'sevilla' => 1046
                    ),
                    'coruña' => array(
                        'barcelona' => 1188,
                        'coruña' => 0,
                        'madrid' => 609,
                        'sevilla' => 947
                    ),
                    'madrid' => array(
                        'barcelona' =>621,
                        'coruña' => 609,
                        'madrid' => 0,
                        'sevilla' => 538
                    ),
                    'sevilla' => array(
                        'barcelona' => 1046,
                        'coruña' => 947,
                        'madrid' => 538,
                        'sevilla' =>0
                    )
        );

        if(isset($_REQUEST['submit'])){
            switch ($_REQUEST['origen']){
                case "barcelona":
                    echo "La distancia es de ". $distancias['barcelona'][$_REQUEST['destino']] ." km.";
                    break;
                case "coruña":
                    echo "La distancia es de ". $distancias['coruña'][$_REQUEST['destino']] ." km";
                    break;
                case "madrid":
                    echo "La distancia es de ". $distancias['madrid'][$_REQUEST['destino']] ." km";
                    break;
                case "sevilla":
                    echo "La distancia es de ". $distancias['sevilla'][$_REQUEST['destino']] ." km.";
                    break;
                default:
                    echo "Error";
            }
        }
        ?>
    </body>
</html>