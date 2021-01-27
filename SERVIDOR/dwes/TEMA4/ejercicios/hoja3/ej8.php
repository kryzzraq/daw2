<?php
class Tabla{
    private $celdas = array();
    private $filas;
    private $columnas;
    private $contenido;

    public function __construct(){
        $arrayAtributos = func_get_args();
        switch (count($arrayAtributos)){
            case 1:
                $this->filas = $arrayAtributos[0];
                $this->columnas = 1;
                $this->contenido = "";
                break;
            case 2:
                $this->filas = $arrayAtributos[0];
                $this->columnas = $arrayAtributos[1];
                $this->contenido = "";
                break;
            default:
                $this->filas = 1;
                $this->columnas = 1;
                $this->contenido = "";
        }
    }
}

class Celda{
    private $valor;
    private $colorTexto;
    private $colorFondo;

    public function __construct(){
        $arrayAtributos = func_get_args();
        switch (count($arrayAtributos)){
            case 3:
                $this->colorTexto = $arrayAtributos[0];
                $this->colorFondo = $arrayAtributos[1];
                $this->valor = $arrayAtributos[2];
                break;
            default:
                $this->valor = "";
                $this->colorTexto = "black";
                $this->colorFondo = "white";
                break;
        }
    }

}