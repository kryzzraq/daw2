<?php
interface Menu{
    public function mostrarItem();
    public function cargarElemento($obj);
}

class Item{
    private $titulo;
    private $hipervinculo;

    public function __construct($tit,$hip)
    {
        $this->titulo = $tit;
        $this->hipervinculo = $hip;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getHipervinculo(){
        return $this->hipervinculo;
    }
}

class MenuVertical implements Menu{
    private $items = array();

    public function mostrarItem()
    {
        foreach ($this->items as $valor){
            echo "Titulo: ". $valor->getTitulo(). "&nbsp";
            echo "Hipervínculo: ".$valor->getHipervinculo(). "&nbsp";

        }
    }

    public function cargarElemento($obj)
    {
        array_push($this->items, $obj);
    }
}

class MenuHorizontal implements Menu{
    private $items = array();

    public function mostrarItem()
    {
        foreach ($this->items as $valor){
            echo "Titulo: ". $valor->getTitulo() ."<br/>";
            echo "Hipervínculo: ". $valor->getHipervinculo() ."<br/>";
        }
    }

    public function cargarElemento($obj)
    {
        array_push($this->items, $obj);
    }

}

$item1 = new Item("titulo", "hipervinculo");
$horizontal = new MenuHorizontal();
$horizontal->cargarElemento($item1);
$horizontal->mostrarItem();

$vertical = new MenuVertical();
$vertical->cargarElemento($item1);
$vertical->mostrarItem();
