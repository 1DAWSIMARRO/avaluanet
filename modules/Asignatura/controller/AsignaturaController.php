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
        echo "Insertado OK";
    }

    public function agregar_alumne() {
        include_once(VIEW_ASIGNATURA."AlumneAgregar.php");
    }

}
?>