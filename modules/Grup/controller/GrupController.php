<?php
  require_once(MODEL_GRUP.'GrupModel.php');
  class GrupController {

    function __construct(){
      
      $this->Model = new GrupModel();
    }

    function llistar() {

      $list = $this->Model->llistarM();
      include_once(VIEW_D.'header.html');
      include_once(VIEW_GRUP.'GrupLlistar.php');
      include_once(VIEW_D.'footer.html');
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
        include_once(VIEW_D.'header.html');
        include_once(VIEW_GRUP.'GrupAlta.php');
        include_once(VIEW_D.'footer.html');
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
        include_once(VIEW_D.'header.html');
        include_once(VIEW_GRUP."GrupBaixa.php");
        include_once(VIEW_D.'footer.html');
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
      include_once(VIEW_D.'header.html');
      echo '<script src="'.VIEW_GRUP.'/js/GrupInfo.js"></script>';
      include_once(VIEW_GRUP."GrupModificar.php");
      include_once(VIEW_D.'footer.html');
    }

    function viewEditar() {

        $data = $this->Model->obtindreGrupM($_REQUEST['codi']);
        include_once(VIEW_D.'header.html');
        include_once(VIEW_GRUP."GrupModificar.php");
        include_once(VIEW_D.'footer.html');
    }

    // function comprobarGrupo(){


    // }
  }
?>