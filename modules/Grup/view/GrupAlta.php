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
                <input type="text" id="nom" class="form-control" name="nom" required/>
                <p id="ValidarNom" class="text-danger"></p>

            </div>
        </div>

        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="curs">Curs</label>
                <select class="form-select" name="curs" id="curs">
                    <option value="0" selected="selected" disabled>--Selecciona un curs--</option>
                    <?php
                        foreach ($cursos as $key => $value) {
                            echo '<option value='.$value['code'].'>'.$value['name'].'</option>';
                        }
                    ?>
                </select>
                <p id="ValidarCurs" class="text-danger"></p>
            </div>
        </div>
    </div>

    <a href="index.php?module=Grup&function=llistar"><button type="button" class="btn btn-secondary mb-4">Tornar</button></a>
    <input class="btn btn-outline-success btn-block mb-4" type="submit" value="Crear" id="send">

</div>
</form>

<div class="container mt-5">
    <form action="index.php?module=Grup&function=add_grup" method="POST">

        <h1>Agregar Grup Existent</h1>

        <div class="row mb-4">

            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="curs">Curs</label>
                    <select class="form-select" name="curs" id="curs">
                        <option value="0" selected="selected" disabled>--Selecciona un grup--</option>
                        <?php
                            foreach ($grups as $key => $value) {
                                echo '<option value='.$value['nom'].'>'.$value['nom'].'</option>';
                            }
                        ?>
                    </select>
                    <p id="ValidarGrup" class="text-danger"></p>
                </div>
            </div>
        </div>

        <a href="index.php?module=Grup&function=llistar"><button type="button" class="btn btn-secondary mb-4">Tornar</button></a>
        <input class="btn btn-outline-success btn-block mb-4" type="submit" value="Agregar" id="send">

    </form>
</div>