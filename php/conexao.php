<?php
try{
    // PDO = Classe PHP Data Obejects
    $conectar = new PDO("mysql:host=localhost;port=3306;dataname=site","root","");

    //echo("Conectado com sucesso");
}
catch(PDOException $e){
    echo("Falha ao se conectar".$e->getMessage());
}
?>