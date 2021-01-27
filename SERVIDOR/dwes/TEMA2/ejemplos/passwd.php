<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fichero = fopen("passwd.txt","r");
        if($fichero){
            while($line=fgetcsv($fichero,0,":"))
            echo $line[0]."<->".$line[6] ."<br/>";
        }
    ?>
</body>
</html>