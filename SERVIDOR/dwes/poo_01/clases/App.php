<?php


class App{
    private function printHead(){
        include_once ("gui/head.html");
    }
    private function printBody(){
        include_once ("gui/body.php");
    }
    private function printFoot(){
        include_once ("gui/foot.html");
    }

    private function printTipoVia(){
        $bbdd = new BBDD();
        $tiposvias = $bbdd->getTiposVias();
        unset($bbdd);
        echo '<select name="tipovia">';
        foreach ($tiposvias as $tipovia)
            echo "<option value=\"{$tipovia['cod']}\">{$tipovia['descri']}</option>";
        echo '</select>';
    }
    public function run($p=null){
        $this->printHead();
        if (isset($p['datos'])){
            $pers=new Persona($p['dni'],$p['nombre'],$p['ap1'],$p['ap2'],$p['tipovia'],$p['direccion']);
            $bbdd = new BBDD();
            if ( $bbdd->setPersona($pers)) echo "<h2>Grabado</h2>";
            unset($bbdd);
        }
        $this->printBody();
        $this->printFoot();
    }
}