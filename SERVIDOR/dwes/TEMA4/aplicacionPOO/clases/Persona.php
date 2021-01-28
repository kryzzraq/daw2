<?php
class Persona{
    public $dni;
    public $nombre;
    public $apellido1;
    public $apellido2;
    public $tipoVia;
    public $direccion;

    //constructor
    public function __construct($dnic,$nom,$ap1,$ap2,$via,$direc){
        $this->dni= $dnic;
        $this->nombre = $nom;
        $this->apellido1 = $ap1;
        $this->apellido2 = $ap2;
        $this->tipoVia = $via;
        $this->direccion  =$direc;
    }

    public function  __destruct(){
        echo "Destruyendo objeto";
    }


    //funcion que valide los datos antes de introcucirlos quitando los caracteres especiales
    # addlashes(t3) -> htmlspecialchars(t2)

    //funcion para insertar a la BBDD

}