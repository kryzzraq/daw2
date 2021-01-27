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
//declaracion de constantes, la BBDD no me hace falta porque la pregunto luego.
const HOST = "localhost";
const US = "root";
const PW = "";

if(!isset($_REQUEST['nombreBBDD']) && !isset($_REQUEST['nombreBBDDHidden']) && !isset($_REQUEST['criterioBusqueda'])){?>
    <form action="ej4.php" method="post" name="frmBBDD">
        <label for="nombreBBDD">Selecciona la base de datos de la que quieres hacer la consulta:</label>
        <select name="nombreBBDD" id="nombreTabla">
            <option value="decine">Cine</option>
            <option value="jardineria">Jardinería</option>
            <option value="nba">NBA</option>
            <option value="world">Mundo</option>
        </select>
        <input type="submit" value="Consultar">
    </form>
<?php
}
//ejercicio 4: sql = show tables ->
if(isset($_REQUEST['nombreBBDD'])){
    $bbdd = $_REQUEST['nombreBBDD'];
    $conexion = mysqli_connect(HOST, US, PW, $bbdd);
    if($conexion){
        $query = "show TABLES";
        $result = mysqli_query($conexion,$query);
        echo "<form action='ej4.php' method='post' name='frmBBDD'>
                <label for='nombreTabla'>Selecciona la tabla del que quieres hacer la consulta:</label>
                <select name='nombreTabla' id='nombreTabla'>";
        while($row= mysqli_fetch_assoc($result)){
            echo "<option value='{$row['Tables_in_'.$bbdd]}'>".$row['Tables_in_'.$bbdd]."</option>";
        }
        echo "</select>
                <input type='hidden' name='nombreBBDDHidden' value='$bbdd' >
               <input type='submit' value='Enviar'>
            </form>";
    }
}
if(isset($_REQUEST['nombreBBDDHidden'])) {
    $tabla = ($_REQUEST['nombreTabla']);
    $bbdd = ($_REQUEST['nombreBBDDHidden']);
    $conexion = mysqli_connect(HOST, US, PW, $bbdd);
    $query = "SHOW COLUMNS FROM $tabla";
    if ($conexion) {
        $result = mysqli_query($conexion, $query);
        echo "
           <form action='ej4.php' name='campos' method='post'>
           <label for='nombreCampo'>Selecciona el campo del que quieres hacer la consulta:</label>
                <select name='nombreCampo' id='nombreCampo'>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='{$row['Field']}'>{$row['Field']}</option>";
        }

        echo "
                </select><br/>
                <label for='criterio'>Elige el criterio de búsqueda:</label>
                <select name='criterioBusqueda' id='criterioBusqueda'>
                    <option value='igual'>Igual a...</option>
                    <option value='contiene'>Contiene...</option>
                    <option value='empieza'>Empieza por...</option>
                    <option value='acaba'>Acaba en...</option>
                </select><br/>
                <label for='valor'>Criterio de búsqueda:</label>
                <input type='text' name='valor' id='valor'>
                <input type='hidden' name='tabla' value='$tabla'>
                <input type='hidden' name='bbdd' value='$bbdd'>
                <input type='submit' value='Consultar'>
            </form>
        ";
    }
}
    if(isset($_REQUEST['valor'])){
        $tabla = $_REQUEST['tabla'];
        $bbdd = $_REQUEST['bbdd'];
        $criterio = $_REQUEST['criterioBusqueda'];
        $nombreCampo = $_REQUEST['nombreCampo'];
        $valor = $_REQUEST['valor'];

        $conexion = mysqli_connect(HOST,US,PW,$bbdd);

        if($conexion){
            switch ($criterio){
                case "igual":
                    $query = "SELECT $nombreCampo from $tabla where lower($nombreCampo) = lower($valor)";
                    break;
                case "contiene":
                    $query = "SELECT $nombreCampo from $tabla where lower($nombreCampo) like lower('%$valor%')";
                    break;
                case "empieza":
                    $query = "SELECT $nombreCampo from $tabla where lower($nombreCampo) like lower('$valor%')";
                    break;
                case "acaba":
                    $query = "SELECT $nombreCampo from $tabla where lower($nombreCampo) like lower('%$valor')";
                    break;
                default:
                    echo "Error";
            }

            $result = mysqli_query($conexion,$query);
            //while($row...)
        }

}

?>

</body>
</html>