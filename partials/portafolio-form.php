<div class="container  ">
<div class="row d-flex justify-content-center">
    
    <div class="col-md-8">
        <br>
        <div class="card">
            <div class="card-header">
Datos de proyecto            </div>
            <div class="card-body">

<form action="portafolio.php" method="POST">
        <div class="mb-3 row">
            <div class="w-100">
                <label for="nombreProyecto" class="col-4 col-form-label">Nombre del proyecto:</label>
                <input type="text" class="form-control" name="nombreProyecto" id="inputName" placeholder="Name" required>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="w-100">
                <label for="imagenProyecto" class="col-4 col-form-label">Imagen del proyecto:</label>
                <input type="file" class="form-control" name="imagenProyecto" id="inputName" placeholder="Password" required>
            </div>
        </div>

        <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Leave a comment here" name="descProyecto" id="floatingTextarea"></textarea>
        <label for="floatingTextarea">Descripcion del proyecto</label>
        </div>

        <div class="mb-3 row">
            <div>
                <button type="submit" class="btn btn-success">Entrar al portafolio</button>
            </div>
        </div>
    </form>

    </div>
        </div>

    </div>
   
</div>


</div>