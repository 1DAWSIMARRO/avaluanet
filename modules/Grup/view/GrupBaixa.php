<?php 
$url = "index.php?module=Grup&function=baixa&codi=".$data['codi'];
?>

<form action="<?php echo $url ?>" method="POST">
    <input type="hidden" name="metode" value="baixa">
    <label for="codi">Codi</label>
    <input type="text" name="codi" value="<?php 
            if (isset($data)) {
                echo $data['codi'];
            }
        ?>">        
    <a href="#"><input type="submit" value="BAIXA"></a>
</form>
