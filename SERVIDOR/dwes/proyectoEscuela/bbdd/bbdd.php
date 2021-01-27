<?php
const HOST = 'localhost';
const USER = 'root';
const PW = '';
const BBDD = 'escuela';

function validar_usuario($usuario, $password){
    $conect = mysqli_connect(HOST,USER,PW,BBDD);
    $tipoUsu = "consultor";
    $validado = false;
    if($conect){
        $sql="SELECT tipo FROM usuarios WHERE usuario='$usuario' AND clave='$password'";
        $resultadoUsuarios = mysqli_query($conect,$sql);
        //var_dump(mysqli_num_rows($resultadoUsuarios));
        if(mysqli_num_rows($resultadoUsuarios) == 1){
            $row = mysqli_fetch_assoc($resultadoUsuarios);
            $tipoUsu = $row['tipo'];
            $validado = true;
        }
    }
    mysqli_close($conect);
    if($validado){
        $_SESSION['usuario'] = $usuario;
        $_SESSION['tipo'] = $tipoUsu;
    } else {
        unset($_SESSION['usuario']);
        unset($_SESSION['password']);
    }
    return $validado;

}