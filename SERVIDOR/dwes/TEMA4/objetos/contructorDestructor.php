<?php
#Se recomienda no llamarlos nunca directamente
    #Todos los métodos mágicos empiezan con 2 __

class Punto{
    protected $y;
    protected $x;
    protected $nombre;

    public function __construct($x=0,$y=0,$nombre="nombre1"){
        echo "Estoy en el constructor";
        $this -> x = $x;
        $this -> y = $y;
    }

    public function  __destruct(){
        echo "Estoy en el destructor";
    }
}
#Constructor se llama con el new
$miPunto = new Punto(3,5);
var_dump($miPunto);
#Destructor. Se llama con el unset.
# También se llama cuando se vacía el objeto -> ($mi = "";) pero ésto no lo borra
unset($miPunto);

# En la última línea de la página se llama al destructor siempre para liberar memoria. Si necesito
# usar el objeto en otra página se tiene que meter en una variabla de session y después usarlo.
# Para ésto es recomendable usar serialización que lo que hace es convertir el objeto a texto plano
# para guardarlo en una variable y luego cuando se le llama se transforma el texto plano en un objeto de nuevo.
# Ésto se hace mediante una librería.