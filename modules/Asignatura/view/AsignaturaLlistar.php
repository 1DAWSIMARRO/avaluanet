<!-- <!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="./modules/Asignatura/view/js/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


    <title>ASSIGNATURES</title>

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

    </header>

    <section>

        
 -->
    <div class="container">
        <p class="h1 mt-5 mb-3">Assignatures</p>
            
            <table class="table table-hover table-responsive table-fit" id="tabla">

<thead>
    <tr>
        <th scope="col">Codi</th>
        <th scope="col">Nom de l'assignatura</th>
        <th scope="col">Grup</th>
        <th scope="col">Hores Setmanals</th>

    </tr>
<tbody>
    <?php
    foreach ($list as $key => $value) {
        echo '<tr>';
        foreach ($value as $key2 => $value2) {
          echo '<td>'.$value2.'</td>';
        }
        echo '<td><a class="btn btn-outline-info" href="index.php?module=Asignatura&function=add_alumne&asig='.$value['codi'].'">Acceder</a></td>';
        echo '</tr>';
    }
  ?>
</thead>
</tbody>

</table>

        </div>

        <div class="modal fade" id="alerta_eliminacion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ATENCIÓ</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        Va a eliminar una assignatura.<br> Desitja continuar?
                    </div>

                    <div class="modal-footer">
                        <a id="aceptar" type="sumbit" class="btn btn-outline-danger" onclick="accionEliminar()" >Eliminar</a>
                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">No</button>
                    </div>

                </div>
            </div>
            <div>
          <a href="index.php?module=Asignatura&function=alta" class="btn btn-outline-success ms-5 mt-3">Alta Nova Asignatura</a>

        </div>
        </div>
<!-- 

</body>

</html> -->
