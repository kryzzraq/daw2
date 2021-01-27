<?php
//"LOAD DATA LOCAL INFILE ' $file ' INTO TABLE ' $tabla ' ";
    require_once("accdat/bdconfig.php");

    function validarUsuario($us,$pw) {
        echo"entro a la funcion";
        $validado = false;
        $tipo = "c";

        @$cnn = mysqli_connect(HOST,US,PW,BBDD);

        if($cnn){
            $sql = "SELECT tipo FROM usuarios WHERE usuario='$us' AND clave ='$pw'";
            $rest = mysqli_query($cnn,$sql);
            if(mysqli_num_rows($rest) == 1){ //si se valida
                $validado = true;
                $row = mysqli_fetch_assoc($rest);
                $tipo = $row['tipo'];
            } 
            mysqli_close($cnn);
        }

        if ($validado){
            $_SESSION['usuario'] = $us;
            $_SESSION['tipo'] = $tipo;
        }else {
            //unset($_SESSION['usuario']);
            unset($_SESSION[$tipo]);
        }
   
        return $validado;



        /*
        // Hay que comprobar en la BBDD si valida 
        //Hay que almacenar el tipo en la sesión para utilizarlo siempre
        if ($us==="a" && $pw==="a") 
            $validado=true;
        //=================================/
        */
    }

    function importarCsv($file,$tabla){
        //ponemos la @ para eliminar posibles errores
        @$cnn = mysqli_connect(HOST,US,PW,BBDD);
        if($cnn){
            $sql = "LOAD DATA LOCAL INFILE ' $file ' INTO TABLE ' $tabla ' ";
            $rest = mysqli_query($cnn,$sql);
            //echo $sql;
            if(!mysqli_errno($rest)){ //si se valida
                echo "Carga completada";
            } else{
                echo "Fallo de carga";
            }
        }
        
            mysqli_close($cnn);
    }
    
?>