<?php
class AlumneModel{
    function __construct(){
        $this->DB=Database::connect();
    }

    public function llistarM(){
        $sql='SELECT * FROM alumne';
        return $this->DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function altaM($data){
        $sql = "INSERT INTO alumne (NIA,nom,cognoms,tel,email,codi_grup) VALUES (?,?,?,?,?,?)";
        $stmt=$this->DB->prepare($sql);
        $stmt->execute([$data['NIA'], $data['nom'], $data['cognoms'],$data['tel'],$data['email'],$data['grup']]);
    }
}
?>