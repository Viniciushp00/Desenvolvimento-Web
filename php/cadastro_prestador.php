<?php

include_once("conexao.php");

try{
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf_ponto = $_POST['cpf'];
$dataNascimento = $_POST['data_nascimento'];
$especialidades = $_POST['especialidade'];
$outrasOpcoes = $_POST['mensagem'];

function limpar_texto($str){ 
    return preg_replace("/[^0-9]/", "", $str); 
}

$cpf = limpar_texto($cpf_ponto);


$sql = $conectar->query("SELECT * FROM site.usuarios WHERE cpf='$cpf'");

if($sql->rowCount()==0 ){

    $sql = $conectar->query("INSERT INTO site.usuarios VALUE ('$cpf','$nome',NULL,'$email',NULL,NULL,NULL,NULL,NULL,'$dataNascimento','$especialidades','$outrasOpcoes',1)");

    header('Location: ../html/index.html');

}else{
    echo "<script>window.location.href='../html/conta_p.html';alert('CPF já cadastrado');</script>";
}

}
catch (PDOException $e) {
    echo ("Erro: ". $e->getMessage());
}



?>