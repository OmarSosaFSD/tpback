<?php
if ($_POST) {
    require_once("../../bd.php");
//aca tenemos que recolectar los datos del metodo POST
$usuario = (isset($_POST["usuario"]) ? $_POST["usuario"] : "");
$password = (isset($_POST["password"]) ? $_POST["password"] : "");
$correo = (isset($_POST["correo"]) ? $_POST["correo"] : "");
//preparar la insercion de los datos a la bd y codeamos los valores sin comillas porque 
//asignamos una variable
$sentencia=$conexion->prepare("INSERT INTO `tbl_usuarios`(`id`, `usuario`, `password`, `correo`) 
                              VALUES (NULL,:usuario,:password,:correo);");
//asignamos los valores que vienen del metodo post a la consulta
$sentencia->bindValue(":usuario", $usuario);
$sentencia->bindValue(":password", $password);
$sentencia->bindValue(":correo", $correo);
//y ahora se ejecuta la consulta de creacion de nuevo usuario en la bd
$sentencia->execute();
//aca hacemos que vuerlva al index y nos muestre los datos nuevos
header("Location:index.php");
}

?>


<?php require_once("../../templates/header.php")?>
<div class="card">
    <div class="card-header">
        Usuario
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
              <label for="usuario" class="form-label">Nombre de usuario</label>
              <input type="text"
                class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="">
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