<?php
require_once('modules/Professor/model/ProfessorModel.php');
class ProfessorController
{
    function __construct()
    {
        $this->model = new ProfessorModel();
    }

    function llistar(){
        include_once(VIEW_D.'header.php');
        include_once(VIEW_PROFESSOR.'ProfessorLlistar.html');
        echo '<script src="'.VIEW_PROFESSOR.'validar2.js"></script>';
    }

    function logout(){
        session_destroy();
        header("Location: index.php?module=Asignatura&function=llistar");
    }

    function editar(){ 
        $_SESSION['login']=$_POST['login'];
        //$array = $this->model->getEditar($_SESSION['login']);
        include_once(VIEW_PROFESSOR.'editar.html');
        echo '<script src="'.VIEW_PROFESSOR.'validaciones.js"></script>';
    }

    public function registrar()
    {
        $dni = $_POST['dni'];
        $cognoms = $_POST['cognoms'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $data = array(
            "dni" => $dni,
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

    public function perfil(){
        $login = $_POST['login'];
        return $login;
    }


    public function acceder()
    {
        $_SESSION['login']=$_POST['login'];
        $login = $_POST['login'];
        $password = $_POST['password'];

        $data = array(
            "login" => $login,
            "password" => $password
        );
        $prof=$this->model->accederM($data);

        if($prof != false) {
            $_SESSION['token']=$prof['dni'];
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
