<?php require_once("../../templates/header.php")?>
<h2>Empleados</h2>
<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="./crear.php" role="button">Agregar empleado</a>
    </div>
    <div class="card-body">
       <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th><!--1ER Y 2DO NOMBRE-->
                    <th scope="col">FOTO</th>
                    <th scope="col">CV</th>
                    <th scope="col">PUESTO</th>
                    <th scope="col">FECHA INGRESO</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">0001</td>
                    <td>OMAR SOSA</td>
                    <td>imagen.jpg</td>
                    <td>R1C2</td>
                    <td>cv.pdf</td>
                    <td>06/06/2022</td>
                    <td>
                    <a name="" id="" class="btn btn-primary" href="#" role="button">Carta</a>  | 
                    <a name="" id="" class="btn btn-primary" href="./editar.php" role="button">Editar</a> | 
                    <a name="" id="" class="btn btn-danger" href="./index.php" role="button">Eliminar</a>
                </td>
                </tr>
            </tbody>
        </table>
       </div>
       
    </div>
    <div class="card-footer text-muted">
        Narnia
    </div>
</div>
<?php require_once("../../templates/footer.php")?>
