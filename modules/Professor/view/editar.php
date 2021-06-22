<!DOCTYPE html>
<html lang="en">

<body>

    <br>
    <br>
    <br>
    <div class="container">
        <form class="form-horizontal" role="form" action="index.php?module=Professor&function=editar" method="POST" name="editForm" id="formulario">
            <h2>Editar</h2>

            <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">DNI</label>
                <div class="col-sm-9">
                    <input type="text" name="dni" value='<?php echo $data['dni'] ?>' class="form-control" id="dni" readonly>
                    <p class="text-danger" id="mal1"></p>

                </div>
            </div>

            <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">Apellidos</label>
                <div class="col-sm-9">
                    <input type="text" name="cognoms" value='<?php echo $data['cognoms'] ?>' id="cognoms" class="form-control"
                        id="apellidos" autofocus>
                    <p class="text-danger" id="mal3"></p>

                </div>
            </div>


            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" name="email" value='<?php echo $data['email'] ?>' id="email" class="form-control">
                    <p class="text-danger" id="mal4"></p>

                </div>
            </div>

            <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">Username</label>
                <div class="col-sm-9">
                    <input type="text" name="username" value='<?php echo $data['username'] ?>' class="form-control" id="username" autofocus>
                    <p class="text-danger" id="mal5"></p>

                </div>
            </div>



            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" name="password" id="password" class="form-control">
                    <p class="text-danger" id="mal6"></p>

                </div>
            </div>
            <br>
            <p class="text-danger" id="error"></p>
            <br>
            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <button type="submit" class="btn btn-outline-success" id="registrar">Editar</button>
                    <br>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12 form-group">
                    
                    <a href="index.php?module=Asignatura&function=llistar" class="btn btn-outline-info" id="registrar">Atrás</a>

                </div>
                
            </div>
        </form>


    </div>


</body>

</html>