<?php
class AsignaturaModel {

    public function __construct(){
        $this->DB=Database::connect(); 
    }

    public function llistarM($data){
        $sql='SELECT codi, nom, hores FROM asignatura WHERE dni_prof LIKE "'.$data.'";';
        return $this->DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
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
        $sql='SELECT a.NIA, a.nom, a.cognoms, a.tel, a.email, g.nom gnom  FROM alumne a, grup g WHERE a.codi_grup=g.codi AND NIA IN(SELECT NIA FROM matricula WHERE codi_asignatura='.$asig.')';
        return $this->DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    public function llistarAl2($asig){
        $sql='SELECT a.NIA, a.nom, a.cognoms, a.tel, a.email, g.nom gnom  FROM alumne a, grup g WHERE a.codi_grup=g.codi AND NIA NOT IN(SELECT NIA FROM matricula WHERE codi_asignatura='.$asig.')';
        return $this->DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getEditar($codi) {
        $consulta = "SELECT * FROM asignatura WHERE codi=$codi";
        return $this->DB->query($consulta)->fetch(PDO::FETCH_ASSOC);
    }

    public function altaM($data){
        $consulta="INSERT INTO asignatura (nom,hores,dni_prof) VALUES (?,?,?,?)";
        $stmt=$this->DB->prepare($consulta);
        $stmt->execute([$data['nom'], $data['hores'], $data['dni_prof']]);
    }

    public function editarM($data) {;
        $codi=$data['codi'];
        $nom=$data['nom'];
        $hores=$data['hores'];
        $sql = "UPDATE asignatura SET nom='$nom', hores='$hores' WHERE codi=$codi";
        $this->DB->query($sql);
    }

    public function baixaM($data) {
        $modificar = "DELETE FROM asignatura WHERE codi=".$data['codi'];
        $this->DB->query($modificar);
    }

    public function searchM($data) {
        $sql = 'SELECT * FROM alumne WHERE 
        NIA NOT IN
        (SELECT NIA FROM matricula WHERE codi_asignatura="'.$data['asig'].'")
        AND (nom LIKE "'.$data['text'].'%" OR cognoms LIKE "'.$data['text'].'%" OR NIA LIKE "'.$data['text'].'%")';

        return $this->DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

}