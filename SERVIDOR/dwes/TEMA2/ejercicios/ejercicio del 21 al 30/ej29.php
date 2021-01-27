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
    <?php
        if(!isset($_REQUEST['conjuntoValores'])){?>
            <form action="ej29.php" method="post" name="form">
                <label for="conjuntoValores">¿Cuántos valores vamos a guardar?</label>
                <input type="number" min="0" name="conjuntoValores">
                <input type="submit" value="Enviar" name="submit">
            </form>
        <?php
        }else{
            $numeroValores = $_REQUEST['conjuntoValores'];
            echo '<form action="ej29.php" method="post" name="form">';
            for($i=0;$i<$numeroValores;$i++){
                echo "<label for='num'.$i.'>Ingresa un número " . ($i+1) . " </label>";
                echo "<input type='number' name='num$i'><br/>";
            }?>
            <label for='operacion'>Selecciona la operación que quieres realizar:</label>
            <select name="operacion" id="operacion">
                <option value="minimo">Mínimo</option>
                <option value="maximo">Máximo</option>
                <option value="suma">Sumatorio</option>
                <option value="media">Media</option>
            </select> <br/>
            <?php
            echo "<input type='hidden' value='$numeroValores' name='numeroValores'>";
            echo "<input type='submit' value='Enviar' name='submit'>";
            echo "</form>";
        }
        if(isset($_REQUEST['operacion'])){
            $arrayNum = [];

            for($i=0; $i<$_REQUEST['numeroValores']; $i++){
                $arrayNum[$i] = $_REQUEST['num'.$i];
            }

            switch ($_REQUEST['operacion']){
                case 'minimo':
                    echo "El valor mínimo del array es: " . min($arrayNum);
                    break;
                case 'maximo':
                    echo "El valor máximo del array es: " . max($arrayNum);
                    break;
                case 'suma':
                    $suma = 0;
                    for($i = 0; $i < count($arrayNum); $i++){
                        $suma += $arrayNum[$i];
                    }
                    echo "La suma de todos los valores es: " . $suma;
                    break;
                case 'media':
                    $suma = 0;
                    for($i = 0; $i < count($arrayNum); $i++){
                        $suma += $arrayNum[$i];
                    }
                    echo "La media de todos los valores es: " . $suma / count($arrayNum);
                    break;
                default:
                    echo "Error";
            }
        }
    ?>
</body>
</html>