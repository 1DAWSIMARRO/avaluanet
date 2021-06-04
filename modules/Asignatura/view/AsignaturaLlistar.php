<table>
  <tr>
    <th>CODI</th>
    <th>NOM</th>
    <th>CURS</th>
    <th>NUM HORES</th>
  </tr>
  <?php
    foreach ($list as $key => $value) {
      echo '<tr>';
      foreach ($value as $key2 => $value2) {
        echo '<td>'.$value2.'</td>';
      }
      echo '<td><a class="btn btn-warning" href="index.php?module=Asignatura&function=editar&codi='.$value['codi'].'">EDITAR</a></td>';
      echo '<td><a class="btn btn-warning" href="index.php?module=Asignatura&function=baixa&codi='.$value['codi'].'">ELIMINAR</a></td>';
      echo '</tr>';
    }
  ?>
</table>