<?php
include_once "./Registrar_usuario.php";

$usuario = $_POST['txtUsu'];
$contrasena = $_POST['contrasena'];
$registro = new Insertarusuarios();
$reg = $registro -> InsertarUsuario($usuario,$contrasena);
?>