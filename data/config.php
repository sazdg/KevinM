<?php

    $server   = "localhost";
    $user = "root";
    $password = "";
    $database = "Kevinm";

        //per prima cosa apriamo una connessione con il server MySQL
    $connessione = mysqli_connect($server,$user,$password,$database);

    if(!$connessione){
        die("Errore nella connessione: ".mysqli_connect_error());
    } 

?>
