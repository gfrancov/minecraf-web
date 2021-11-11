<?php

session_start();

// Comprobamos si ha iniciado sesión
if($_SESSION['logueado'] != true) {
    
    header('Location: index.php');

} else {

    // Printeamos la vista
    include_once __DIR__.'/controlador-elementos.php';
    include_once __DIR__.'/../vista/vista-inicio.php';

}


?>