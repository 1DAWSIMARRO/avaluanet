<div class="container">
    <section>

        <p class="fs-5 ms-3">DADES D'ALTA</p>
        <div>
            <form action="index.php?module=Asignatura&function=editar" method="post" class="row g-3 needs-validation ms-4" novalidate>
            <input type="hidden" name="codi" value="<?php echo $array['codi']?>">
                <div class="col-md-3">
                    <label for="denominacio" class="form-label">Denominació</label>
                    <input type="text" class="form-control" value="<?php echo $array['nom']?>" name="nom" required>

                    <div class="valid-feedback">
                        Looks good!
                    </div>

                </div>

                <div class="col-md-2">
                    <label for="hores" class="form-label">Hores Setmanals</label>
                    <select class="form-select" name="hores" id="hores" required>
        
        <option value="<?php echo $array['hores']?>"><?php echo $array['hores']?></option>
        <option value="3">3 Hores/Setmana</option>
        <option value="5">5 Hores/Setmana</option>
        <option value="8">8 Hores/Setmana</option>

    </select>

                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>

                </div>

                <div class="col-md-3">
                    <label for="grup" class="form-label">Grup</label>
                    <input type="text" name="grup" class="form-control" id="grup" value="<?php echo $array['grup']?>" required>

                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>

                </div>
                <div>
               
                <a class="btn btn-outline-info ms-2 mt-3" href="index.php?module=Asignatura&function=add_alumne">Tornar</a>

                <a href=""> <button type="submit" class="btn btn-outline-success ms-2 mt-3">Modificar</button></a>

                </div>

            </form>

        </div>

    </section>

</div>

