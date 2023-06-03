<!DOCTYPE html>
<html lang="pt_br">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css"/>
    <link rel="stylesheet" type="text/css" href="../css/stylespadrao.css" />
    <link rel="shortcut icon" type="image/x-icon" href="../../imagens/icon.png">
	<title>Site de Controle para Prestador</title>
</head>
<body>
	    <!--Menu horinzontal-->
		<header class="menu-h">
			<nav id="nav">
				<div id="logo">
					<span><a href="./index.html">Get-Pandas</a></span>
				</div>
				<div class="dropdown">
					<button id="btn-mobile">Menu</button>
					<div class="dropdown-child">
						<ul id="menu">
							<li class="lista-header"><a href="login.html" class="nao-mobile">Entrar</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<br>
			<br>
			<br>
			<br>
		</header>
    <!--------------------------------------------->
	<main>
		<div class="area-div-tabela">
			<section class="infos-tabela">
				<h2>Painel de Controle</h2>
				<p>Olá, [nome do prestador]! Aqui estão algumas informações sobre sua conta:</p>
				<ul>
					<li>Nome: [nome do prestador]</li>
					<li>E-mail: [e-mail do prestador]</li>
					<li>Telefone: [telefone do prestador]</li>
					<li>Endereço: [endereço do prestador]</li>
				</ul>
			</section>
		</div>

		<br><br><br>
		<div class="area-div-tabela">
		<section  class="infos-tabela">
			<h2>Serviços Prestados</h2>
			<div class="tabela-area-logada">
				<table border="1">
					<thead>
						<tr>
							<th>Nome</th>
							<th>Descrição</th>
							<th>Preço</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Serviço 1</td>
							<td>Descrição do serviço 1</td>
							<td>R$ 100,00</td>
						</tr>
						<tr>
							<td>Serviço 2</td>
							<td>Descrição do serviço 2</td>
							<td>R$ 200,00</td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>
		</div>

		<br><br><br>

		<div class="area-div-tabela">
		<section  class="infos-tabela">
			<h2>Procurar Serviço</h2>
			<form>
				<label for="nome-servico">Nome do Serviço:</label>
				<input type="text" id="nome-servico" name="nome-servico">

				<label for="preco-servico">Preço do Serviço:</label>
				<input type="number" id="preco-servico" name="preco-servico">
				<div class="tabela-area-logada">
					<?php
						include_once("../php/conexao.php");

						$sql = $conectar->query("SELECT * FROM site.pedido as p INNER JOIN site.usuarios as u ON p.id_cliente =u.cpf WHERE id_prestador IS NULL");

						echo "<table border='1'>
								<tr>
									<td>Titulo</td>
									<td>Nome</td>
									<td>Preço</td>
									<td>Ações</td>
								</tr>"; 

						while ($linha=$sql->fetch(PDO::FETCH_ASSOC))
						{
							echo "<tr>
									<td>$linha[titulo]</td>
									<td>$linha[nome]</td>
									<td>$linha[preco]</td>
									<td><a href='excluir.php?$linha[email]'>Aceitar</a></td>
								</tr>";
						}
						echo "</table>";
					?>
				</div>
				
			</form>
		</section>
		</div>
	</main>
	<br><br><br>

    <footer id="rodape">
        <ul>
            <a href="quemsomos.html"><li class="itens-rodape">Quem Somos</li></a>
        </ul>
    </footer>
	<script src="../js/header.js"></script>
</body>
</html>
