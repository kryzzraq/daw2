<?php
//creacion de clases en php
class Empleado{
    private $nombre;
    private $sueldo;
    public static $numEmpleado = 0;

    function __construct(){
        $arrayAtributos = func_get_args();
        switch (count($arrayAtributos)){
            case 1:
                if(is_int($arrayAtributos[0])){
                    $this->sueldo = $arrayAtributos[0];
                    $this->nombre = "empleado".self::$numEmpleado;
                } elseif(is_string($arrayAtributos[0])){
                    $this->nombre = $arrayAtributos[0];
                    $this->sueldo = 0;
                }
                break;
            case 2:
                if(is_int($arrayAtributos[0])){
                    $this->sueldo = $arrayAtributos[0];
                    if(is_string($arrayAtributos[1])){
                        $this->nombre = $arrayAtributos[1];
                    }
                } elseif(is_string($arrayAtributos[0])){
                    $this->nombre = $arrayAtributos[0];
                    if(is_int($arrayAtributos[1])){
                        $this->sueldo = $arrayAtributos[1];
                    }
                }
                break;
            default:
                $this->nombre = "empleado".self::$numEmpleado;
                $this->sueldo = 0;
                break;
        }
    }

    function getSueldo(){
        return $this->sueldo;
    }

    function getNombre(){
        return $this->nombre;
    }

    function  setSueldo($parametro){
        if(is_int($parametro)){
            $this->sueldo = $parametro;
            return true;
        } else {
            return false;
        }
    }

    function setNombre($param){
        if(is_string($param)){
            $this->nombre = $param;
            return true;
        }else{
            return false;
        }
    }

    function __get($propiedad){
        if(property_exists($this,$propiedad)){
            return $this->$propiedad;
        }else{
            return null;
        }
    }

    function __set($propiedad, $valor){
        if(property_exists($this,$propiedad)){
            if(is_int($propiedad) && is_int($valor)){
                $this->$propiedad = $valor;
            }elseif(is_string($propiedad) && is_string($valor)){
                $this->$propiedad = $valor;
            }
        }
    }

}

$empleado1 = new Empleado(20);
$empleado2 = new Empleado ("Laura", 20);
$empleado3 = new Empleado (40, "David");
$empleado4 = new Empleado();
$empleado5 = new Empleado("Jesus");