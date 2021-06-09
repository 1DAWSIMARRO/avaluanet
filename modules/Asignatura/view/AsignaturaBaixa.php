<form action="index.php?module=Asignatura&function=baixa" method="post">
    <label for="codi">Codi de l'assignatura a eliminar</label>
    <input type="number" name="codi">
    <input type="submit" value="Send" id="send">
</form>
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
      echo "<td><button type='submit' name='codi' value=".$value['codi'].">editar</button></td>";
      echo '<td><a class="btn btn-warning" href="index.php?module=Asignatura&function=editar&codi='.$value['codi'].'">Edit</a></td>';
      echo '</tr>';
    }
  ?>
</table>