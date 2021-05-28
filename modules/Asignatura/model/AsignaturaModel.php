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
}