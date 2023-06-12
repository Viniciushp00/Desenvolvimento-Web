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
					<?php

						include_once("../php/conexao.php");
						session_start();

						$_senha = $_SESSION ["senha"];

						$sql_prestador = $conectar->query("SELECT * FROM site.usuarios WHERE cpf ='$_senha'");

						$linha=$sql_prestador->fetch(PDO::FETCH_ASSOC);


						echo("<p>Olá, $linha[nome]! Aqui estão algumas informações sobre sua conta:</p>
										<ul>
											<li>Nome: $linha[nome]</li>
											<li>E-mail: $linha[email]</li>
											<li>Especialidade: $linha[pre_especialidade]</li>
										</ul>")
					?>
			</section>
		</div>

		<br><br><br>
		<div class="area-div-tabela">
		<section  class="infos-tabela">
			<h2>Serviços Prestados</h2>
			<div class="tabela-area-logada">
					<?php

						$_senha = $_SESSION ["senha"];

						$sql_prestador = $conectar->query("SELECT * FROM site.pedido as p INNER JOIN site.status as s on p.id_status=s.id_status WHERE id_prestador ='$_senha'");

						echo "<table border='1'>
								<tr>
									<td>Titulo</td>
									<td>Status</td>
									<td>Preço</td>
								</tr>"; 

						while($linha=$sql_prestador->fetch(PDO::FETCH_ASSOC)){

							echo "

								<tr>
									<td>$linha[titulo]</td>
									<td>$linha[nome_status]</td>
									<td>$linha[preco]</td>
								</tr>";
						}

						echo "</table>";
					?>
			</div>
		</section>
		</div>

		<br><br><br>

		<div class="area-div-tabela">
		<section  class="infos-tabela">
			<h2>Procurar Serviço</h2>
			<form>
				<div class="tabela-area-logada">
					<?php


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
							echo "
								<tr>
									<td>$linha[titulo]</td>
									<td>$linha[nome]</td>
									<td>$linha[preco]</td>
									<td><a href='../php/aceita_pedido.php?id=$linha[id_pedido]'>ACEITAR</a></td>
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
