<?php
  require_once(MODEL_AVALUABLE.'AvaluableModel.php');
  class AvaluableController {

    function __construct(){
      $this->model = new AvaluableModel();
    }

    function llistar() {
      include_once(VIEW_D.'header.php');
      $list = $this->Model->llistarM();
      include_once(VIEW_AVALUABLE.'AvaluableLlistar.php');
    }
    function list(){
      echo json_encode($this->model->listM($_SESSION['asig']));
    }
  }
?>