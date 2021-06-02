<?php
class ProfessorModel
{
    function __construct()
    {
        $this->DB = Database::connect();
    }
    function registrarM($data)
    {
        $sql = "INSERT INTO professor (dni,nom,cognoms,login,password,email) VALUES (?,?,?,?,?,?)";
        $stmt = $this->DB->prepare($sql);
        $stmt->execute([$data['dni'], $data['nom'], $data['cognoms'], $data['login'], $data['password'], $data['email']]);
    }

    function accederM($data)
    {
        $sql = "SELECT professor.login, professor.password from professor where professor.login LIKE " . $data['login'] . " AND professor.password LIKE " . $data['password'];
        $result = mysqli_query(mysqli_connect("localhost", "userava", "userava", "avaluanet"), $sql);
        if ($result) {
            $row = mysqli_num_rows($result);
            if ($row) {
                printf("Usuario con Login: " . $data['login'] . " Password: " . $data['password']);
            }
        } else {
            echo "El usuario introducido no existe. Registrate antes de acceder.";
            header("location: http://localhost/AVALUANET/modules/Professor/view/registrar.html");
        }
    }
}
