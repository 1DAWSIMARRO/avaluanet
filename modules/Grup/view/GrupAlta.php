<div class="container mt-5">

    <h1>Crear Grup</h1>

    <?php
    $url = "index.php?module=Grup&function=alta";
    ?>

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

        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="n_alumnes">Nº Alumnes</label>
                <input type="text" id="n_alumnes" class="form-control" name="n_alumnes" value="<?php echo (isset($data)) ? $data['n_alumnes'] : ""; ?>" />
                <p id="ValidarTel" class="text-danger"></p>
            </div>
        </div>

    </div>

    <a href="./index.php"><button type="button" class="btn btn-secondary mb-4">Tornar</button></a>

    <input class="btn btn-outline-success btn-block mb-4" type="button" value="Afegir Grup" id="send">

</div>