<?php 
$url = "index.php?module=Grup&function=modificacio&codi=".$data['codi'];
?>

<form action="<?php echo $url ?>" method="POST">
    <input type="hidden" name="metode" value="modificacio">
    <label for="codi">Codi</label>
    <input type="text" name="codi" value="
        <?php 
            if (isset($data)) {
                echo $data['codi'];
            }
        ?>
    ">        
    <label for="nom">Nom</label>
    <input type="text" name="nom" value="
        <?php
            if (isset($data)) {
                echo $data['nom'];
            }
        ?>
    ">
    <label for="curs">Curs</label>
    <input type="text" name="curs" value="
        <?php
            if (isset($data)) {
                echo $data['curs'];
            }
        ?>
    ">
    <label for="aula">Aula</label>
    <input type="text" name="aula" value="
        <?php
            if (isset($data)) {
                echo $data['aula'];
            }
        ?>
    ">
    <label for="n_alumnes">N_alumnes</label>
    <input type="text" name="n_alumnes" value="
        <?php
            if (isset($data)) {
                echo $data['n_alumnes'];
            }
        ?>
    ">
    <a href="#"><input type="submit" value="MODIFICAR"></a>
</form>
