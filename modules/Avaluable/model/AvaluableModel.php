<?php
    class AvaluableModel {

    function __construct(){
        
        $this->DB=Database::connect();        
    }

    function llistarM(){
        $sql="SELECT * FROM avaluable";
        return $this->DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    function listM($data){
        $sql="SELECT * FROM avaluable WHERE assignatura_code=".$data;
        return $this->DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
  }
?>