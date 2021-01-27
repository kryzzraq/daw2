<?php
/**
 * Created by PhpStorm.
 * User: alumno
 * Date: 04/12/2017
 * Time: 9:55
 */

require_once("lib/ctes.php");

function comprobarSeguridad(){
    //Si es editor validará la seguridad, no cuando esté desconectado o es consultor
    $tipo=$_SESSION['tipo']??USER_CONSULTOR;
    return ($tipo!==USER_EDITOR);
}

function comprobarSeguridadAmbos(){
    //Validará tanto si eres editor como consultor, pero no para descoenctado
    $tipo=$_SESSION['tipo']??"";
    return ($tipo==="");
}