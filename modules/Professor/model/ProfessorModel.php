<?php
class ProfessorModel
{
    function __construct()
    {
        $this->DB = Database::connect();
    }
    function registrarM($data)
    {
        $sql1 = "SELECT professor.dni from professor where professor.dni LIKE " . $data['dni'];
        $result = mysqli_query(mysqli_connect("localhost", "userava", "userava", "avaluanet"), $sql1);
        if ($result) {
            $row = mysqli_num_rows($result);
            if (!$row) {
                $sql = "INSERT INTO professor (dni,nom,cognoms,login,password,email) VALUES (?,?,?,?,?,?)";
                $stmt = $this->DB->prepare($sql);
                $stmt->execute([$data['dni'], $data['nom'], $data['cognoms'], $data['login'], $data['password'], $data['email']]);
            }
        } else {
            echo '<script></script>';
        }
    }

    function accederM($data)
    {
        $sql = "SELECT professor.login, professor.password from professor where professor.login LIKE " . $data['login'] . " AND professor.password LIKE " . $data['password'];
        $result = mysqli_query(mysqli_connect("localhost", "userava", "userava", "avaluanet"), $sql);
        if ($result) {
            $row = mysqli_num_rows($result);
            if ($row) {
                //printf("Usuario con Login: " . $data['login'] . " Password: " . $data['password']);
                return "true";
            }
        } else {
            return "false";
        }
    }
}
