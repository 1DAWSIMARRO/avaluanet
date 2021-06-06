<?php

require_once(MODEL_ASIGNATURA."AsignaturaModel.php");

class AsignaturaController {

    function __construct() {
        $this->model = new AsignaturaModel();
    }

    public function llistar() {
        print_r($this->model->llistarAsig());
    }

    public function afegir() {
        $this->model->altaAsig();
    }

    public function agregar_alumne() {
        $_SESSION['asig']=$_GET['asig'];
        $list=$this->model->llistarAl($_SESSION['asig']);
        $list2=$this->model->llistarAl2($_SESSION['asig']);
        include_once(VIEW_ASIGNATURA."AlumneAgregar.php");
    }

    public function inAlu(){
        $data=[
            'NIA' => $_GET['NIA'],
            'asig' => $_SESSION['asig']
        ];
        $this->model->altaAlum($data);
        header('Location: index.php?module=Asignatura&function=agregar_alumne&asig=1');
    }

}
?>