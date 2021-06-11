<table class="table" style="margin-top: 2%;">
  <thead class="thead-dark"> 
  <tr>
    <th>CODI</th>
    <th>NOM</th>
    <th>CURS</th>
    <th>AULA</th>
    <th>NºAULMNES</th>
  </tr>
  </thead>
  <?php
    foreach ($list as $key => $value) {
      echo '<tr>';
      foreach ($value as $key2 => $value2) {
        echo '<td>'.$value2.'</td>';
        
      }
      echo '<td><a href="index.php?module=Grup&function=viewEditar&codi='.$value['codi'].'"><input type="button" value="EDITAR"></a></td>';
      echo '</tr>';
    }
  ?>
</table>
