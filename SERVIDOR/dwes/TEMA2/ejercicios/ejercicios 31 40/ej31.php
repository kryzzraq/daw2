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
        $cartas = [1,2,3];
        $imagenCartas[0] = "imagenes/astrebol.jpg";
        $imagenCartas[1] = "imagenes/dostrebol.jpg";
        $imagenCartas[2] = "imagenes/trestrebol.jpg";

        //mezclo las imagenes:
        shuffle($imagenCartas);

        //muestro las imágenes si no se ha enviado nada todavía:
        if(!isset($_REQUEST['posicion']) && !isset($_REQUEST['barajar'])){
            foreach ($imagenCartas as $indice => $valor){
                echo "<img src='$valor'>";
            }
        ?>
            <form action="ej31.php" method="post" name="barajar">
                <input type="submit" value="Barajar" name="barajar">
            </form>
        <?php
        }
        ?>

    <?php
        if(isset($_REQUEST['barajar'])) {
            shuffle($cartas);
            for($i=0; $i< count($cartas); $i++){
                echo "<img src='imagenes/dorso.jpg'>";
            }
            ?>
                <br/>
        Elija la posición dónde cree que está el as: <br/>
        <form action="ej31.php" method="post" name="elegirCarta">
            <label for="posicion">Primera carta: </label>
            <input type="radio" name="posicion" id="posicion" value="0">
            <label for="posicion">Segunda carta: </label>
            <input type="radio" name="posicion" id="posicion" value="1">
            <label for="posicion">Tercera carta: </label>
            <input type="radio" name="posicion" id="posicion" value="2">
            <br/>
            <?php
                for($i = 0; $i < count($cartas); $i++){
                    echo "<input type='hidden' value='$cartas[$i]' name='dato[$i]' >";
                }
            ?>
            <input type="submit" value="Enviar">
        </form>
        <?php
        }
        if (isset($_REQUEST['posicion'])){
            $cartas2 = $_REQUEST['dato'];
            if(1 == $cartas2[$_REQUEST['posicion']]){
                echo "<h2>Enhorabuena, ¡has ganado!</h2>";
            } else {
                echo "<h2>Lo siento, intentelo de nuevo.</h2>";
            }
        }
        ?>
</body>
</html>