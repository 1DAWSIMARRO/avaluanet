<?php
  require_once(MODEL_GRUP.'GrupModel.php');
  class GrupController {

    function __construct(){
      $this->Model = new GrupModel();
    }

    function llistar() {
      $list = $this->Model->llistarM();
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
        $this->Model->altaM($data);
        $this->Model->add_grupM($data);
        header('Location: index.php?module=Grup&function=llistar');  // VUELVE A MOSTRAR EL PHP index.php

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

        $grups=$this->Model->getGrups();
        include_once(VIEW_D.'header.php');
        include_once(VIEW_GRUP.'GrupAlta.php');
        include_once(VIEW_D.'footer.html');
      }

    }

    function add_grup(){
      $this->Model->add_grupM($_POST['curs']);
      header('Location: index.php?module=Grup&function=llistar');
    }

    function baixa() {
      $this->Model->baixaM($_GET['nom']);
      header('Location: index.php?module=Grup&function=llistar');
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
      $data = $this->Model->obtindreGrupM($_REQUEST['codi']);
      include_once(VIEW_D.'header.php');
      include_once(VIEW_GRUP."GrupModificar.php");
      include_once(VIEW_D.'footer.html');
    }

  }
?>