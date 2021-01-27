<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 03/12/2017
 * Time: 20:11
 */

/***
 * @param string $us  Nombre de usuario
 * @param string $pw  Clave de usuario
 * @return bool       True se valida, false en caso contrario
 */
require_once ("./lib/ctes.php");
require_once ("accdat/bdconf.php");

function validarUsuario(string $us,string $pw):bool {
    $validado=false;
    $tipo=USER_CONSULTOR;

    $cnn=mysqli_connect(HOST,US,PW,BBDD);
    if ($cnn){
        $sql="SELECT tipo FROM usuarios WHERE usuario='$us' AND clave='$pw'";
        $rest=mysqli_query($cnn,$sql);
        if (mysqli_num_rows($rest)==1){//si se valida
            $validado=true;
            $row=mysqli_fetch_assoc($rest);
            $tipo=$row['tipo'];
        }
    }
    mysqli_close($cnn);

    if ($validado){$_SESSION['usuario']=$us;$_SESSION['tipo']=$tipo;}
    else {unset($_REQUEST['usuario']);unset($_REQUEST['tipo']);}
    return $validado;
}

function validarUsuarioObj(string $us,string $pw):bool {
    $validado=false;
    $tipo=USER_CONSULTOR;

    @$con = new mysqli(HOST, US, PW, BBDD);
    if (!$con->connect_errno){
        $sql="SELECT tipo FROM usuarios WHERE usuario='$us' AND clave='$pw'";
        $rest = $con->query($sql);
        if ($rest->num_rows==1){
            $validado=true;
            $row=$rest->fetch_assoc();
            $tipo=$row['tipo'];
        }
        $con->close();
    }

    if ($validado){$_SESSION['usuario']=$us;$_SESSION['tipo']=$tipo;}
    else {unset($_SESSION['usuario']);unset($_SESSION['tipo']);}
    return $validado;
}

/**
 * @param string $tbl   Tabla a exportar
 * @return Void
 */
function generateCSV(string $tbl):void{
    $cnn=mysqli_connect(HOST,US,PW,BBDD);
    if ($cnn){
        $sql="SELECT * FROM $tbl";
        $rest=mysqli_query($cnn,$sql);
        echo "<table>";
        //primero para títulos
        if ($row=mysqli_fetch_assoc($rest)){
            $rt="";
            $r1="";
            foreach ($row as $key => $field) {
                $rt.="<td><b>$key</b><td>";
                $r1.="<td>$field<td>";
            }
            echo "<tr>$rt</tr>";
            echo "<tr>$r1</tr>";
        }
        //resto
        while ($row=mysqli_fetch_assoc($rest)){//si se valida
            echo "<tr>";
            foreach ($row as $field) echo "<td>$field<td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    mysqli_close($cnn);
}

/**
 * @param string $file  Localización del fichero en disco duro una vez subido
 * @param string $tbl   Tabla a cargar
 */
function importarCSV(string  $file,string $tbl):void{
    echo file_get_contents($file);
    $cnn=mysqli_connect(HOST,US,PW,BBDD);
    if ($cnn){
        $sql="load data local infile 'C:/xampp/htdocs/dwes/UT_2_3_VI/csv.csv' INTO TABLE alumnos FIELDS TERMINATED BY ','LINES TERMINATED BY  '\n'";
        //$sql="LOAD DATA LOCAL INFILE '$file' INTO TABLE $tbl";
        $rest=mysqli_query($cnn,$sql);
        if (!mysqli_errno($cnn)) echo "Carga completada";
        else echo "Fallo de carga:".mysqli_error($cnn);
    }
    mysqli_close($cnn);
}

/**
 * @return array    cjto de vias de la bbdd
 */
function getTiposVias(){
    $vias=[];
    $cnn=mysqli_connect(HOST,US,PW,BBDD);
    if ($cnn){
        $sql="SELECT * FROM tipovia";
        $rest=mysqli_query($cnn,$sql);
        while ($row=mysqli_fetch_assoc($rest)){//si se valida
            $vias[$row['cod']]=utf8_encode($row['descri']);
        }
    }
    mysqli_close($cnn);
    print_r($vias);
    return $vias;
}

/**
 * Utilizaremos sentencias preparadas para evitar problemas de datos al insertar en la BBDD
 * @param array ...$arg en orden los parámetros de la tabla
 * @return bool     si se inserta correctamente true
 */
function crearAlumno(...$arg){
    $ret=false;
    $cnn=mysqli_connect(HOST,US,PW,BBDD);
    if ($cnn){
        $sql="INSERT INTO alumnos (nombre,apellidos,dni,fechaNacimiento,tipoVia,nombreVia,numeroVia,telefono,localidad)
          VALUES (?,?,?,?,?,?,?,?,?);";
        $stmt = mysqli_prepare($cnn, $sql);
        mysqli_stmt_bind_param($stmt, "ssssissss",$arg[0],$arg[1],$arg[2],$arg[3],
                $arg[4],$arg[5],$arg[6],$arg[7],$arg[8]);
        if (mysqli_stmt_execute($stmt)) $ret=true;
    }
    mysqli_close($cnn);
    return $ret;
}
