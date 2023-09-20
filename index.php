<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/75337b6172.js" crossorigin="anonymous"></script>
</head>

<body>
    <div>
        <h1 class="text-center p-3">CRUD PHP</h1>
        <div class="container-fluid row">
            <form action="" class="col-4 p-3" method="POST">
                <h3 class="text-center text-secondary">Registrar Usuario</h3>
                <?php
                include 'model/connection.php';
                include 'controller/registro_usuario.php'
                    ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name='name' aria-describedby="Nombre">
                    <div id="nameHelp" class="form-text">Escribe tu nombre</div>
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name='lastname' aria-describedby="Apellido">
                    <div id="lastnameHelp" class="form-text">Escribe tu apellido</div>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Usuario</label>
                    <input type="text" class="form-control" name='username' aria-describedby="Usuario">
                    <div id="usernameHelp" class="form-text">Escribe tu nombre de usuario</div>
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name='pass' aria-describedby="Contraseña">
                    <div id="passHelp" class="form-text">Escribe tu Contraseña</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name='email' aria-describedby="Email">
                    <div id="emailHelp" class="form-text">Escribe tu email</div>
                </div>
                <button type="submit" class="btn btn-outline-primary" id="btnRegistrar" name="btnRegistrar"
                    value="ok">Agregar
                    Usuario</button>
            </form>
            <div class="col-8 p-4">
                <table class="table">
                    <thead class="bg-info">
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Email</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'model/connection.php';
                        $sql = $conn->query("select * from users");
                        while ($datos = $sql->fetch_object()) { ?>
                            <tr>
                                <td>
                                    <?= $datos->id ?>
                                </td>
                                <td>
                                    <?= $datos->name ?>
                                </td>
                                <td>
                                    <?= $datos->lastname ?>
                                </td>
                                <td>
                                    <?= $datos->username ?>
                                </td>
                                <td>
                                    <?= $datos->email ?>
                                </td>
                                <td>
                                    <a href="" class="btn btn-small btn-warning"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>