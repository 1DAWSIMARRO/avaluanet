<?php

require_once(MODEL_ASIGNATURA."AsignaturaModel.php");
require_once(MODEL_AVALUABLE."AvaluableModel.php");

class AsignaturaController {

    function __construct() {
        $this->model = new AsignaturaModel();
        $this->modelAva = new AvaluableModel();
    }

    public function llistar() {
        include_once(VIEW_D.'header.php');
        $list=$this->model->llistarM($_SESSION['token']);
        // echo '<script src='.VIEW_ASIGNATURA.'"js/script.js"></script>';
        include_once(VIEW_ASIGNATURA.'AsignaturaLlistar.php');
        include_once(VIEW_D.'footer.html');
    }

    public function afegir() {
        include_once(VIEW_D.'header.php');
        echo '<script src='.VIEW_ASIGNATURA.'js/AsignaturaAlta.js></script>';
        include_once(VIEW_ASIGNATURA."AsignaturaAlta.html");
        include_once(VIEW_D.'footer.html');
    }

    public function add_alumne() {
        include_once(VIEW_D.'header.php');
        if (isset($_GET['asig'])) {
            $_SESSION['asig']=$_GET['asig'];
        }
        $list=$this->model->llistarAl($_SESSION['asig']);
        $list2=$this->model->llistarAl2($_SESSION['asig']);
        $listAva=$this->modelAva->listM($_SESSION['asig']);
        $listQ=$this->model->llistarQM();
        $asignatura=$this->model->getEditar($_SESSION['asig']);
        include_once(VIEW_ASIGNATURA."AsignaturaInfo.php");
        echo '<script src="'.VIEW_ASIGNATURA.'/js/AsignaturaInfo.js"></script>';
        include_once(VIEW_D.'footer.html');
    }

    public function inAlu(){
        $data=[
            'NIA' => $_GET['NIA'],
            'asig' => $_SESSION['asig']
        ];
        $this->model->altaAlum($data);
        echo json_encode($data);
        // header('Location: index.php?module=Asignatura&function=add_alumne&asig='.$_SESSION['asig'].'&modal=true');
    }

    public function remove(){
        $data=[
            'NIA' => $_GET['NIA'],
            'asig' => $_SESSION['asig']
        ];
        $this->model->baixaAlum($data);
        header('Location: index.php?module=Asignatura&function=add_alumne&asig='.$_SESSION['asig']);
    }

    public function search(){
        $data=[
            'text' => $_POST['text'],
            'asig' => $_SESSION['asig']
        ];
        $list_al=$this->model->searchM($data);
        echo json_encode($list_al);
    }

    public function alta(){
        if (isset($_POST['nom'])) {
            $data=[];
            foreach ($_POST as $key => $value) {
                $data[$key] = $value;
            }
            $data['dni_prof']=$_SESSION['token'];
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
            include_once(VIEW_D.'header.php');
            include_once(VIEW_ASIGNATURA.'AsignaturaModificar.php');
            include_once(VIEW_D.'footer.html');
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

    public function list_modal(){
        echo json_encode($this->model->llistarAl2($_SESSION['asig']));
    }

    function insertG(){
        echo json_encode($this->model->insertGM());
    }
}
?>