<?php
  require_once(MODEL_GRUP.'GrupModel.php');
  class GrupController {

    function __construct(){
      
      $this->Model = new GrupModel();
    }

    function llistar() {

      $list = $this->Model->llistarM(); 
      include_once(VIEW_GRUP.'GrupLlistar.php');
    }

    function alta() {
        // FORMA DE CONSEGUIR DATOS
      if (isset($_REQUEST['nom'])) {
        $data=[];
        foreach ($_REQUEST as $key => $value) {
          $data[$key] = $value;
        }
        $this->Model->altaM($data);
        header('Location: index.php?module=Grup&function=llistar');  // VUELVE A MOSTRAR EL PHP index.php

      } else {
        include_once(VIEW_GRUP.'GrupAlta.php');
      }

    }

    function baixa() {
      
      if (isset($_REQUEST['codi'])) {
        
        $data=[];
        foreach ($_REQUEST as $key => $value) {
          
          $data[$key] = $value;
        }
        $this->Model->baixaM($data);
        header('Location: index.php?module=Grup&function=llistar');

      } else {

        include_once(VIEW_GRUP."GrupBaixa.php");
      }
    }

    function modificacio() {

      if (isset($_REQUEST['codi'])) {
        $data=[];
        foreach ($_REQUEST as $key => $value) {
          $data[$key] = $value;
        }
        $this->Model->modificacioM($data);
        header('Location: index.php?module=Grup&function=llistar');
      }
      include_once(VIEW_GRUP."GrupModificar.php");
    }

    function viewEditar() {

        $data = $this->Model->obtindreGrupM($_REQUEST['codi']);
        include_once(VIEW_GRUP."GrupModificar.php");
    }
  }
?>