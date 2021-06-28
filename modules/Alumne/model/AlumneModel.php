<?php
class AlumneModel{
    function __construct(){
        $this->DB=Database::connect();
    }

    public function llistarM(){
        $sql='SELECT * FROM alumne WHERE nom_grup IN(SELECT nom_grup FROM asignat WHERE dni_prof LIKE "'.$_SESSION['token'].'");';
        return $this->DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function altaM($data){
        $sql = "INSERT INTO alumne (NIA,nom,cognoms,tel,email,nom_grup) VALUES (?,?,?,?,?,?)";
        $stmt=$this->DB->prepare($sql);
        $stmt->execute([$data['NIA'], $data['nom'], $data['cognoms'],$data['tel'],$data['email'],$data['grup']]);
    }

    public function findM($data){
        $sql='SELECT * FROM alumne WHERE NIA LIKE '. $data;
        return $this->DB->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteM($data){
        $sql="DELETE FROM alumne WHERE NIA = ?";
        $stmt=$this->DB->prepare($sql);
        $stmt->execute([$data]);
    }

    function editM($data){
        $sql = "UPDATE alumne SET nom=?, cognoms=?, tel=?, email=?, nom_grup=? WHERE NIA=?";
        $stmt=$this->DB->prepare($sql);
        $stmt->execute([$data['nom'], $data['cognoms'],$data['tel'],$data['email'],$data['grup'],$data['NIA']]);
    }

    public function validarNIAM($data){
        $sql='SELECT * FROM alumne WHERE NIA LIKE "'.$data.'"';
        return $this->DB->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
}
?>