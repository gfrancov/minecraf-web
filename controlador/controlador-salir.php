<?php

session_start();

// Comprobamos si ha iniciado sesión
if($_SESSION['logueado'] != true) {
    
    header('Location: index.php');

} else {

    session_destroy();
    $_SESSION['logueado'] = false;
    header('Location: index.php?p=login');

}

?>