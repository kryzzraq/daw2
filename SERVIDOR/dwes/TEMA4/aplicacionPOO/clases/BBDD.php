<?php
class BBDD{
    const HOST = "localhost";
    const USER = "root";
    const PW = "";
    const BASEDATOS = "poo";
    private $conexion ;

    public function __construct(){
        #construyo una conexion de la bbdd
        @$conexion = new mysqli(BBDD::HOST, BBDD::USER, BBDD::PW, BBDD::BASEDATOS);
        $this->conexion=$conexion;
    }

    public function insertarDatos($conex){
        $_REQUEST['nomnbre'];
    }

    public function mostrarSelect(){
        $query = "SELECT DISTINCT descri from tiposvias";

        echo '
            
        ';
    }
}
$bbdd = new BBDD();
