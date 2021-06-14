
<!-- <!DOCTYPE html>

<html lang="es">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estils.css">

    <title>ALTA ASSIGNATURES</title>

</head>

<body>

    <header>

        <div class="bg-success">

            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">

                <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap"></use>
          </svg>
                </a>

                <div class="container-fluid">
                    <span class="navbar-brand mb-0 fs-2 text-white">AVALUANET</span>
                </div>

                <div class="col-md-12 text-end">
                    <button type="button" class="btn btn-outline-light me-3">Login</button>
                    <button type="button" class="btn btn-outline-light me-5">Sign-up</button>
                </div>

            </header>

        </div>

    </header> -->
    <div class="container">
        <section>

            <p class="fs-5 ms-3">DADES D'ALTA</p>

            <div>

                <form action="index.php?module=Asignatura&function=editar" method="post" class="row g-3 needs-validation ms-4" novalidate>
                <input type="hidden" name="codi" value="<?php echo $array['codi']?>">
                    <div class="col-md-3">
                        <label for="denominacio" class="form-label">Denominació</label>
                        <input type="text" class="form-control" value="<?php echo $array['nom']?>" name="nom" required>

                        <div class="valid-feedback">
                            Looks good!
                        </div>

                    </div>

                    <div class="col-md-2">
                        <label for="hores" class="form-label">Hores Setmanals</label>
                        <select class="form-select" name="hores" id="hores" required>
            
            <option value="<?php echo $array['hores']?>"><?php echo $array['hores']?></option>
            <option value="3">3 Hores/Setmana</option>
            <option value="5">5 Hores/Setmana</option>
            <option value="8">8 Hores/Setmana</option>

          </select>

                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>

                    </div>

                    <div class="col-md-3">
                        <label for="grup" class="form-label">Grup</label>
                        <input type="text" name="grup" class="form-control" id="grup" value="<?php echo $array['grup']?>" required>

                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>

                    </div>
                    <div>
                    <?php
                    echo '<a class="btn btn-outline-info" href="index.php?module=Asignatura&function=add_alumne&asig='.$array['codi'].'&nom='.$array['nom'].'">Acceder</a>';
                    ?>
                        <a href=""> <button type="submit" class="btn btn-outline-success ms-2 mt-3">Modificar</button></a>
 
                    </div>

                </form>

            </div>

        </section>

    </div>
<!-- </body>

</html> -->
