<?php
class ProfessorModel{
    function __construct(){
        $this->DB=Database::connect();
    }
    function registrarM(){
        $sql = "INSERT INTO professor (dni,nom,cognoms,login,password,email) VALUES (?,?,?,?,?,?)";
        $stmt=$this->DB->prepare($sql);
        $stmt->execute(["012345","Samu","Giner","123","123","123@gmail.com"]);
    }
}
