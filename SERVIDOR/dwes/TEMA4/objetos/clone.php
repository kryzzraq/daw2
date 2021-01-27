<?php
class Padre{
    public $nm;
    public $hijo;

    public function __construct($nm,$h){
        $this->nm = $nm;
        $this->hijo=$h;
    }

    public function __clone(){
        $this->hijo = clone $this->hijo;
    }
    public function __toString(){
        return "Padre:" .$this->nm . $this->hijo . "<br/>";
    }
}


class Hijo{
    public $nm;

    public function __construct($nm = '-----'){
        $this->nm = $nm;
    }

    public function set_nm($nm){
        $this->nm = $nm;
    }

    public function __toString(){
        return "Hijo:" . $this->nm;
    }
}

$h = new Hijo("Hijo1");
$p1 = new Padre("Padre1",$h);
var_dump($p1) ;

$p2 = $p1;
var_dump($p2) ;

//$p2->hijo->set_nm("Cambio de hijo");

echo $p1;

echo "-------<br/>";
$p3 = clone $p1;
echo $p1;
$p3->hijo->set_nm("Cambio de hijo 2");
echo $p1;
echo $p3;