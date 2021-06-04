<div class="container mt-5">

    <h1>Alumnos disponibles</h1> 
<div class="row justify-content-between">
<div class="col-5">
<table class="table" style="margin-top: 2%;">
  <thead class="thead-dark"> 
  <tr>
    <th scope="col">NIA</th>
    <th scope="col">NOM</th>
    <th scope="col">COGNOMS</th>
    <th scope="col">TELEFON</th>
    <th scope="col">EMAIL</th>
    <th scope="col">codiGrup</th>
  </tr>
  </thead>
  <tbody>
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
  </tbody>
</table>
</div>
<div class="col-4">
<table class="table" style="margin-top: 2%;">
<thead>
    <tr>
        <th>Info Assignatura</th>
    </tr>
</thead>
    <tr>
        <td>Horas semanales: 5</td>
        </tr>
        <tr>
        <td>Aula: 1DAW</td>
        </tr>
        <tr>
        <td>Nivel: Grado Superior</td>
    </tr>
</table>
</div>
</div>
<div class="row align-items-center" style="margin-top: 3%;">
  <div class="col-4 align-self-end">
<a class="btn btn-success" href="index.php?module=Alumne&function=alta">Nuevo alumno</a>
<a class="btn btn-success">Agregar alumno</a>
</div>
</div>
</div>