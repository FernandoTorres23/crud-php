<?php
$host = 'localhost';
$user = 'root';
$pass = '';

$bd = 'users_crud_php';

$conn = new mysqli($host, $user, $pass, $bd);

$conn->set_charset('utf8');


?>