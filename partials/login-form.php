<div class="container d-flex justify-content-center pt-5">
<div class="row w-100 d-flex justify-content-center">
    
    <div class="col-md-5">
        <br>
        <div class="card sombras-bottom">
            <div class="card-header">
                Iniciar sesion
            </div>
            <div class="card-body">


            <form action="login.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3 row">
            <div class="w-100">
                <label for="username" class="col-4 col-form-label">Username:</label>
                <input type="text" class="form-control" name="username" id="inputName" placeholder="Name" required>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="w-100">
                <label for="pass" class="col-4 col-form-label">Password:</label>
                <input type="password" class="form-control" name="pass" id="inputName" placeholder="Password" required>
            </div>
        </div>

        <div class="mb-3 row">
            <div>
                <button type="submit" class="btn btn-success">Entrar al panel de control</button>
            </div>
        </div>
    </form>

            </div>
            <div class="card-footer text-muted pb-3">
            </div>
        </div>

    </div>
    
</div>


</div>
