<?php
session_start();
require_once('DB/connexio.php');
require_once('paths.php');
// include_once(VIEW_D.'header.html');

function defaultPage(){
    require_once(CONTROLLER_PROFESSOR.'ProfessorController.php');
    $obj=new ProfessorController;
    if(isset($_GET['function'])) {
        $func=$_GET['function'];
        $obj->$func();
    }else{
        $obj->llistar();
    }
}

if($_SESSION['token']==true){
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
}else{
    defaultPage();
}


// include_once(VIEW_D.'footer.html');

?>