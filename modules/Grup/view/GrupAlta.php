<?php
    $url = "index.php?module=Grup&function=alta";
?>
<form action="<?php echo $url?>" method="POST">
<div class="container mt-5">

    <h1>Crear Grup</h1>

    <div class="row mb-4">

        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="nom">Nom</label>
                <input type="text" id="nom" class="form-control" name="nom" value="<?php echo (isset($data)) ? $data['nom'] : ""; ?>"/>
                <p id="ValidarNom" class="text-danger"></p>

            </div>
        </div>

        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="curs">Curs</label>
                <select class="form-select" name="curs" id="curs">
                    <option value="GS">Grau Superior</option>
                    <option value="GM">Grau Mitja</option>
                    <option value="ESO">ESO</option>
                </select>
                <p id="ValidarCurs" class="text-danger"></p>
            </div>
        </div>

    </div>

    <a href="index.php?module=Grup&function=llistar"><button type="button" class="btn btn-secondary mb-4">Tornar</button></a>

    <input class="btn btn-outline-success btn-block mb-4" type="submit" value="Modificar" id="send">

</div>
</form>