<?php

if (!empty($_POST['btnRegistrar'])) {
    if (!empty($_POST['name']) and !empty($_POST['lastname']) and !empty($_POST['username']) and !empty($_POST['pass']) and !empty($_POST['email'])) {


        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];


        $sql = $conn->query("insert into users(name, lastname, username, password, email) values('$name', '$lastname', '$username', '$pass', '$email')");
        if ($sql == 1) {
            echo '<div class="alert alert-success">Persona registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar</div>';
        }


    } else {
        echo '<div class="alert alert-danger">Campos vacios mien</div>';
    }

}


?>