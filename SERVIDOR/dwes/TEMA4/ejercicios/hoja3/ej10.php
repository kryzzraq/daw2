<?php
class Cuadrado{
    public $lado;

    public function setLado($atrib){
        $this->lado = $atrib;
    }

    public function getPerimetro(){
        return $this->lado*4;
    }

    public function getArea(){
        return pow($this->lado,2);
    }

    public function __clone(){
        $this->lado = $this->lado*2;
    }
}
$c1= new Cuadrado();
$c1->setLado(4);
$c2 = $c1;

$c2->setLado(2);

$c3= clone $c1;


//Son iguales porque apuntan a la misma referencia de memoria.
echo "Perimetro de c1: ".$c1->getPerimetro()  . "<br/>";
echo "Perimetro de c2: ".$c2->getPerimetro() . "<br/>";
echo "Área de c1: ".$c1->getArea() . "<br/>";
echo "Área de c2: ".$c2->getArea() . "<br/>";

//Las clonaciones no apuntan a la misma dirección de memoria.
echo "Perimetro de c3: ".$c3->getPerimetro() . "<br/>";
echo "Área de c3: ".$c3->getArea() . "<br/>";