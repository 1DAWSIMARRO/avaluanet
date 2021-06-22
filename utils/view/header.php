<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Avaluanet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="utils/css/main.css">

</head>

<body>
    <header class="navbar navbar-dark bg-success">
        <?php if (isset($_SESSION['token'])) { ?>
            <h1 style="margin-left:2%;"><a class="display-1 remove">Avaluanet</a></h1>
            <div class="container mt-1">
                <a href="index.php?module=Asignatura&function=llistar" style="text-decoration: none;" class="text-dark">
                    <h4>Asignatura</h4>
                </a>
                <a href="index.php?module=Alumne&function=llistar" style="text-decoration: none;" class="text-dark">
                    <h4>Alumnes</h4>
                </a>
                <a href="index.php?module=Grup&function=llistar" style="text-decoration: none;" class="text-dark">
                    <h4>Grups</h4>
                </a>
                <div class="dropdown">
                    <a class="btn btn-success dropdown, text-dark" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">

                        <h4><?php echo $_SESSION['username'] ?></h4>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="index.php?module=Professor&function=logout">Log out</a></li>
                        <li><a class="dropdown-item" href="index.php?module=Professor&function=view_editar">Editar</a></li>
                    </ul>
                </div>
            </div>
        <?php } else { ?>
            <h1 style="margin-left:2%;"><a class="display-1 remove">Avaluanet</a></h1>
        <?php } ?>
        <!-- <h1 style="margin-left:2%;"><a class="display-1 remove">Avaluanet</a></h1>
    <div class="container mt-1">
        <a href="index.php?module=Asignatura&function=llistar" style="text-decoration: none;" class="text-dark"><h4>Asignatura</h4></a>
        <a  href="index.php" style="text-decoration: none;" class="text-dark"><h4>Alumnes</h4></a>
        <a href="index.php?module=Grup&function=llistar" style="text-decoration: none;" class="text-dark"><h4>Grups</h4></a>
        <div class="dropdown">
            <a class="btn btn-success dropdown, text-dark" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <h4>Perfil</h4> 
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Log out</a></li>
                <li><a class="dropdown-item" href="#">Editar</a></li>
            </ul>
        </div>
    </div> -->
        <!-- <a href="index.php?module=Alumne&function=alta">anyadir alumne</a>
    <a href="index.php?module=Professor&function=login">Login</a>
    <a href="index.php?module=Asignatura&function=llistar">Asignatura</a> -->
    </header>