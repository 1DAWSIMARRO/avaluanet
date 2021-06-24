<div class="container">

  <table class="table table-hover table-responsive table-fit" id="tabla">

    <thead>
      <tr>
        <th scope="col">Codi</th>
        <th scope="col">Nom de l'assignatura</th>
        <th scope="col">Hores Setmanals</th>
        <th></th>

      </tr>
    <tbody>
      <?php
      foreach ($list as $key => $value) {
        echo '<tr>';
        foreach ($value as $key2 => $value2) {
          echo '<td>' . $value2 . '</td>';
        }
        echo '<td><a class="btn btn-outline-info" href="index.php?module=Asignatura&function=add_alumne&asig=' . $value['codi'] . '">Accedir</a></td>';
        echo '</tr>';
      }
      ?>
      </thead>

    </tbody>

  </table>
  <a class="btn btn-outline-success" href="index.php?module=Asignatura&function=afegir">Afegir Asignatura</a>
</div>


</div>