<?php
  require_once('../Grup/model/GrupModel.php');
  class GrupController {

    function __construct(){
      
      $this->Model = new GrupModel();
    }

    function llistar() {

      $list = $this->Model->llistarM(); 
      return $list;
    }

    function alta() {
        // FORMA DE CONSEGUIR DATOS
        
      if (isset($_REQUEST['nom'])) {
        
        $data=[];
        foreach ($_REQUEST as $key => $value) {

          $data[$key] = $value;
        }
        $this->Model->altaM($data);
        header('Location: index.php');  // VUELVE A MOSTRAR EL PHP index.php

      } else {

        include_once("../Grup/view/GrupAlta.html");
      }

    }

    function baixa() {
      
      if (isset($_REQUEST['codi'])) {
        
        $data=[];
        foreach ($_REQUEST as $key => $value) {
          
          $data[$key] = $value;
        }
        $this->Model->baixaM($data);
        header('Location: index.php');

      } else {

        include_once("../Grup/view/GrupBaixa.html");
      }
    }

    function modificacio() {

      
      if (isset($_REQUEST['codi'])) {
        
        $data=[];
        foreach ($_REQUEST as $key => $value) {
          
          $data[$key] = $value;
        }
        $this->Model->modificacioM($data);
        header('Location: index.php');
      }
      include_once("../Grup/view/GrupModificar.php");
    }

    function viewEditar() {

        $data = $this->Model->obtindreGrupM($_REQUEST['codi']);
        include_once("../Grup/view/GrupModificar.php");
    }
  }
?>