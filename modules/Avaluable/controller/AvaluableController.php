<?php
  require_once(MODEL_AVALUABLE.'AvaluableModel.php');
  class AvaluableController {

    function __construct(){
      $this->model = new AvaluableModel();
    }

    // function llistar() {
    //   include_once(VIEW_D.'header.php');
    //   $list = $this->model->llistarM();
    //   include_once(VIEW_AVALUABLE.'AvaluableLlistar.php');
    // }

    function list(){
      echo json_encode($this->model->listM($_SESSION['asig']));
    }

    function view_create(){
      if (isset($_GET['id'])) { // Take data for edit
        $_SESSION['id_ava']=$_GET['id'];
        $data=$this->model->findM($_GET['id']);
      }
      $ava=[1,2,3];
      $type=['Examen','Treball','Exercici'];
      include_once(VIEW_D.'header.php');
      include_once(VIEW_AVALUABLE.'AvaluableCrear.php');
      echo '<script src="'.VIEW_AVALUABLE.'js/AvaluableCrear.js"></script>';
    }

    function create(){
      echo json_encode($this->model->createM($_POST));
    }

    function edit(){
      echo json_encode($this->model->editM($_POST));
    }

    function delete(){
      $this->model->deleteM();
      header('Location: index.php?module=Asignatura&function=add_alumne');
    }
  }
?>