<div class="container">

  <table class="table" style="margin-top: 2%;">

    <thead class="thead-dark">

      <tr>
        <th>CODI</th>
        <th>NOM</th>
        <th>CURS</th>
        <th></th>
        <th></th>
      </tr>

    </thead>

    <?php

    foreach ($list as $key => $value) {
      echo '<tr>';
      foreach ($value as $key2 => $value2) {
        echo '<td>' . $value2 . '</td>';
      }

      echo '<td><a href="index.php?module=Grup&function=viewEditar&nom=' . $value['nom'] . '"><input type="button" class="btn btn-outline-warning" value="Editar"></a></td>';
      echo '<td><a href="index.php?module=Grup&function=baixa&nom=' . $value['nom'] . '"><input type="button" class="btn btn-outline-danger" value="Eliminar"></a></td>';
      echo '</tr>';
    }

    ?>

  </table>

  <div class="row align-items-center" style="margin-top: 3%;">

    <div class="col-4 align-self-end">
      <a class="btn btn-outline-success" href="index.php?module=Grup&function=alta">Nou Grup</a>
    </div>

  </div>

</div>