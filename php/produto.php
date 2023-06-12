<?php

include("conexao.php");

try{
     
    $area = $_POST['area'];
    $cpf_ponto = $_POST['cpf'];
    $descrição_pedido = $_POST['descrição_pedido'];
    $data_solicitada_entrega = $_POST['data_solicitada_entrega'];
    $area = $_POST['area'];
    $titulo = $_POST['titulo'];

    function limpar_texto($str){ 
        return preg_replace("/[^0-9]/", "", $str); 
    }

    $cpf = limpar_texto($cpf_ponto);

    $sql_code = "INSERT INTO site.pedido (titulo,descricao_pe,data_entrega_pe,id_cliente,id_area,id_status) VALUES ('$titulo','$descrição_pedido','$data_solicitada_entrega','$cpf','$area',1)";
    $sql_query = $conectar->query($sql_code) or die ("Falha na execução do código SQL ");
    

    header('Location: ../html/hpc_cliente.php');
    
}
catch (PDOException $e) {
    echo ("Erro: ". $e->getMessage());
}

?>