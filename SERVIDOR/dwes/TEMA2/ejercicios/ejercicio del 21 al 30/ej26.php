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

    <form action="ej26.php" method="post" name="form">
        <label for="dato1">Dato 1:</label><input type="text" name="dato1" id="dato1"><br/>
        <label for="dato2">Dato 2:</label><input type="text" name="dato2" id="dato2"><br/>
        <label for="dato3">Dato 3:</label><input type="text" name="dato3" id="dato3"><br/>
        <label for="dato4">Dato 4:</label><input type="text" name="dato4" id="dato4"><br/>
        <input type="submit" value="Enviar" name="submit">
    </form><br/>
    <?php
        if(isset($_REQUEST['submit'])){
            echo "<table border='1'>";
            echo "<tr><td>Nombre índice</td><td>Nombre valor</td></tr>";
            foreach($_REQUEST as $indice => $valor){
                echo "<tr><td>$indice</td><td>$valor</td></tr>";
            }
            echo "</table>";
        }
    ?>
</body>
</html>