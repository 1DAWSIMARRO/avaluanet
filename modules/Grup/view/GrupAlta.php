<?php 
$url = "index.php?module=Grup&function=alta";
?>
<form action="<?php echo $url ?>" method="POST">
    <input type="hidden" name="metode" value="alta">
    <label for="nom">Nom</label>
    <input type="text" name="nom" value="<?php
            if (isset($data)) {
                echo $data['nom'];
            }
        ?>">
    <label for="curs">Curs</label>
    <input type="text" name="curs" value="<?php
            if (isset($data)) {
                echo $data['curs'];
            }
        ?>">
    <label for="aula">Aula</label>
    <input type="text" name="aula" value="<?php
            if (isset($data)) {
                echo $data['aula'];
            }
        ?>">
    <label for="n_alumnes">N_alumnes</label>
    <input type="text" name="n_alumnes" value="<?php
            if (isset($data)) {
                echo $data['n_alumnes'];
            }
            $url = "index.php?module=Grup&function=alta";
        ?>">
    <a href="#"><input type="submit" value="ALTA"></a>
</form>