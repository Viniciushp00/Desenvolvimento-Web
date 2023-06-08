<?php

include_once("conexao.php");
session_start();

try{
    
    $login = $_POST['usuario'];
    $senha = $_POST['password'];
    $sql = $conectar->query("SELECT * FROM site.usuarios WHERE email = '$login' AND cpf='$senha' AND FK_perfil=2");
    

    if($sql->rowCount()>0 ){

        $_SESSION ["senha"] =  $_POST['password'];
        header("Location: ../html/hpc_cliente.php");

    }else{
        echo "<script>window.location.href='../html/login.html';alert('Usuário não cadastrado');</script>";
    }
}catch(PDOException $e){
    echo("Erro ao logar ".$e->getMessage());
}

?>