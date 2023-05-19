<?php

include("conexao.php");

if(isset($_POST['area']) || isset($_POST['cpf']) || isset($_POST['descrição-pedido']) || isset($_POST['data-solicitada-entrega'])){
    if(strlen($_POST['area']) == 0){
        echo "Preencha a área do pedido";
    } else if (strlen($_POST['cpf']) == 0){
        echo "Preecha seu CPF";
    }else if (strlen($_POST['descrição_pedido']) == 0){
        echo "Preecha a descrição do pedido";
    }else if (strlen($_POST['data_solicitada_entrega']) == 0){
        echo "Preecha a data que você precisa que seja entregue";
    } else{

        /*Limpando e-mail e senha para ninguem conseguir acessar sem um email ou senha valida*/ 
        $area = $mysqli->real_escape_string($_POST['area']);
        $cpf = $mysqli->real_escape_string($_POST['cpf']);
        $descrição_pedido = $mysqli->real_escape_string($_POST['descrição_pedido']);
        $data_solicitada_entrega = $mysqli->real_escape_string($_POST['data_solicitada_entrega']);
        $area = $mysqli->real_escape_string($_POST['area']);

        $sql_code = "INSERT INTO pedido (descricao_pe,data_entrega_pe,id_cliente,id_area,id_status) VALUES ('$descrição_pedido','$data_solicitada_entrega','$cpf','$area',1)";
        $sql_query = $mysqli->query($sql_code) or die ("Falha na execução do código SQL ");
    }

    header('../html/produtos/produtos.php');
    
}


?>