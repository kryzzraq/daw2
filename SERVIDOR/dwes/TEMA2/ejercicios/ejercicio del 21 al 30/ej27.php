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
    <form action="ej27.php" method="post" name="formulario">
        <label for="ciudadOrigen">Ciudad de origen:</label>
            <select name="ciudadOrigen" id="ciudadOrigen">
                <option value="0">Barcelona</option>
                <option value="1">A coruña</option>
                <option value="2">Madrid</option>
                <option value="3">Sevilla</option>
            </select> <br/>
        <label for="ciudadDestino">Ciudad de destino:</label>
        <select name="ciudadDestino" id="ciudadDestino">
            <option value="0">Barcelona</option>
            <option value="1">A coruña</option>
            <option value="2">Madrid</option>
            <option value="3">Sevilla</option>
        </select> <br/>
        <input type="submit" value="Calcular distancia" name="submit">
    </form>
    <?php
        $distancias = array (
                            array(0,1188,621,1046),
                            array(1188,0,609,947),
                            array (621,609,0,538),
                            array(1046,947,538,0)
                        );
        if(isset($_REQUEST['submit'])){
            switch ($_REQUEST['ciudadOrigen']){
                case 0:
                    echo "La distancia es de ". $distancias[0][$_REQUEST['ciudadDestino']] . " km.";
                    break;
                case 1:
                    echo "La distancia es de ". $distancias[1][$_REQUEST['ciudadDestino']] . " km.";
                    break;
                case 2:
                    echo "La distancia es de ". $distancias[2][$_REQUEST['ciudadDestino']] . " km.";
                    break;
                case 3:
                    echo "La distancia es de ". $distancias[3][$_REQUEST['ciudadDestino']] . " km.";
                    break;
                default:
                    echo "Error";
            };
        }
    ?>
</body>
</html>