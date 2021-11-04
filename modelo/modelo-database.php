<?php

function conexionDatabase() {

    // Dades de la base de dades
    $servidor = "localhost";
    $usuari = "gfranco";
    $contra = "+H1m@n0S";
    $bdd = "mcweb";

    $connexio = mysqli_connect($servidor, $usuari, $contra, $bdd);

    return $connexio;
    
}

?>