<?php
require_once("../../bd.php");

if (isset($_GET["txtID"])) {
    //recolectar datos del metodo GET
       $txtID = (isset($_GET["txtID"]) ? $_GET["txtID"] : "");
$sentencia=$conexion->prepare("SELECT * FROM `tbl_usuarios` WHERE id=:id");
$sentencia->bindValue(":id", $txtID);
$sentencia->execute();
$registro = $sentencia->fetch(PDO::FETCH_LAZY);
$usuario = $registro['usuario'];
$password = $registro['password'];
$correo = $registro['correo'];
//print_r($registro);
}
if ($_POST) {
    print_r($_POST);
    //aca tenemos que recolectar los datos del metodo POST
    $txtID = (isset($_POST["txtID"]) ? $_POST["txtID"] : "");
    $usuario = (isset($_POST["usuario"]) ? $_POST["usuario"] : "");
    $password = (isset($_POST["password"]) ? $_POST["password"] : "");
    $correo = (isset($_POST["correo"]) ? $_POST["correo"] : "");
    //preparar la insercion de los datos a la bd
    $sentencia=$conexion->prepare("UPDATE `tbl_usuarios` 
                                   SET `usuario`=:usuario, `password`=:password, `correo`=:correo 
                                   WHERE id=:id");
    //asignamos los valores que vienen del metodo post a la consulta
    $sentencia->bindValue(":usuario", $usuario);
    $sentencia->bindValue(":password", $password);
    $sentencia->bindValue(":correo", $correo);
    $sentencia->bindValue(":id", $txtID);
    $sentencia->execute();
    header("Location:index.php");
    }
require_once("../../templates/header.php");?>
<div class="card">
    <div class="card-header">
        Usuario
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
                <label for="txtID" class="form-label">ID:</label>
                <input type="text"
                class="form-control" name="txtID" id="txtID" aria-describedby="helpId"
                value="<?php echo $txtID;?>" placeholder="" readonly>
                <label for="usuario" class="form-label">Nombre de usuario</label>
                <input type="text"
                class="form-control" name="usuario" id="usuario" aria-describedby="helpId" 
                value="<?php echo $usuario;?>"placeholder="">
                <div class="mb-3">
                  <label for="password" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" name="password" id="password" 
                  value="<?php echo $password;?>"placeholder="">
                </div>
                <div class="mb-3">
                  <label for="correo" class="form-label">Correo</label>
                  <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" 
                  value="<?php echo $correo;?>"placeholder="abc@mail.com">
                  <small id="emailHelpId" class="form-text text-muted">Help text</small>
                </div>
            </div>
            <button type="submit" name="" id="" class="btn btn-primary" role="button">Editar registro</button>
            <a name="" id="" class="btn btn-danger" href="./index.php" role="button">Cancelar</a>
        </form>
    </div>
</div>
<?php require_once("../../templates/footer.php")?>