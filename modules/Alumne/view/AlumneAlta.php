<div class="container mt-5">
  <h1>Crear Alumne</h1>
  <?php
  if (isset($data)) {
    echo '<form action="#" method="post" id="formulario edit">';
  } else {
    echo '<form action="#" method="post" id="formulario">';
  }
  ?>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="NIA">NIA</label>
        <input type="text" id="NIA" class="form-control" name="NIA" value="<?php echo (isset($data)) ? $data['NIA'] : ""; ?>" <?php
                                                                                                                              if (isset($data)) {
                                                                                                                                echo "disabled";
                                                                                                                              }
                                                                                                                              ?> />
        <p id="ValidarNia" class="text-danger"></p>

      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="nom">Nom</label>
        <input type="text" id="nom" class="form-control" name="nom" value="<?php echo (isset($data)) ? $data['nom'] : ""; ?>" />
        <p id="ValidarNom" class="text-danger"></p>
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="Cognoms">Cognoms</label>
        <input type="text" id="cognoms" class="form-control" name="cognoms" value="<?php echo (isset($data)) ? $data['cognoms'] : ""; ?>" />
        <p id="ValidarCognom" class="text-danger"></p>

      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="tel">Tel</label>
        <input type="text" id="tel" class="form-control" name="tel" value="<?php echo (isset($data)) ? $data['tel'] : ""; ?>" />
        <p id="ValidarTel" class="text-danger"></p>
      </div>
    </div>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="email">Email</label>
    <input type="text" id="email" class="form-control" name="email" value="<?php echo (isset($data)) ? $data['email'] : ""; ?>" />
    <p id="ValidarEmail" class="text-danger"></p>
  </div>

  <!-- Grup input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="grup">Grup</label>
    <select name="grup" id="grup">
      <option value="1">1</option>
      <!-- <option value="saab">Saab</option>
          <option value="mercedes">Mercedes</option>
          <option value="audi">Audi</option> -->
    </select>
  </div>

  <a href="./index.php"><button type="button" class="btn btn-secondary mb-4">Tornar</button></a>

  <input class="btn btn-outline-success btn-block mb-4" type="button" value="Afegir Alumne" id="send">


</div>
</div>