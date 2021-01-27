<?php
class Titulo{
    private $texto;
    private $posicion;
    private $colorTexto;
    private $colorFondo;

    function __construct(){
        $this->texto = "";
        $this->posicion = "center";
        $this->colorTexto = "white";
        $this->colorFondo = "black";
    }

    function setTexto($texto){
        $this->texto = $texto;
    }

    function setPosicion($pos){
        $this->posicion = $pos;
    }

    function setColorTexto($color){
        $this->colorTexto = $color;
    }

    function setColorFondo($color){
        $this->colorFondo = $color;
    }

    function getTexto(){
        return $this->texto;
    }

    function getPosicion(){
        return $this->posicion;
    }

    function getColorTexto(){
        return $this->colorTexto;
    }

    function getColorFondo(){
        return $this->colorFondo;
    }

    function pintarTexto(){
        echo "<p style='background-color:$this->colorFondo; color:$this->colorTexto; text-align: $this->posicion;' >$this->texto</p>";
    }
}

$texto = new Titulo();

$texto->setTexto("Laura Martin");
$texto->setColorFondo("pink");
$texto->setColorTexto("black");
$texto->pintarTexto();