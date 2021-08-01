<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Avaluanet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="utils/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>

<body>

    <div class="bg-success">

        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 navbar navbar-dark bg-success">

        <?php if (isset($_SESSION['token'])) { ?>

            <nav class="navbar navbar-expand-lg ms-5">

                <div class="container-fluid">

                    <a class="display-3 text-decoration-none text-white" href="index.php">AVALUANET</a>

                    <div class="collapse navbar-collapse ps-5" id="navbarText">

                        <ul class="navbar-nav me-auto mt-2 mb-lg">

                            <li class="nav-item ps-5">
                                <a href="index.php?module=Asignatura&function=llistar">
                                    <button class="fs-5 btn btn-success">ASSIGNATURES</button>
                                </a>
                            </li>

                            <li class="nav-item ps-5">
                                <a href="index.php?module=Alumne&function=llistar">
                                    <button class="fs-5 btn btn-success">ALUMNES</button>
                                </a>
                            </li>

                            <li class="nav-item ps-5">
                                <a href="index.php?module=Grup&function=llistar">
                                    <button class="fs-5 btn btn-success">GRUPS</button>
                                </a>
                            </li>

                        </ul>

                    </div>
                
                </nav>

            </nav>

            <div class="dropdown me-5">

                <button class="btn btn-success dropdown, text-white fs-5 me-5" id="menuDesplagable" style="text-decoration: none;" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['username'] ?></button>

                <ul class="dropdown-menu" aria-labelledby="menuDesplagable">
                    <li><a class="dropdown-item" href="index.php?module=Professor&function=logout">Log out</a></li>
                    <li><a class="dropdown-item" href="index.php?module=Professor&function=view_editar">Editar</a></li>
                </ul>

            </div>

        <?php } else { ?>

            <nav class="navbar navbar-expand-lg ms-5">
                <div class="container-fluid">
                    <a class="display-3 text-decoration-none text-white" href="index.php">AVALUANET</a>
                </div>
            </nav>

        <?php } ?>

        </header>

    </div>

</body>