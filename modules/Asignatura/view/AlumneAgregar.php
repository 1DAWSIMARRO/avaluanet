<div class="container mt-5">

<div class = "row">
  <div class="col-5">
    <h1>Llenguatge de marques</h1> 
  </div>
  <div class="col-1">
    <button type="button" class="btn btn-success" >Editar </button>
  </div>
  <div class="col-1">
    <button type="button" class="btn btn-success" >Eliminar</button>
  </div>
</div>
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
    <th></th>
  </tr>
  </thead>
  <tbody>
  <?php
    
    foreach ($list as $key => $value) {
      echo '<tr>';
      foreach ($value as $key2 => $value2) {
        echo '<td>'.$value2.'</td>';
      }
      echo '<td><a class="btn btn-danger" href="index.php?module=Asignatura&function=remove&NIA='.$value['NIA'].'">Delete</a></td>';
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

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Agregar Alumne
</button>

<!-- Modal -->

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Llista Alumne</h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <input class="mx-auto" type="text" name="buscar" id="buscar" placeholder="Buscar"></input>
      <table class="table" style="margin-top: 2%;">
  <thead class="thead-dark"> 
  <tr>
  <th></th>
    <th scope="col">NIA</th>
    <th>NOM</th>
    <th>COGNOMS</th>
    <th>TELEFON</th>
    <th>EMAIL</th>
    <th>codiGrup</th>
  </tr>
  </thead>
  <?php
    foreach ($list2 as $key => $value) {
      echo '<tr>';
      echo '<td><a class="text-dark" href="index.php?module=Asignatura&function=inAlu&NIA='.$value['NIA'].'" style="text-decoration: none;">+</a></td>';
      foreach ($value as $key2 => $value2) {
        echo '<td>'.$value2.'</td>';
      }
     echo '</tr>';
     }
  ?>
</table>
</div>
      <div class="modal-footer">
      <button type="button" class="btn btn-success" >Nuevo alumno</button>
      <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>