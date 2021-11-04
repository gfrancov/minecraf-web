<?php


if ($_POST) {

    // Recogida de datos
    $nickname = $_POST['nickname'];
    $token = $_POST['token'];

    // Comprovación de la contraseña
    $contra = $_POST['inputPassword'];
    $repetirContra = $_POST['inputPasswordConfirm'];

    if ( $contra == $repetirContra ) {

        include_once __DIR__."/../modelo/modelo-alta.php";

        $filesComprovarUsuario = tokenCreado($nickname, $token);

        $contraEncriptada = password_hash($contra, PASSWORD_BCRYPT);

        // Registrar usuario nuevo
        if($filesComprovarUsuario > 0) {

            // Comprovar si el usuario está registrado ya
            $filesUsuarioRegistrado = usuarioRegistrado($nickname);

            if($filesUsuarioRegistrado) {

                $tituloError = "Usuario ya registrado";
                $mensajeError = "El usuario que estás intentando registrar ya existe en la base de datos.";

                // Vista de error
                include_once __DIR__.'/../vista/error.php';

            } else {

                // Crear usuario
                $resultCrearUsuario = crearUsuario($nickname, $contraEncriptada);

                if(!$resultCrearUsuario) {

                    $tituloError = "Error al crear el usuario";
                    $mensajeError = "Se ha producido un error al crear el usuario.";

                    // Vista de error
                    include_once __DIR__.'/../vista/error.php';

                } else {

                    header('Location: ../index.php');

                }

            }

        } else {

            $tituloError = "Token o usuario incorrectos";
            $mensajeError = "El nombre de usuario o el token proporcionados no son correctos.";

            // Vista de error
            include_once __DIR__.'/../vista/error.php';

        }


    } else {

        $tituloError = "Contraseña incorrecta";
        $mensajeError = "Las contraseñas introducidas no coinciden.";

        // Vista de error
        include_once __DIR__.'/../vista/error.php';

    }

} else {

    include_once __DIR__.'/../vista/alta.html';

}

?>