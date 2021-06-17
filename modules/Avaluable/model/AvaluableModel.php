<?php
    class AvaluableModel {

    function __construct(){
        
        $this->DB=Database::connect();        
    }

    function llistarM(){
        $sql="SELECT * FROM avaluable";
        return $this->DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
  }
?>