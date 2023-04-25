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
                    <th scope="col">Descripcion</th>
                    <th class="d-flex justify-content-center" scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($proyectos as $proyecto){ ?>
                <tr class="">
                    <td scope="row"><?php echo $proyecto["Proyecto_id"] ?></td>
                    <td><?php echo $proyecto["proyecto_name"] ?></td>
                    <td>
                        <img width="100" src="../assets/img/<?php echo $proyecto["proyecto_img"] ?>" alt="img_proyecto">
                    </td>
                    <td><?php echo $proyecto["proyecto_desc"] ?></td>
                    <td class="d-flex justify-content-center">
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a class="btn btn-warning" href="">Editar</a>
                            <a class="btn btn-danger" href="?borrar=<?php echo $proyecto["Proyecto_id"];?>">Eliminar</a>
                        </div>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>
