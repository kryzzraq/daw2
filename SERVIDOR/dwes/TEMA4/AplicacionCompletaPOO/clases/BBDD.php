<?php
class BBDD extends mysqli {
    private const HOST = 'localhost';
    private const USER = 'root';
    private const PW = '';
    private const BBDD = 'escuela';
    private $bbdd;

    public function __construct(){
        //creo una nueva conexión y le paso los datos
        $this->bbdd = new mysqli();
        $this->bbdd->connect(self::HOST, self::USER, self::PW, self::BBDD);
    }

    public function getTiposVias(){
        $ret = null;
        $sql = "SELECT * FROM TipoVia";
        $result = $this->bbdd->query($sql);
        while ($row = $result->fetch_assoc())
            $ret[]= $row;
        return $ret;
    }

    public function insertar($persona){
        if($persona instanceof Persona){
            $sql = "insert into alumnos (nombre, apellidos, dni, fechaNacimiento, 
                     tipoVia, nombreVia, numeroVia, telefono, localidad) values
                       (lower('{$persona->nombre}'),lower('{$persona->apellidos}'),lower('{$persona->dni}'), lower('{$persona->fechaNac}'),
                       '{$persona->tipoVia}',lower('{$persona->nombreVia}'), '{$persona->numVia}', '{$persona->telef}',lower('{$persona->localidad}'))";
            if($this->bbdd->query($sql)){
                echo "Persona añadida correctamente a la base de datos<br/>";
            }else{
              echo "Error, vuelva a intentarlo.<br/>";
            }
            unset($this->bbdd);
        }
    }

}