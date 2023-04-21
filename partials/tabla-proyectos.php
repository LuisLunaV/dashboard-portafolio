<?php include "../controllers/tabla-proyectos/mostrar-proyectos.php" ?>
<?php $proyectos = mostrarProyectos();?>

<div class="container">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Nombre del proyecto</th>
                    <th scope="col">Imagen</th>
                    <th class="d-flex justify-content-center" scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($proyectos as $proyecto){ ?>
                <tr class="">
                    <td scope="row"><?php echo $proyecto["Proyecto_id"] ?></td>
                    <td><?php echo $proyecto["proyecto_name"] ?></td>
                    <td><?php echo $proyecto["proyecto_img"] ?></td>
                    <td class="d-flex justify-content-center">
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-warning">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>
