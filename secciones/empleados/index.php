<?php
require_once("../../bd.php");

$sentencia=$conexion->prepare("SELECT *, 
                            (SELECT nombredelpuesto    
                            FROM `tbl_puestos` 
                            WHERE tbl_puestos.id=tbl_empleados.idpuesto
                            LIMIT 1) 
                            AS puesto
                            FROM `tbl_empleados`");
/*Lo que acabo de hacer aca es seleccionar de la tabla de puestos, el nombre del puesto en
el cual tiene que coincidir su id con el id del empleado de la tabla de empleados, y limitandolo
a que me traiga un solo registro en el caso de que haya mas de un puesto asignado a un empleado
y lo guardo en una nueva variable "puesto" en vez de cargar todo en "nombredelpuesto"*/
$sentencia->execute();
$lista_tbl_empleados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
//print_r($lista_tbl_usuarios);
?>


<?php require_once("../../templates/header.php")?>
<h2>Empleados</h2>
<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="./crear.php" role="button">Agregar empleado</a>
    </div>
    <div class="card-body">
       <div class="table-responsive">
        <table class="table">
            <thead><!--tablehead: fila ppal donde aparecen las referencias-->
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
            <tbody><!--tablebody: aca aparece lo que esta en la base de datos-->
            <?php foreach ($lista_tbl_empleados as $registro) {?><!--foreach para imprimir cada 
                                                                una de las filas del array de la bd -->
            <tr class=""><!--tablerow-->
                    <td scope="row"><?php echo $registro['id']; ?></td><!--tabledata-->
                    <td><?php echo $registro['primernombre']; ?>
                        <?php echo $registro['primerapellido']; ?>
                    </td>
                    <td>
                        <img width="50" class="img-fluis rounded" src="./img/<?php echo $registro['foto']; ?>" />
                    </td>
                    <td><?php echo $registro['cv']; ?></td>
                    <td><?php echo $registro['puesto']; ?></td>
                    <td><?php echo $registro['fechadeingreso']; ?></td>
                    <td>
                    <a name="" id="" class="btn btn-primary" href="#" role="button">Carta</a>  | 
                    <a name="" id="" class="btn btn-primary" href="./editar.php" role="button">Editar</a> | 
                    <a name="" id="" class="btn btn-danger" href="./index.php" role="button">Eliminar</a>
                </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
       </div>
       
    </div>
    <div class="card-footer text-muted">
        Narnia
    </div>
</div>
<?php require_once("../../templates/footer.php")?>
