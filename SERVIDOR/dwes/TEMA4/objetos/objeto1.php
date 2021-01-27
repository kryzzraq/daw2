<?php
class Punto{
    protected $y;
    protected $x;

    public function get_x(){
        return $this->x;
    }

    public function set_x_y($x,$y){
        $this->x = $x;
        $this->y = $y;
    }
    public function __toString(){
        return "(x:{$this->x}, y:{$this->y})";
    }
}

$mi = new Punto();
$mi->set_x_y(2,4);

echo "Get x: " . $mi->get_x();
echo "<br/>";

//$mi -> x = 3; #da error porque está protegida

echo "toString: " .$mi;