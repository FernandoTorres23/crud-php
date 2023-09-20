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
            <a href="" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
        </td>
    </tr>
<?php }
?>