<?php
class Aplicacion
{
    public function printHead(){
        include_once ("gui/header.php");
    }

    public function printBody(){
        include_once ("gui/body.html");
    }

    public function printFormInsertar(){
        include_once ("gui/formulario1.php");
    }
    /*
    public function printListar(){
        include_once ("gui/listar.php");
    }
    public function printModificar(){
        include_once ("gui/modificar.php");
    }*/


    public function printTipoVia(){
        $bbdd = new BBDD();
        $tiposvias = $bbdd->getTiposVias();
        unset($bbdd);
        echo '<select name="tipovia">';
        foreach ($tiposvias as $tipovia)
            echo "<option value=\"{$tipovia['cod']}\">{$tipovia['descri']}</option>";
        echo '</select>';
    }
    public function  runIndex(){
        $this->printHead();
        $this->printBody();
    }

    public function runInsertar($r=null){
        $this->printHead();
        $conex = new BBDD();
        if($r == null){
          $this->printFormInsertar();
        }else{
            $person = new Persona($r['nombre'],$r['apellidos'],$r['dni'],$r['fechaNac'],$r['tipovia'],$r['nombrevia'],$r['numVia'],$r['telefono'],$r['localidad']);
            //var_dump($person);
            var_dump($conex);
            $conex->insertar($person);
        }
    }

    /*
    public function runListar($requ){
    }
    public function runModificar($requ){
    }
    */
}