<?php

define('VIEW_D','utils/view/');

//PATTERN

//Primero, crear el "pattern" para nuestro modulo:
//pattern(nom_modul_majuscules,nom_modul_primera_lletra_majuscula);

//EJEMPLO PARA EL CONTROLLER

//Para el caso del controller de Asignatura, substituir
//require_once("../Model/AsignaturaModel.php");
//Por
//require_once(MODEL_ASIGNATURA."AsignaturaModel.php");

function pattern ($module_u, $module){
    define('CONTROLLER_' . $module_u,'modules/'.$module.'/controller/');
    define('MODEL_' . $module_u,'modules/'.$module.'/model/');
    define('VIEW_' . $module_u,'modules/'.$module.'/view/');
}

//ALUMNE MODULE
pattern('ALUMNE','Alumne');
pattern('PROFESSOR','Professor');
pattern('ASIGNATURA','Asignatura');
pattern('GRUP','Grup');
pattern('AVALUABLE','Avaluable');


?>