<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ingredientes = [];
        $ingredientes['Tamaño']= $_REQUEST['tamano']??0;
        $ingredientes['Masa'] = $_REQUEST['base']??0;
        $ingredientes['Salsa'] = $_REQUEST['salsa']??0;
        $ingredientes['Pollo'] = $_REQUEST['pollo']??0;
        $ingredientes['Bacon'] = $_REQUEST['bacon']??0;
        $ingredientes['Jamon'] = $_REQUEST['jamon']??0;
        $ingredientes['Cebolla'] = $_REQUEST['cebolla']??0;
        $ingredientes['Aceitunas'] = $_REQUEST['aceitunas']??0;
        $ingredientes['Pimiento'] = $_REQUEST['pimiento']??0;
        $total = 0;

        
        echo "Facura:<br/>";
        foreach ($ingredientes as $ingrediente => $valor){
            echo $ingrediente,": ",$valor,"<br/>";
            $total += $valor;
		}
        
        echo "<h2>Total: ",$total,"</h2>";
        
    ?>
</body>
</html>