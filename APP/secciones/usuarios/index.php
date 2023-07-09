<?php require_once("../../templates/header.php")?>
<h2>Usuarios</h2>
<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="./crear.php" role="button">Agregar registro</a>
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">CONTRASEÑA</th>
                <th scope="col">CORREO</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">0001</td>
                <td>OMAR SOSA</td>
                <td>*******</td>
                <td>sosaomar22@gmail.com</td>
                <td>
                    <a name="" id="" class="btn btn-primary" href="./editar.php" role="button">Editar</a>
                    <a name="" id="" class="btn btn-danger" href="./index.php" role="button">Eliminar</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
    </div>
</div>
<?php require_once("../../templates/footer.php")?>