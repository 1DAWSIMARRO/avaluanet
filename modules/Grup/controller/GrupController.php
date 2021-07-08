<?php
  require_once(MODEL_GRUP.'GrupModel.php');
  class GrupController {

    function __construct(){
      $this->model = new GrupModel();
    }

    function llistar() {
      $list = $this->model->llistarM();
      include_once(VIEW_D.'header.php');
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
        $data['dni_prof']=$_SESSION['token'];
        // print_r($data);
        $this->model->altaM($data);
        // $this->model->add_grupM($data);
        header('Location: index.php?module=Grup&function=alta');  // VUELVE A MOSTRAR EL PHP index.php

      } else {
        // $cursos=['Grau_Superior','Grau_Mitja','ESO'];
        $cursos = array(
          array(
            "code"=>"GS",
            "name"=>"Grau Superior",
          ),
          array(
            "code"=>"GM",
            "name"=>"Grau Mitja",
          ),
          array(
            "code"=>"ESO",
            "name"=>"ESO",
          )
        );

        $grups=$this->model->getGrups();
        include_once(VIEW_D.'header.php');
        echo '<script src='.VIEW_GRUP.'js/GrupAlta.js></script>';
        include_once(VIEW_GRUP.'GrupAlta.php');
        include_once(VIEW_D.'footer.html');
      }

    }

    function add_grup(){
      $this->model->add_grupM($_POST['data']);
      header('Location: index.php?module=Grup&function=llistar');
    }

    function baixa() {
      $this->model->baixaM($_GET['nom']);
      header('Location: index.php?module=Grup&function=llistar');
    }

    function modificacio() {
      if (isset($_REQUEST['codi'])) {
        $data=[];
        foreach ($_REQUEST as $key => $value) {
          $data[$key] = $value;
        }
        $this->model->modificacioM($data);
        header('Location: index.php?module=Grup&function=llistar');
      }
    }

    function viewEditar() {
      $cursos = array(
        array(
          "code"=>"GS",
          "name"=>"Grau Superior",
        ),
        array(
          "code"=>"GM",
          "name"=>"Grau Mitja",
        ),
        array(
          "code"=>"ESO",
          "name"=>"ESO",
        )
      );
      $data = $this->model->obtindreGrupM($_REQUEST['codi']);
      include_once(VIEW_D.'header.php');
      include_once(VIEW_GRUP."GrupModificar.php");
      include_once(VIEW_D.'footer.html');
    }

    function checkNom(){
      echo json_encode($this->model->validarNomM($_POST['nom']));
    }

    function delete(){
      $this->model->deleteM($_POST['data']);
      echo json_encode($_POST['data']);
    }

  }
?>