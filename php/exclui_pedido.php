<?php

include_once("conexao.php");

try{
    $id_pedido = $_GET['id'];

    $sql = $conectar->query("DELETE FROM site.pedido WHERE id_pedido='$id_pedido'");

    header("Location: ../html/hpc_cliente.php");
}
catch(PDOException $e){
    echo ("Erro: ". $e->getMessage());
}

?>