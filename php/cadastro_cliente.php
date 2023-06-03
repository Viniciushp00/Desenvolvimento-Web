<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cpf_ponto = $_POST['cpf'];
$genero = $_POST['genero'];
$dataNascimento = $_POST['data_nascimento'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];

function limpar_texto($str){ 
    return preg_replace("/[^0-9]/", "", $str); 
}

$cpf = limpar_texto($cpf_ponto);

$sql = $conectar->query("INSERT INTO site.usuarios VALUE ('$cpf','$nome','$telefone','$email','$estado','$cidade','$endereco','$cep','$genero','$dataNascimento',NULL,NULL,2)");

header('Location: ../html/index.html');

?>