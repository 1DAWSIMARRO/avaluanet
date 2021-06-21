<?php
require_once('modules/Professor/model/ProfessorModel.php');
class ProfessorController
{
    function __construct()
    {
        $this->model = new ProfessorModel();
    }

    function llistar(){
        session_destroy();
        include_once(VIEW_D.'header.php');
        include_once(VIEW_PROFESSOR.'ProfessorLlistar.html');
        echo '<script src="'.VIEW_PROFESSOR.'validar2.js"></script>';
    }

    function editar(){
        include_once(VIEW_PROFESSOR.'editar.html');
        echo '<script src="'.VIEW_PROFESSOR.'validaciones.js"></script>';
    }

    public function registrar()
    {
        $dni = $_POST['dni'];
        $nom = $_POST['nom'];
        $cognoms = $_POST['cognoms'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $data = array(
            "dni" => $dni,
            "nom" => $nom,
            "cognoms" => $cognoms,
            "login" => $login,
            "password" => $password,
            "email" => $email
        );

        if($this->model->registrarM($data) == "noexiste") {
            //no existe
            $response = array(
                'msg' => "ok"
            );
        } else {
            //existe
            $response = array(
                'msg' => "ko"
            );
        }
        header('Content-Type: application/json; charset=utf-8');         
        echo json_encode($response); 

    }

    function vistaReg(){
        include_once(VIEW_D.'header.php');
        include_once(VIEW_PROFESSOR.'registrar.html');
        echo '<script src="'.VIEW_PROFESSOR.'validaciones.js"></script>';
    }


    public function acceder()
    {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $data = array(
            "login" => $login,
            "password" => $password
        );
        //"valor:".$this->model->accederM($data); 

        if($this->model->accederM($data) != false) {
            $_SESSION['token']=true;
            $response = array(
                'msg' => "ok"
            );
        } else {
            $response = array(
                'msg' => "ko"
            );
        }

        header('Content-Type: application/json; charset=utf-8');         
        echo json_encode($response);

    }


}
