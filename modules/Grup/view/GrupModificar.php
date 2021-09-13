<?php 
$url = "index.php?module=Grup&function=modificacio&codi=".$data['codi'];
?>

<form action="<?php echo $url?>" method="POST">
<div class="container mt-5">

    <h1>Crear Grup</h1>

    <div class="row mb-4">

        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="nom">Nom</label>
                <input type="text" id="nom" class="form-control" name="nom" value="<?php echo (isset($data)) ? $data['nom'] : ""; ?>" <?php
                                                                                                                                        if (isset($data)) {
                                                                                                                                            echo $data['nom'];
                                                                                                                                        }
                                                                                                                                        ?> />
                <p id="ValidarNom" class="text-danger"></p>

            </div>
        </div>

        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="curs">Curs</label>
                <input type="text" id="curs" class="form-control" name="curs" value="<?php echo (isset($data)) ? $data['curs'] : ""; ?>" />
                <p id="ValidarCurs" class="text-danger"></p>
            </div>
        </div>

    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="aula">Aula</label>
                <input type="text" id="aula" class="form-control" name="aula" value="<?php echo (isset($data)) ? $data['aula'] : ""; ?>" />
                <p id="ValidarCognom" class="text-danger"></p>

            </div>
        </div>

    </div>

    <a href="./index.php?module=Grup&function=llistar"><button type="button" class="btn btn-secondary mb-4">Tornar</button></a>

    <a href="#"><input class="btn btn-outline-success btn-block mb-4" type="submit" value="Modificar" id="send"></a>

</div>
</form>
