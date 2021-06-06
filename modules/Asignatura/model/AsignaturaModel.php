<?php
class AsignaturaModel {

    public function __construct(){
        $this->DB=Database::connect(); 
    }

    public function llistarAsig(){
        $sql='SELECT * FROM asignatures';
        return $this->DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function altaAsig(){
        $consulta="INSERT INTO asignatures (nom,nivell,curs,grup,hores) VALUES ('Entornos', 'DAW', '1ª', 'A', 56)";
        $resultado=$this->DB->query($consulta);
        if ($resultado) {
            echo "OK";
        }else {
            echo "ERROR";
        }
    }

    public function altaAlum($data){
        $sql="INSERT INTO matricula (NIA,codi_asignatures) VALUES (?,?)";
        $stmt=$this->DB->prepare($sql);
        $stmt->execute([$data['NIA'], $data['asig']]);
    }

    public function llistarAl($asig){
        $sql='SELECT * FROM alumne WHERE NIA IN(SELECT NIA FROM matricula WHERE codi_asignatures='.$asig.')';
        return $this->DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    public function llistarAl2($asig){
        $sql='SELECT * FROM alumne WHERE NIA NOT IN(SELECT NIA FROM matricula WHERE codi_asignatures='.$asig.')';
        return $this->DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}