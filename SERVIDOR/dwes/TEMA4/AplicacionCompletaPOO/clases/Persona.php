<?php
class Persona{
    public $nombre;
    public $apellidos;
    public $dni;
    public $fechaNac;
    public $tipoVia;
    public $nombreVia;
    public $numVia;
    public $telef;
    public $localidad;

    public function __construct($nom,$ape,$dniC,$nac,$tVia,$nomVia,$nuVia,$tel,$loc){
        $this->nombre = $nom;
        $this->apellidos = $ape;
        $this->dni = $dniC;
        $this->fechaNac = $nac;
        $this->tipoVia = $tVia;
        $this->nombreVia = $nomVia;
        $this->numVia = $nuVia;
        $this->telef = $tel;
        $this->localidad = $loc;
    }
}