<?php
class Empleado{
    private $nombre;
    private $sueldo;

    public function __construct(){
        $arrayAtributos = func_get_args();
        switch (count($arrayAtributos)){
            case 2:
                $this->nombre= $arrayAtributos[0];
                $this->sueldo = $arrayAtributos[1];
                break;
            default:
                $this->nombre = "Anonimo";
                $this->sueldo = 1000;
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getSueldo(){
        return $this->sueldo;
    }

    public function __get($param){
        if($param === "nombre"){
            return $this->nombre;
        }elseif ($param==="sueldo"){
            return $this->sueldo;
        }
    }
}

class Trabajador{
    private $sueldo;
}