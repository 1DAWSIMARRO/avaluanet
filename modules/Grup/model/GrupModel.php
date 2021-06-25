<?php
    class GrupModel {

        function __construct(){
            
            $this->DB=Database::connect();        
        }

        function altaM($data){
            $sql = "INSERT INTO grup (nom, curs, dni_prof) VALUES (?,?,?)";
            $stmt=$this->DB->prepare($sql);
            $stmt->execute([$data['nom'], $data['curs'], $data['dni_prof']]);
        }

        function obtindreGrupM($codi){
            
            $sql = "SELECT nom, curs FROM grup where codi = ?";
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
            
            $sql = "UPDATE grup SET nom = ?, curs = ? WHERE codi = ?";
            $stmt=$this->DB->prepare($sql);
            $stmt->execute([$data['nom'], $data['curs'], $data['codi']]);  
        }

        function llistarM(){
            // $sql="SELECT g.codi, g.nom, g.curs, g.aula, count(a.codi_grup)
            // FROM `grup` g left join `alumne` a
            // on g.codi = a.codi_grup
            // group by g.codi";
            $sql='SELECT codi, nom, curs FROM grup WHERE dni_prof LIKE "'.$_SESSION['token'].'";';
            return $this->DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        }

        function ValidarBaixa(){

            $sql="SELECT g.codi, g.nom, g.curs, g.aula, count(a.codi_grup)
            FROM `grup` g left join `alumne` a
            on g.codi = a.codi_grup
            where g.codi = a.codi_grup
            group by g.codi";
            return $this->DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>