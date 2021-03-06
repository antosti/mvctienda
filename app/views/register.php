<?php include_once 'header.php'?>

<div class="card p-4 bg-light">
    <div class="card-header">
        <h1 class="text-center">Registro de usuario</h1>
    </div>
    <div class="card-body">
        <form action="<?= ROOT ?>login/registro/" method="POST">
            <div class="form-group text-left">
                <label for="first_name">Nombre:</label>
                <input type="text" name="first_name" id="first_name" class="form-control" required placeholder="Escriba su nombre"
                    value="<?= isset($data['dataForm']['first_name']) ? $data['dataForm']['first_name'] : '' ?>">
            </div>
            <div class="form-group text-left">
                <label for="last_name_1">Primer apellido:</label>
                <input type="text" name="last_name_1" id="last_name_1" class="form-control" required placeholder="Escriba su primer apellido"
                       value="<?= isset($data['dataForm']['last_name_1']) ? $data['dataForm']['last_name_1'] : '' ?>">
            </div>
            <div class="form-group text-left">
                <label for="last_name_2">Segundo apellido:</label>
                <input type="text" name="last_name_2" id="last_name_2" class="form-control" placeholder="Escriba su segundo apellido"
                       value="<?= isset($data['dataForm']['last_name_2']) ? $data['dataForm']['last_name_2'] : '' ?>">
            </div>
            <div class="form-group text-left">
                <label for="email">Correo electrónico:</label>
                <input type="email" name="email" id="email" class="form-control" required placeholder="Escriba su correo electrónico"
                       value="<?= isset($data['dataForm']['email']) ? $data['dataForm']['email'] : '' ?>">
            </div>
            <div class="form-group text-left">
                <label for="password1">Clave de acceso:</label>
                <input type="password" name="password1" id="password1" class="form-control" required placeholder="Escriba su clave de acceso">
            </div>
            <div class="form-group text-left">
                <label for="password2">Repita su clave de acceso:</label>
                <input type="password" name="password2" id="password2" class="form-control" required placeholder="Repita su clave de acceso">
            </div>
            <div class="form-group text-left">
                <label for="address">Dirección:</label>
                <input type="text" name="address" id="address" class="form-control" required placeholder="Escriba su dirección"
                       value="<?= isset($data['dataForm']['address']) ? $data['dataForm']['address'] : '' ?>">
            </div>
            <div class="form-group text-left">
                <label for="city">Ciudad:</label>
                <input type="text" name="city" id="city" class="form-control" required placeholder="Escriba su ciudad"
                       value="<?= isset($data['dataForm']['city']) ? $data['dataForm']['city'] : '' ?>">
            </div>
            <div class="form-group text-left">
                <label for="state">Provincia:</label>
                <input type="text" name="state" id="state" class="form-control" required placeholder="Escriba su provincia"
                       value="<?= isset($data['dataForm']['state']) ? $data['dataForm']['state'] : '' ?>">
            </div>
            <div class="form-group text-left">
                <label for="zipcode">Código postal:</label>
                <input type="text" name="zipcode" id="zipcode" class="form-control" required placeholder="Escriba su código postal"
                       value="<?= isset($data['dataForm']['zipcode']) ? $data['dataForm']['zipcode'] : '' ?>">
            </div>
            <div class="form-group text-left">
                <label for="country">País:</label>
                <input type="text" name="country" id="country" class="form-control" required placeholder="Escriba su país"
                       value="<?= isset($data['dataForm']['country']) ? $data['dataForm']['country'] : '' ?>">
            </div>
            <div class="form-group text-left">
                <div class="row">
                    <div class="col-sm-6">
                        <input type="submit" value="Enviar datos de registro" class="btn btn-success btn-block">
                    </div>
                    <div class="col-sm-6">
                        <a href="<?= ROOT ?>login/" class="btn btn-info btn-block">Cancelar</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include_once 'footer.php' ?>
