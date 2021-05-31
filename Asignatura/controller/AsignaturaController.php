<?php

require_once(MODEL_ASIGNATURA."AsignaturaModel.php");

class AsignaturaController {

    function __construct() {
        $this->model = new AsignaturaModel();
    }

    public function llistar() {
        $list=$this->model->llistarM();
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
        if (!empty($_POST['codi'])) {
            $data=[];
            foreach ($_POST as $key => $value) {
                $data[$key] = $value;
            }
            $this->model->modificarM($data);
            header('Location: index.php');
        } else {
            include_once(VIEW_ASIGNATURA.'AsignaturaModificar.html');
        }      
    }

    public function baixa(){
        if (isset($_POST['codi'])) {
            $data=[];
            foreach ($_POST as $key => $value) {
                $data[$key] = $value;
            }
            $this->model->baixaM($data);
            header('Location: index.php');
        } else {
            include_once(VIEW_ASIGNATURA.'AsignaturaBaixa.html');
        }      
    }
}
?>