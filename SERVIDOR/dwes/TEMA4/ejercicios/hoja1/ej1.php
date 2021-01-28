<?php
class Empleado{
    private $nombre;
    private $sueldo;
    public static $contadorEmpleado;

    public function __construct($atrib1= "Empleado", $atrib2=0){
        self::$contadorEmpleado++;

        if(is_string($atrib1)){
            $this->nombre = $atrib1;
            if(is_int($atrib2)){
                $this->sueldo = $atrib2;
            }
        }elseif (is_string($atrib2)){
            $this->nombre = $atrib2;
            if(is_int($atrib1)){
                $this->sueldo = $atrib1;
            }
        }elseif(is_int($atrib1)){
            $this->sueldo=$atrib1;
            $this->nombre="Empleado";
        }
    }

    public function set_nombre($nom){
        if (is_string($nom)){
            $this->nombre = $nom;
            return true;
        }else return false;

    }

    public function set_sueldo($suel){
        if(is_int($suel)){
            $this->sueldo = $suel;
            return true;
        } else return false;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function  getSueldo(){
        return $this->sueldo;
    }

    public function __get($nombrePropiedad){
        if(property_exists($nombrePropiedad)){
            return $this->$nombrePropiedad;
        } else return null;
    }

    public function __set($nombrePropiedad, $valor){

    }

}
$empl1=new Empleado();
var_dump($empl1);
$empl2 = clone $empl1;
$empl2->set_nombre('Empleado'.Empleado::$contadorEmpleado);
var_dump($empl2);