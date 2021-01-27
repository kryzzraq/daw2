<?php
function validar_usuario(string $us,string $pw):bool {
    $validado=false;
    $tipo="invitado";

    $conexion=mysqli_connect(HOST,US,PW,BBDD);
    if ($conexion){
        $sql="SELECT tipo FROM usuarios WHERE usuario='$us' AND password='$pw'";
        $rest=mysqli_query($conexion,$sql);
        if (mysqli_num_rows($rest)==1){
            $validado=true;
            $row=mysqli_fetch_assoc($rest);
            $tipo=$row['tipo'];
        }
    }
    mysqli_close($conexion);

    if ($validado){
        $_SESSION['usuario']=$us;
        $_SESSION['tipo']=$tipo;
    }
    else {
        unset($_REQUEST['usuario']);
        unset($_REQUEST['tipo']);
    }
    return $validado;
}

function listarUsuarios() {
    $conexion = mysqli_connect(HOST,US,PW,BBDD);
    if ($conexion){
        $sql = "select usuario, email, tipo from usuarios";
        $resultadoUsuarios = mysqli_query($conexion,$sql);
        while($row = mysqli_fetch_assoc($resultadoUsuarios)){
            echo "Usuario: {$row['usuario']} E-mail: {$row['email']} Tipo: {$row['tipo']}<br/>";
        }
        mysqli_close($conexion);
    }
}

function obtenerUsuarios(){
    $conexion = mysqli_connect(HOST,US,PW,BBDD);
    if ($conexion) {
        $sql = "select distinct usuario from usuarios";
        $resultadoUsuarios = mysqli_query($conexion, $sql);
        echo "
        <form action='editar.php' method='post' name='formEditar'>
            <label for='confJug1'>Elige el usuario</label>
            <select name='usuario' id='usuario'>";
                while($row = mysqli_fetch_assoc($resultadoUsuarios)){
                    echo "<option name='{$row['usuario']}'>{$row['usuario']}</option>";
                }
                echo "
            </select>
            <input type='submit' value='Enviar'>
            </form>";
        mysqli_close($conexion);
    }
}

function modificarTipoUsuario($us,$tipo){
    $conexion = mysqli_connect(HOST,US,PW,BBDD);
    if ($conexion) {
        $sql = "UPDATE usuarios SET tipo = '$tipo' where usuario = '$us' ;";
        if(mysqli_query($conexion, $sql)){
            echo "Datos actualizados";
        }else{
            echo "Error";
        }
        mysqli_close($conexion);
    }
}

function registrarUsuario($us,$pass,$email){
    $conexion = mysqli_connect(HOST,US,PW,BBDD);
    if ($conexion) {
        #Al haber puesto el nombre de usuario como clave primaria no tengo que comprobar si ya existe
        #puesto que sql no deja tener dos valores repetidos como clave primaria
        $sql = "INSERT INTO usuarios (usuario, password, email, tipo) VALUES ('$us', '$pass', '$email','usu');";
        if(mysqli_query($conexion,$sql)){
            echo "Usuario registrado";
            #inicio la sesion con estos datos
            $_SESSION['usuario'] = $us;
            $_SESSION['tipo'] = 'usu';
        } else {
            echo "Error, vuelva a intentarlo";
        }
        mysqli_close($conexion);
    }
}

function intentoLoginTrue($us){
    $hoy = getdate();
    $cadenaFecha=$hoy['year'].$hoy['mon'].$hoy['mday']."_".$hoy['hours'].$hoy['minutes'];
    $conexion = mysqli_connect(HOST,US,PW,BBDD);
    if ($conexion) {
        $sql = "INSERT INTO log (fecha, usuario, conexion) VALUES ('$cadenaFecha', '$us', 'true');";
        mysqli_query($conexion,$sql);
        mysqli_close($conexion);
    }
}

function intentoLoginFalse($us){
    $hoy = getdate();
    $cadenaFecha=$hoy['year'].$hoy['mon'].$hoy['mday']."_".$hoy['hours'].$hoy['minutes'];
    $conexion = mysqli_connect(HOST,US,PW,BBDD);
    if ($conexion) {
        $sql = "INSERT INTO log (fecha, usuario, conexion) VALUES ('$cadenaFecha', '$us', 'false');";
        mysqli_query($conexion,$sql);
        mysqli_close($conexion);
    }
}

function verContenidoLog(){
    $conexion = mysqli_connect(HOST,US,PW,BBDD);
    if ($conexion){
        $sql = "select fecha, usuario, conexion from log";
        $resultadoLog = mysqli_query($conexion,$sql);
        while($row = mysqli_fetch_assoc($resultadoLog)){
            echo "Fecha: {$row['fecha']} Usuario: {$row['usuario']} Conexion: {$row['conexion']}<br/>";
        }
        mysqli_close($conexion);
    }
}