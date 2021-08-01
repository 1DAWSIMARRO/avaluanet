
<div class="container mt-5">
  <h1>Crear Alumno</h1>
  <?php
    if (isset($data)) {
      echo '<form action="#" method="post" id="formulario edit">';
    } else {
      echo '<form action="index.php?module=Avaluable&function=create" method="post" id="formulario">';
    }
  ?>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="title">Titul</label>
        <input type="text" id="title" class="form-control" name="title" value="<?php echo (isset($data)) ? $data['nom'] : ""; ?>"/>
        <p id="title_e" class="text-danger"></p>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <label  class="form-label" for="date">Data entrega</label>
        <input type="date" id="date" class="form-control" name="date" value="<?php echo (isset($data)) ? $data['data_lliurament'] : ""; ?>"/>
        <p id="date_e" class="text-danger"></p>
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="description">Descripció</label>
        <textarea class="form-control" id="description" name="description" rows="3"><?php echo (isset($data)) ? $data['descripcio'] : ""; ?></textarea>
        <p id="description_e" class="text-danger"></p>
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="ava">Avaluació</label>
        <select class="form-select" name="ava" id="ava">
        <option value='0' selected>--Avaluació--</option>'
            <?php
            if (isset($data)) {
              foreach ($ava as $key => $value) {
                if ($value==$data['avaluacio']) {
                  echo '<option value='.$value.' selected>'.$value.'</option>';
                }else{
                  echo '<option value='.$value.'>'.$value.'</option>';
                }
              }
            }else{
              foreach ($ava as $key => $value) {
                echo '<option value='.$value.'>'.$value.'</option>';
              }
            }
            ?>
        </select>
        <p id="ava_e" class="text-danger"></p>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="type">Tipus</label>
        <select class="form-select" name="type" id="type">
        <option value='0' selected>--Tipus--</option>'
            <?php
            if (isset($data)) {
              foreach ($type as $key => $value) {
                if ($value==$data['tipus']) {
                  echo '<option value='.$value.' selected>'.$value.'</option>';
                }else{
                  echo '<option value='.$value.'>'.$value.'</option>';
                }
              }
            }else{
              foreach ($type as $key => $value) {
                echo '<option value='.$value.'>'.$value.'</option>';
              }
            }
            ?>
        </select>
        <p id="type_e" class="text-danger"></p>
      </div>
    </div>
  </div>

  <a href="index.php?module=Asignatura&function=add_alumne"><button type="button" class="btn btn-secondary mb-4">Tornar</button></a>
  
  <?php
    if (isset($data)) {
      echo '<input class="btn btn-outline-success mb-4 edit" type="button" value="Editar Avaluable" id="send">';
    } else {
      echo '<input class="btn btn-outline-success mb-4" type="button" value="Afegir Avaluable" id="send">';
    }
  ?>

  <a href="index.php?module=Avaluable&function=delete"><button type="button" class="btn btn-outline-danger mb-4">Eliminar</button></a>
</div>