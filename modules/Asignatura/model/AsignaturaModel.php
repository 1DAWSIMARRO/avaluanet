<?php
class AsignaturaModel {

    public function __construct(){
        $this->DB=Database::connect(); 
    }

    public function llistarM(){
        $consulta='SELECT * FROM asignatures';
        return $this->DB->query($consulta)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getEditar($codi) {
        $consulta = "SELECT * FROM asignatures WHERE codi=$codi";
        return $this->DB->query($consulta)->fetch(PDO::FETCH_ASSOC);
    }

    public function altaM($data){
        $consulta="INSERT INTO asignatures (nom,grup,hores) VALUES (?,?,?)";
        $stmt=$this->DB->prepare($consulta);
        $stmt->execute([$data['nom'], $data['grup'], $data['hores']]);
    }

    public function modificarM($data) {;
        $codi=$data['codi'];
        $nom=$data['nom'];
        $grup=$data['grup'];
        $hores=$data['hores'];
        $sql = "UPDATE asignatures SET nom='$nom', grup='$grup', hores='$hores' WHERE codi=$codi";
        $this->DB->query($sql);
    }

    public function baixaM($data) {
        $modificar = "DELETE FROM asignatures WHERE codi=".$data['codi'];
        $this->DB->query($modificar);
    }

}