<?php

include_once __DIR__.'/modelo-database.php';

$conexion = conexionDatabase('mcweb');
$consultarUsuario = "SELECT * FROM users WHERE nick = '{$nickname}'";
$resultConsultarUsuario = mysqli_query($conexion, $consultarUsuario);


?>