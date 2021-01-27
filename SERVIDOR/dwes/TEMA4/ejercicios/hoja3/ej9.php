<?php
class Cuadrado{
    private $lado;

    public function setLado($atrib){
        $this->lado = $atrib;
    }

    public function getPerimetro(){
        return $this->lado*4;
    }

    public function getArea(){
        return pow($this->lado,2);
    }

}
$c1= new Cuadrado();
$c1->setLado(4);
$c2 = $c1;

$c2->setLado(2);

echo "Perimetro de c1: ".$c1->getPerimetro()  . "<br/>";
echo "Perimetro de c2: ".$c2->getPerimetro() . "<br/>";
echo "Área de c1: ".$c1->getArea() . "<br/>";
echo "Área de c2: ".$c2->getArea() . "<br/>";

//Son iguales porque apuntan a la misma referencia de memoria.