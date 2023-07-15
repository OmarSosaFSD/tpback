<?php
if ($_POST) {
    require_once("../../bd.php");
//aca tenemos que recolectar los datos del metodo POST
$nombredelpuesto = (isset($_POST["nombredelpuesto"]) ? $_POST["nombredelpuesto"] : "");
//preparar la insercion de los datos a la bd
$sentencia=$conexion->prepare("INSERT INTO `tbl_puestos`(`id`, `nombredelpuesto`) 
                               VALUES (null,:nombredelpuesto)");
//asignamos los valores que vienen del metodo post a la consulta
$sentencia->bindValue(":nombredelpuesto", $nombredelpuesto);
$sentencia->execute();
header("Location:index.php");
}

?>
<?php require_once("../../templates/header.php")?>
<div class="card">
    <div class="card-header">
        Puesto
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
              <label for="nombredelpuesto" class="form-label">Nombre del puesto</label>
              <input type="text"
                class="form-control" name="nombredelpuesto" id="nombredelpuesto" aria-describedby="helpId" placeholder="">
            </div>
            <button type="submit" name="" id="" class="btn btn-primary" role="button">Agregar registro</button>
            <a name="" id="" class="btn btn-danger" href="./index.php" role="button">Cancelar</a>
        </form>
    </div>
</div>
<?php require_once("../../templates/footer.php")?>