<?php

require_once(MODEL_ASIGNATURA."AsignaturaModel.php");

class AsignaturaController {

    function __construct() {
        $this->model = new AsignaturaModel();
    }

    public function llistar() {
        $list=$this->model->llistarM();
        echo '<script src="./modules/Asignatura/view/js/script.js"></script>';
        include_once(VIEW_ASIGNATURA.'AsignaturaLlistar.php');
        
    }


    public function alta(){
        if (isset($_POST['nom'])) {
            $data=[];
            foreach ($_POST as $key => $value) {
                $data[$key] = $value;
            }
            $this->model->altaM($data);
            header('Location: index.php');
        } else {
            include_once(VIEW_ASIGNATURA.'AsignaturaAlta.html');
        }      
    }

    public function modificar(){
        if (isset($_POST['codi'])) {
            $data=[];
            foreach ($_POST as $key => $value) {
                $data[$key] = $value;
            }
            $this->model->modificarM($data);
            echo "HOLA";
            header('Location: index.php'); 
        } else {
            include_once(VIEW_ASIGNATURA.'AsignaturaModificar.php'); 
        }      
    }

    public function editar() {
        if (isset($_GET['codi'])) {
            $array = $this->model->getEditar($_GET['codi']);
            include_once(VIEW_ASIGNATURA.'AsignaturaModificar.php');
        } 
    }

    public function baixa(){
        if (isset($_GET['codi'])) {
            $data=[];
            foreach ($_GET as $key => $value) {
                $data[$key] = $value;
            }
            $this->model->baixaM($data);
            header('Location: index.php');
        } else {
            include_once(VIEW_ASIGNATURA.'AsignaturaBaixa.php');
        }      
    }
}
?>