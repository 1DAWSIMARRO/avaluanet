<?php
class ProfessorModel
{
    function __construct()
    {
        $this->DB = Database::connect();
    }
    function registrarM($data)
    {
        $sql1 = "SELECT dni from professor where dni LIKE '" . $data['dni']."'";
        $sql2 = "SELECT username from professor where username LIKE '" . $data['login']."'";
        $result = mysqli_query(mysqli_connect("localhost", "userava", "userava", "avaluanet"), $sql1);
        $result2 = mysqli_query(mysqli_connect("localhost", "userava", "userava", "avaluanet"), $sql2);
        if ($result && $result2) {
            $row = mysqli_num_rows($result);
            $row2 = mysqli_num_rows($result2);
            if ($row == 0 && $row2 == 0) {
                $sql = "INSERT INTO professor (dni,cognoms,username,password,email) VALUES (?,?,?,?,?)";
                $stmt = $this->DB->prepare($sql);
                $stmt->execute([$data['dni'], $data['cognoms'], $data['login'], $data['password'], $data['email']]);
                return "noexiste";
            } else {
                return "existe";
            }
        } else {
            return "ERROR mysqli_query";
        }
    }

    function accederM($data)
    {
        $sql = "SELECT * from professor where username collate utf8mb4_0900_as_cs LIKE '" . $data['login'] . "' AND password LIKE '" . $data['password']."';";
        return $this->DB->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    public function getProf($data) {
        $consulta = 'SELECT * FROM professor WHERE dni LIKE "' . $data . '";';
        return $this->DB->query($consulta)->fetch(PDO::FETCH_ASSOC);
    }

    public function editarM($data){
        $sql = "UPDATE professor SET username=?, cognoms=?, email=?, password=? WHERE dni=?";
        $stmt=$this->DB->prepare($sql);
        $stmt->execute([$data['username'], $data['cognoms'],$data['email'],$data['password'],$data['dni']]);
    }

}
