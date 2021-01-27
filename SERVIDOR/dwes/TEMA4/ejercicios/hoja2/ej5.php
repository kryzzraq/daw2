<?php
class Menu{
    public static $Items = array();

    function cargarItem($item){
        array_push(self::$Items, $item);
    }

    function mostrarElementoH(){
        foreach (self::$Items as $valor){
            echo $valor->pintarItem();
        }
    }

    function mostrarElementoV(){
        foreach (self::$Items as $valor){
            echo $valor->pintarItem() . "<br/>";
        }
    }

}

class Item{
    public $titulo;
    public $hipervinculo;

    function __construct($tit,$hiper){
        $this->titulo = $tit;
        $this->hipervinculo = $hiper;
    }

    function getTitulo(){
        return $this->titulo;
    }

    function pintarItem(){
        echo "Titulo: $this->titulo ";
        echo "Hipervínculo: $this->hipervinculo ";
    }
}

$elem1 = new Item("Titu1","hiper1");
$elem2 = new Item("Titu2","hiper2");

$menu1 = new Menu();
$menu1->cargarItem($elem1);
$menu1->cargarItem($elem2);

$menu1->mostrarElementoV();
$menu1->mostrarElementoH();