<?php

require_once('DB/connexio.php');
require_once('paths.php');
include_once(VIEW_D.'header.html');

function defaultPage(){
    // require_once('modules/login/controller/LoginController.php');
    // $obj=new LoginController;
    require_once(CONTROLLER_ALUMNE.'AlumneController.php');
    $obj=new AlumneController;
    $obj->llistar();
}

if(isset($_GET['module'])) {
    
    $controllerClass = $_GET['module'] . 'Controller';
    
    require_once('modules/'.$_GET['module'].'/controller/'.$_GET['module'].'Controller.php');
    $obj=new $controllerClass;

    if(isset($_GET['function'])) {
        $func=$_GET['function'];
        $obj->$func();
    }else{
        defaultPage();
    }

}else{
    defaultPage();
}

include_once(VIEW_D.'footer.html');

?>