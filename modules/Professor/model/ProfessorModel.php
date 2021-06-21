<?php
class ProfessorModel
{
    function __construct()
    {
        $this->DB = Database::connect();
    }
    function registrarM($data)
    {
        $sql1 = "SELECT professor.dni from professor where professor.dni LIKE '" . $data['dni']."'";
        $sql2 = "SELECT professor.login from professor where professor.login LIKE '" . $data['login']."'";
        $result = mysqli_query(mysqli_connect("localhost", "userava", "userava", "avaluanet"), $sql1);
        $result2 = mysqli_query(mysqli_connect("localhost", "userava", "userava", "avaluanet"), $sql2);
        if ($result && $result2) {
            $row = mysqli_num_rows($result);
            $row2 = mysqli_num_rows($result2);
            if ($row == 0 && $row2 == 0) {
                $sql = "INSERT INTO professor (dni,cognoms,login,password,email) VALUES (?,?,?,?,?)";
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
        $sql = "SELECT * from professor where login LIKE '" . $data['login'] . "' AND password LIKE '" . $data['password']."';";
        return $this->DB->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    public function getEditar($login) {
        $consulta = "SELECT * FROM professor WHERE login=$login";
        return $this->DB->query($consulta)->fetch(PDO::FETCH_ASSOC);
    }

}
