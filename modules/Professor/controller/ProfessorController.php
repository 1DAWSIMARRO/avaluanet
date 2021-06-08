<?php
require_once('modules/Professor/model/ProfessorModel.php');
class ProfessorController
{
    function __construct()
    {
        $this->model = new ProfessorModel();
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

        $this->model->registrarM($data);
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
        return $this->model->accederM($data);
    }
}
