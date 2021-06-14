<?php

require_once(MODEL_ASIGNATURA."AsignaturaModel.php");

class AsignaturaController {

    function __construct() {
        $this->model = new AsignaturaModel();
    }

    public function llistar() {
        $list=$this->model->llistar();
        include_once(VIEW_ASIGNATURA.'AsignaturaLlistar.php');
        
    }

    public function afegir() {
        include_once(VIEW_ASIGNATURA."AsignaturaAlta.html");
    }

    public function add_alumne() {
        if (isset($_GET['asig'])) {
            $_SESSION['asig']=$_GET['asig'];
        }
        $list=$this->model->llistarAl($_SESSION['asig']);
        $list2=$this->model->llistarAl2($_SESSION['asig']);
        $asignatura=$this->model->getEditar($_SESSION['asig']);
        include_once(VIEW_ASIGNATURA."AsignaturaInfo.php");
        echo '<script src="'.VIEW_ASIGNATURA.'/js/AsignaturaInfo.js"></script>';
    }

    public function inAlu(){
        $data=[
            'NIA' => $_GET['NIA'],
            'asig' => $_SESSION['asig']
        ];
        $this->model->altaAlum($data);
        header('Location: index.php?module=Asignatura&function=add_alumne&asig='.$_SESSION['asig'].'&modal=true');
    }

    public function remove(){
        $data=[
            'NIA' => $_GET['NIA'],
            'asig' => $_SESSION['asig']
        ];
        $this->model->baixaAlum($data);
        header('Location: index.php?module=Asignatura&function=add_alumne&asig='.$_SESSION['asig']);
    }

    public function alta(){
        if (isset($_POST['nom'])) {
            $data=[];
            foreach ($_POST as $key => $value) {
                $data[$key] = $value;
            }
            $this->model->altaM($data);
            header('Location: index.php?module=Asignatura&function=llistar');
        } else {
            include_once(VIEW_ASIGNATURA.'AsignaturaAlta.html');
        }      
    }

    public function editar(){
        if (isset($_POST['codi'])) {
            $data=[];
            foreach ($_POST as $key => $value) {
                $data[$key] = $value;
            }
            $this->model->editarM($data);
            header('Location: index.php?module=Asignatura&function=add_alumne&asig='.$_SESSION['asig']); 
        } else {
            include_once(VIEW_ASIGNATURA.'AsignaturaModificar.php'); 
        }      
    }

    public function modificar() {
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
            header('Location: index.php?module=Asignatura&function=llistar');
        } else {
            include_once(VIEW_ASIGNATURA.'AsignaturaBaixa.php');
        }      
    }
}
?>