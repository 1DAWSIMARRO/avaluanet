<?php
  require_once(MODEL_AVALUABLE.'AvaluableModel.php');
  class AvaluableController {

    function __construct(){
      $this->Model = new AvaluableModel();
    }

    function llistar() {
      include_once(VIEW_D.'header.html');
      $list = $this->Model->llistarM();
      include_once(VIEW_AVALUABLE.'AvaluableLlistar.php');
    }
  }
?>