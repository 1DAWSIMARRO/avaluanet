<form action="index.php?module=Asignatura&function=modificar" method="post">
    <h4>Camps a modificar</h4>
    <input type="hidden" name="codi" value="<?php echo $array['codi']?>">
    <label for="nom">nom</label>
    <input type="text" name="nom" value="<?php echo $array['nom']?>">
    <label for="grup">grup</label>
    <input type="text" name="grup" value="<?php echo $array['grup']?>">
    <label for="hores">hores</label>
    <input type="number" name="hores" value="<?php echo $array['hores']?>">
    <input type="submit" value="Send" id="send">
</form>