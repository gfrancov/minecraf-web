<?php

function conexionDatabase($bdd) {

    // Dades de la base de dades
    $servidor = "localhost";
    $usuari = "gfranco";
    $contra = "+H1m@n0S";

    $connexio = mysqli_connect($servidor, $usuari, $contra, $bdd);

    return $connexio;
    
}

?>