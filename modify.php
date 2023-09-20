<?php
include "model/connection.php";

$id = $_GET['id'];

$sql = $conn->query(" select * from users where id=$id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <form action="" class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center text-secondary">Modificar Usuario</h3>
        <input type="hidden" name="id" value="<?= $id ?>">

        <?php
        include "controller/mod_user.php";
        while ($datos = $sql->fetch_object()) {
            ?>

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" name='name' value="<?= $datos->name ?>">
                <div id="nameHelp" class="form-text">Escribe tu nombre</div>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Apellido</label>
                <input type="text" class="form-control" name='lastname' value="<?= $datos->lastname ?>">
                <div id="lastnameHelp" class="form-text">Escribe tu apellido</div>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Usuario</label>
                <input type="text" class="form-control" name='username' value="<?= $datos->username ?>">
                <div id="usernameHelp" class="form-text">Escribe tu nombre de usuario</div>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name='pass' value="<?= $datos->password ?>">
                <div id="passHelp" class="form-text">Escribe tu Contraseña</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name='email' value="<?= $datos->email ?>">
                <div id="emailHelp" class="form-text">Escribe tu email</div>
            </div>

            <?php
        }
        ?>


        <button type="submit" class="btn btn-outline-primary" id="btnEditar" name="btnEditar" value="ok">Modificar
            Usuario</button>
    </form>

</body>

</html>