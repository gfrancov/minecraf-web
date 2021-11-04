<?php

session_start();

if($_POST) {

    // Recollida de dades
    $nickname = $_POST['nickname'];
    $pass = $_POST['inputPassword'];

    // Crida al model
    include_once __DIR__.'/../modelo/modelo-login.php';

    if(mysqli_num_rows($resultConsultarUsuario) > 0 ) {

        while ($datosUsuario = mysqli_fetch_assoc($resultConsultarUsuario)) {

            $usuario = $datosUsuario;
            $contra = $datosUsuario['pass'];

        }

    }

    if(password_verify($pass,$contra)) {

        session_start();
        $_SESSION['datosUsuario'] = $usuario;
        $_SESSION['logueado'] = true;
        header('Location: index.php?p=inicio');


    } else {

        // Cargamos mensaje de error
        $tituloError = "Error al iniciar sesión";
        $mensajeError = "El usuario y contraseña proporcionados no son correctos.";

        // Vista de error
        include_once __DIR__.'/../vista/error.php';


    }



} elseif(isset($_SESSION['email'])) {

    include_once __DIR__.'/controlador-menu.php';

} else {

    // Printem el formulari d'inici de sessió
    include_once __DIR__.'/../vista/login.html';

}




?>