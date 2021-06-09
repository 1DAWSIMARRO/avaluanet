<table>
  <tr>
    <th>NIA</th>
    <th>NOM</th>
    <th>COGNOMS</th>
    <th>TELEFON</th>
    <th>EMAIL</th>
    <th>CODI GRUP</th>
  </tr>
  <?php
    foreach ($list as $key => $value) {
      echo '<tr>';
      foreach ($value as $key2 => $value2) {
        echo '<td>'.$value2.'</td>';
      }
      echo '</tr>';
    }
  ?>
</table>
<div class="row align-items-center" style="margin-top: 3%;">
  <div class="col-4 align-self-end">
<a class="btn btn-success" href="index.php?module=Alumne&function=alta">Nuevo alumno</a>
</div>
</div>
</div>
