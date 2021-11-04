<?php

if(isset($_GET['p'])) {
    $accion = $_GET['p'];
} else {
    $accion = 'login';
}

switch ($accion) {

    case 'login':
        include_once __DIR__.'/controlador/controlador-login.php';
        break;

    case 'alta':
        include_once __DIR__.'/controlador/controlador-alta.php';
        break;
    
    case 'inicio':
        include_once __DIR__.'/controlador/controlador-inicio.php';
        break;

}

?>