<?php
require_once('modules/Professor/model/ProfessorModel.php');
class ProfessorController{
    function __construct(){
        $this->model=new ProfessorModel();
    }

    function registrar(){
        //(dni, nom, cognoms, login, password, email)
        $this->model->registrarM();
    }







}

echo "ASD";
?>