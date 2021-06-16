<?php

define('VIEW_D','utils/view/');

//PATTERN
//COM FUNCIONA -> pattern(nom_modul_majuscules,nom_modul_primera_lletra_majuscula);
//RUTES AL CONTROLLER -> CONTROLLER_NOMMODULMAJUSCULA
//igual per al model i vista

function pattern ($module_u, $module){
    define('CONTROLLER_' . $module_u,'modules/'.$module.'/controller/');
    define('MODEL_' . $module_u,'modules/'.$module.'/model/');
    define('VIEW_' . $module_u,'modules/'.$module.'/view/');
}

//ALUMNE MODULE
pattern('ALUMNE','Alumne');
pattern('PROFESSOR','Professor');
pattern('ASIGNATURA','Asignatura');


?>