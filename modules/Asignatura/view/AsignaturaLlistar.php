
    <div class="container">
        <p class="h1 mt-5 mb-3">Assignatures</p>
            
            <table class="table table-hover table-responsive table-fit" id="tabla">

<thead>
    <tr>
        <th scope="col">Codi</th>
        <th scope="col">Nom de l'assignatura</th>
        <th scope="col">Grup</th>
        <th scope="col">Hores Setmanals</th>

    </tr>
<tbody>
    <?php
    foreach ($list as $key => $value) {
      echo '<tr>';
      foreach ($value as $key2 => $value2) {
        echo '<td>'.$value2.'</td>';
      }
      echo '<td><a class="btn btn-outline-info" href="index.php?module=Asignatura&function=add_alumne&asig='.$value['codi'].'&nom='.$value['nom'].'">Acceder</a></td>';
      echo '</tr>';
    }
  ?>
    </thead>
    
</tbody>

</table>
<a class="btn btn-outline-success" href="index.php?module=Asignatura&function=afegir">Afegir una asignatura</a>
        </div>


        </div>

