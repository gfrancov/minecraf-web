<?php

include_once __DIR__.'/modelo-database.php';

$conexion = conexionDatabase('skins');
$consultarSkin = "SELECT * FROM Players WHERE Nick = '{$nickname}'";
$resultConsultarSkin = mysqli_query($conexion, $consultarSkin);


?>