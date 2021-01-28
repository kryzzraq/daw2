<?php
class App{
    public function printHead(){
        include_once ("gui/head.html");
    }
    public function printBody(){
        require_once ("gui/body.php");
    }
    public function printFoot(){
        require_once ("gui/footer.html");
    }

    public function run ($request=null){
        $this->printHead();
        $this->printBody();
        $this->printFoot();
    }
}