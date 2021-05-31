<?php
require_once('./connexio.php');
    class GrupModel {

    function __construct(){

        $this->DB=Database::connect();        
    }

    function altaM($data){

        $sql = "INSERT INTO grup (nom, curs, aula, n_alumnes), VALUES(?,?,?,?)";
        $this->DB->prepare($sql);
        $this->DB->exec($data['nom'], $data['curs'], $data['aula'], $data['n_alumnes']);
    }

    function baixaM($data){

        $sql = "DELETE FROM grup WHERE codi = $data";
        $this->DB->exec($sql);       
    }

    function modificacio($data){
        $sql = "UPDATE grup SET nom = ?, curs = ?, aula = ?, n_alumnes = ? WHERE codi = $data";
        $this->DB->exec($sql);
        
    }

    function llistarM(){

        $sql="SELECT * FROM grup";
        print_r($this->DB->query($sql)->fetchAll(PDO::FETCH_ASSOC));
        // return $this->DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
  }
  $model = new GrupModel();
  $model->llistarM();
  $model->altaM('1DAW', 'GS', 20, 14);
?>