<?php

if (!empty($_POST['btnEditar'])) {
    if (!empty($_POST['name']) and !empty($_POST['lastname']) and !empty($_POST['username']) and !empty($_POST['pass']) and !empty($_POST['email'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];

        $sql = $conn->query("update users set  name = '$name', lastname = '$lastname', username = '$username', password = '$pass', email = '$email' where id=$id");

        if ($sql == 1) {
            header("location:index.php");
        } else {
            echo '<div class="alert alert-danger">Hay un error al modificar</div>';
        }

    } else {
        echo '<div class="alert alert-warning">Campos vacios mien</div>';
    }
}

?>