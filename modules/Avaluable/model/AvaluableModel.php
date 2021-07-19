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

    function createM($data){
        $sql="INSERT INTO avaluable (nom,data_lliurament,descripcio,tipus,avaluacio,assignatura_code) VALUES (?,?,?,?,?,?)";
        $stmt=$this->DB->prepare($sql);
        $stmt->execute([$data['title'],$data['date'],$data['description'],$data['type'],$data['ava'],$_SESSION['asig']]);
    }

    function findM($data){
        $sql="SELECT * FROM avaluable WHERE id=".$data;
        return $this->DB->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    function editM($data){
        $sql="UPDATE avaluable SET nom=?, data_lliurament=?, descripcio=?, tipus=?, avaluacio=? WHERE id=?";
        $stmt=$this->DB->prepare($sql);
        $stmt->execute([$data['title'],$data['date'],$data['description'],$data['type'],$data['ava'],$_SESSION['id_ava']]);
    }

  }
?>