<?php
class BBDD extends mysqli {
    private const HOST = 'localhost';
    private const USER = 'root';
    private const PW = '';
    private const BBDD = 'escuela';
    private $bbdd;

    public function __construct()
    {
        //creo una nueva conexión y le paso los datos
        $this->bbdd = new mysqli();
        $this->bbdd->connect(self::HOST, self::USER, self::PW, self::BBDD);
    }

    public function __destruct(){
        //si existe la conexión la cierro
        if(!$this->bbdd) $this->bbdd->close();
        //pongo la propiedad del objeto a null
        $this->bbdd=null;
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
            $sql = "insert into alumnos (nombre, apellidos, dni, fechaNacimiento, tipoVia, nombreVia, numeroVia, telefono, localidad) values
             ('{$persona->nombre}','{$persona->apellidos}','{$persona->dni}', '{$persona->fechaNac}',
             '{$persona->tipoVia}','{$persona->nombreVia}', '{$persona->numVia}', '{$persona->telef}','{$persona->localidad}')";
            var_dump($persona);

            //$this->query($sql);
                echo "Persona añadida a la base de datos";

        }
    }

}