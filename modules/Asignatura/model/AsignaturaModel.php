<?php
class AsignaturaModel {

    public function __construct(){
        $this->DB=Database::connect(); 
    }

    public function llistarAsig(){
        $sql='SELECT * FROM asignatura';
        return $this->DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function altaAsig(){
        $consulta="INSERT INTO asignatura (nom,nivell,curs,grup,hores) VALUES ('Entornos', 'DAW', '1ª', 'A', 56)";
        $resultado=$this->DB->query($consulta);
        if ($resultado) {
            echo "OK";
        }else {
            echo "ERROR";
        }
    }

    public function altaAlum($data){
        $sql="INSERT INTO matricula (NIA,codi_asignatura) VALUES (?,?)";
        $stmt=$this->DB->prepare($sql);
        $stmt->execute([$data['NIA'], $data['asig']]);
    }

    public function baixaAlum($data){
        $sql="DELETE FROM matricula WHERE NIA=? AND codi_asignatura=?";
        $stmt=$this->DB->prepare($sql);
        $stmt->execute([$data['NIA'], $data['asig']]);
    }

    public function llistarAl($asig){
        $sql='SELECT * FROM alumne WHERE NIA IN(SELECT NIA FROM matricula WHERE codi_asignatura='.$asig.')';
        return $this->DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    public function llistarAl2($asig){
        $sql='SELECT * FROM alumne WHERE NIA NOT IN(SELECT NIA FROM matricula WHERE codi_asignatura='.$asig.')';
        return $this->DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
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