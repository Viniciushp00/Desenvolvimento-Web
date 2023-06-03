<?php

include_once("conexao.php");

try{
    
    $login = $_POST['usuario'];
    $senha = $_POST['password'];
    $sql = $conectar->query("SELECT * FROM site.usuarios WHERE email = '$login' AND cpf='$senha' AND FK_perfil=1");
    

    if($sql->rowCount()>0 ){

        header("Location: ../html/ControlePrestador.php");

    }else{
        echo "<script>window.location.href='../html/login.html';alert('Usuário não cadastrado');</script>";
    }
}catch(PDOException $e){
    echo("Falha ao se conectar".$e->getMessage());
}

?>