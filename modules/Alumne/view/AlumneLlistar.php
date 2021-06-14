<div class="container mt-5">
<h1>Alumnes</h1> 
<table class="table" style="margin-top: 2%;">
  <thead class="thead-dark"> 
  <tr>
    <th scope="col">NIA</th>
    <th>NOM</th>
    <th>COGNOMS</th>
    <th>TELEFON</th>
    <th>EMAIL</th>
    <th>codiGrup</th>
    <th></th>
    <th></th>
  </tr>
  </thead>
  <?php
    foreach ($list as $key => $value) {
      echo '<tr>';
      foreach ($value as $key2 => $value2) {
        echo '<td>'.$value2.'</td>';
      }
      echo '<td><a class="btn btn-warning" href="index.php?module=Alumne&function=alta&NIA='.$value['NIA'].'">Edit</a></td>';
      echo '<td><a class="btn btn-danger" href="index.php?module=Alumne&function=delete&NIA='.$value['NIA'].'">Delete</a></td>';
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
