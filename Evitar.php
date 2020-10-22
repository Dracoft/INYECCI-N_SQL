<?php
$user = $conn->real_escape_string($_POST['user']);
$password = $conn->real_escape_string($_POST['password']);

$user = addslashes($_POST['user']);
session_regenerate_id(true);
$password = addslashes($_POST['password']);

Usuario:<input type="text" class="form-control" pattern="[A-Za-z0-9_-]{1,20}" name="user" placeholder=" Usuario" required>
Contraseña:<input type="password" class="form-control" pattern="[A-Za-z0-9_-]{1,20}" name="password" placeholder=" Contraseña" required>

?>
