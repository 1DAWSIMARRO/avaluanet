<div class="container mt-5">

<div class = "row">
  <div class="col-4">
    <h1><?php echo $asignatura['nom']?></h1>
  </div>
  <div class="col-1">
  <td><a class="btn btn-warning" href="index.php?module=Asignatura&function=modificar&codi='<?php echo $asignatura['codi'] ?>'">Modificar</a></td>
  </div>
  <div class="col-1 ms-1">
  <td><a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modaleliminar">Eliminar</a></td>
  </div>
</div>

<!-- Modal for "eliminar" -->
<div class="modal fade" id="modaleliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar asignatura</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Està vosté segur d'eliminar l'assignatura <?php echo $asignatura['nom']?> de la base de dades?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Volver</button>
        <a type="button" href="index.php?module=Asignatura&function=baixa&codi='<?php echo $asignatura['codi'] ?>'" class="btn btn-primary">Eliminar</a>
      </div>
    </div>
  </div>
</div>
<!-- end -->

<div class="row justify-content-between">
<div class="col-5">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active text-dark" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Alumne</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link text-dark" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Qualificacion</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
      echo '<td><a class="btn btn-danger" href="index.php?module=Asignatura&function=remove&NIA='.$value['NIA'].'">X</a></td>';
      echo '</tr>';
    }
  ?>
  </tbody>
</table>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <table class="table" style="margin-top: 2%;">
  <thead class="thead-dark"> 
  <tr>
  <th scope="col">NIA</th>
    <th scope="col">NOM</th>
    <th scope="col">Avaluacio</th>
    <th scope="col">Avaluable</th>
    <th scope="col">Examen</th>
    <th scope="col">Nota Final</th>
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

</div>


<!-- <table class="table" style="margin-top: 2%;">
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
    
    // foreach ($list as $key => $value) {
    //   echo '<tr>';
    //   foreach ($value as $key2 => $value2) {
    //     echo '<td>'.$value2.'</td>';
    //   }
    //   echo '<td><a class="btn btn-danger" href="index.php?module=Asignatura&function=remove&NIA='.$value['NIA'].'">Delete</a></td>';
    //   echo '</tr>';
    // }
  ?>
  </tbody>
</table> -->
</div>
<div class="col-4">
<table class="table" style="margin-top: 2%;">
<thead>
    <tr>
        <th>Info Assignatura</th>
    </tr>
</thead>
    <tr>
        <td>Hores: <?php echo $asignatura['hores']?></td>
        </tr>
        <tr>
        <td>Grup: <?php echo $asignatura['grup']?></td>
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
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalagregaralumno">
  Agregar Alumne
</button>
<a href="index.php?module=Avaluable&function=llistar" class="btn btn-success">Agregar avaluable</a>

<!-- Evitar cerrar el modal -->
<?php
if (isset($_REQUEST['modal'])) {
  echo '<script src="'.VIEW_ASIGNATURA.'/js/script_modal.js"></script>';
}
?>

<!-- Modal -->
<div class="modal fade" id="modalagregaralumno" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalagregaralumnoLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Llista Alumne</h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <input class="mx-auto" type="text" name="buscar" id="buscar" placeholder="Buscar" autocomplete="off"></input>
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