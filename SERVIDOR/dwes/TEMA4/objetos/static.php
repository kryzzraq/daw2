<?php
class Test{
    public static $valor = "Padre";

    public static  function getEarlyBind(){
        return self::$valor; #Los :: sustituyen a -> en el caso de variables estáticas
    }

    public static function getLateBind(){
        return static:: $valor;
    }

}

class TestHija{
    public static $valor = "Hija";
}

echo TestHija::getEarlyBind(); //Padre porque usa el self

echo TestHija::getLateBind(); //Hija porque usa el static