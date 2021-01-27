<?php
class Calcula{
    public static function suma($par1,$par2){
        return $par1+$par2;
    }
    public static function resta($par1,$par2){
        return $par1-$par2;
    }
    public static function multiplica($par1,$par2){
        return $par1*$par2;
    }
    public static function divide($par1,$par2){
        return $par1/$par2;
    }
}
echo Calcula::suma(2,3)."<br/>";
echo Calcula::resta(2,3)."<br/>";
echo Calcula::multiplica(2,3)."<br/>";
echo Calcula::divide(2,3)."<br/>";