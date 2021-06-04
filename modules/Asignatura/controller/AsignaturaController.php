<?php

require_once(MODEL_ASIGNATURA."AsignaturaModel.php");
require_once(MODEL_ALUMNE.'AlumneModel.php');

class AsignaturaController {

    function __construct() {
        $this->model = new AsignaturaModel();
        $this->modelAl = new AlumneModel();
    }

    public function llistar() {
        print_r($this->model->llistarAsig());
    }

    public function afegir() {
        $this->model->altaAsig();
        echo "Insertado OK";
    }

    public function agregar_alumne() {
        $list=$this->modelAl->llistarM();
        include_once(VIEW_ASIGNATURA."AlumneAgregar.php");
    }

}
?>