<?php

include_once("conexao.php");
session_start();
try{
    $id_pedido = $_GET['id'];
    $prestador=$_SESSION ['senha'];

    $sql = $conectar->query("UPDATE site.pedido SET id_prestador='$prestador' WHERE id_pedido='$id_pedido'");

    header("Location: ../html/ControlePrestador.php");

}catch(PDOException $e){
    echo("Falha ao aceitar pedido".$e->getMessage());
}

?>