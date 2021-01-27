<?php
class Punto{
    protected $x;
    protected $y;
    protected $misPropiedades = ["nombre","edad"];

    public function __get($nombreDeLaVariable){
        if(in_array($nombreDeLaVariable, $this->$misPropiedades)){
            return $this->$nombreDeLaVariable;
        }
    }

    public function __set($nombreDeLaVariable,$valorAAsignarEnLaVariable){
        $misPropiedades = ["nombre","edad"];
        if(in_array($nombreDeLaVariable, $misPropiedades)){
            $this->$nombreDeLaVariable = $valorAAsignarEnLaVariable;
        }
    }
}
$mi = new Punto(3,5);
#No accede porque está en privado
echo $mi->y;

$mi->nombre = "Laura";
$mi->edad = 26;
#No asigna porque no entra al if.
$mi->apellido = "Martin";
echo $mi->nombre;
echo '<br/>';
echo $mi->edad;
echo '<br/>';
var_dump($mi);

