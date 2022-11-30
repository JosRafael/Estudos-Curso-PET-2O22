<?php

    $hostname = "localhost";
    $bd = "aula02";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bd);

    if($mysqli->connect_error) {

        echo "Conexão não foi bem sucedida";        
        die('Conexão errada' . $mysqli->connect_error);
    } 
    // else {
    //     echo "Conexão ok";
    // }

?>