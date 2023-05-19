<?php
    $hostname= "localhost";
    $bancodedados = "site";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

    if($mysqli->error){
        die ("falha ao conectar: (". $mysqli->connect_errno.")".$mysqli->connect_errno);
    }
?>