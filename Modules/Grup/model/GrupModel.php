<?php
    class GrupModel {

    function __construct(){

        $this->DB=Database::connect();        
    }

    function altaM($data){

        $sql = "INSERT INTO grup (nom, curs, aula, n_alumnes) VALUES (?,?,?,?)";
        $stmt=$this->DB->prepare($sql);
        $stmt->execute([$data['nom'], $data['curs'], $data['aula'], $data['n_alumnes']]);
    }

    function obtindreGrupM($codi){
        $sql = "SELECT * FROM grup where codi = ?";
        $q = $this->DB->prepare($sql);
        $q->execute(array($codi));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    function baixaM($data){

        $sql = "DELETE FROM grup WHERE codi = ?";
        $stmt=$this->DB->prepare($sql);
        $stmt->execute([$data['codi']]);  
    }

    function modificacioM($data){
        
        $sql = "UPDATE grup SET nom = ?, curs = ?, aula = ?, n_alumnes = ? WHERE codi = ?";
        $stmt=$this->DB->prepare($sql);
        $stmt->execute([$data['nom'], $data['curs'], $data['aula'], $data['n_alumnes'], $data['codi']]);  
    }

    function llistarM(){

        $sql="SELECT * FROM grup";
        return $this->DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
  }
?>