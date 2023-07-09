<?php require_once("../../templates/header.php")?>
<div class="card">
    <div class="card-header">
        Usuario
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
              <label for="nombredelusuario" class="form-label">Nombre de usuario</label>
              <input type="text"
                class="form-control" name="nombredelusuario" id="nombredelusuario" aria-describedby="helpId" placeholder="">
                <div class="mb-3">
                  <label for="password" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="">
                </div>
                <div class="mb-3">
                  <label for="correo" class="form-label">Correo</label>
                  <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="abc@mail.com">
                  <small id="emailHelpId" class="form-text text-muted">Help text</small>
                </div>
            </div>
            <button type="submit" name="" id="" class="btn btn-primary" role="button">Agregar registro</button>
            <a name="" id="" class="btn btn-danger" href="./index.php" role="button">Cancelar</a>
        </form>
    </div>
</div>
<?php require_once("../../templates/footer.php")?>