<!DOCTYPE html>
<html lang="pt_br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/styles.css"/>
  <link rel="stylesheet" type="text/css">
  <link rel="shortcut icon" type="image/x-icon" href="..//imagens/icon.png">
  <title>Busca Cliente</title>
    
    <link rel="stylesheet" href="../css/hpc_cliente.css">
    <link rel="stylesheet" href="../css/stylespadrao.css">
</head>
<body>
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
</header><br><br>

  <!--Carrossel-->
  <div class="text-centralido">
    
    <h1 class="titulo">Selecione a especialidade</h1>

  </div>
  
  <section class="area-carrossel">
    
    <div class="conteudo-carrossel">
        <button class="flecha-esquerda controle" aria-label="Previous Image"> <b><</b> </button>
        <button class="flecha-direita controle" aria-label="Next Image"> <b>></b> </button>
        <!--Imagens-->
        <div class="carrossel">
            <a href="Produtos/produtos.php" target="_self"  ><img src="../imagens/Dev_Web.jpg" alt="Desenvolvedor Web" class="item current-item" ></a>
            <a href="Produtos/produtos.php" target="_self"  ><img src="../imagens/QA.jpg" alt="kirby" class="item current-item" ></a>
            <a href="Produtos/produtos.php" target="_self"  ><img src="../imagens/DBA.jpg" alt="kirby" class="item current-item" ></a>
            <a href="Produtos/produtos.php" target="_self"  ><img src="../imagens/Dev_mobile.jpg" alt="kirby" class="item current-item" ></a>
            <a href="Produtos/produtos.php" target="_self"  ><img src="../imagens/Ana_dados.jpg" alt="kirby" class="item current-item" ></a>
        </div>
    </div>
</section>


  <div class="area-div-tabela">
    <section  class="infos-tabela">
      <h2>Serviços Contratados</h2>
      <div class="tabela-area-logada">
        <?php
          include_once("../php/conexao.php");
          session_start();

          $_senha = $_SESSION["senha"];

          $sql_cliente = $conectar->query("SELECT * FROM site.pedido as p INNER JOIN site.status as s on p.id_status=s.id_status INNER JOIN site.usuarios as u on u.cpf=p.id_prestador OR p.id_prestador=NULL WHERE id_cliente ='$_senha'");

          echo "<table border='1'>
								<tr>
									<td>Título</td>
									<td>Status</td>
									<td>Prestador</td>
								</tr>";
                
                
          while($linha=$sql_cliente->fetch(PDO::FETCH_ASSOC)){
            echo"<tr>
                  <td>$linha[titulo]</td>
                  <td>$linha[nome_status]</td>
                  <td>$linha[nome]</td>
                </tr>";
          }
          echo"</table>"
        ?>
      </div>
      <p>Quer contratar um serviço? <a href="Produtos/produtos.php">Clique aqui</a> </p>
    </section>
  </div>
  <br><br><br>
  <div class="area-div-tabela">
    <section  class="infos-tabela">
      <h2>Serviços que não tem um prestador</h2>
      <div class="tabela-area-logada">
        <?php
          $_senha = $_SESSION["senha"];

          $sql_cliente = $conectar->query("SELECT * FROM site.pedido as p INNER JOIN site.status as s on p.id_status=s.id_status WHERE id_cliente ='$_senha' AND id_prestador IS NULL");

          echo "<table border='1'>
								<tr>
									<td>Titulo</td>
									<td>Status</td>
									<td>Preço</td>
									<td>Ações</td>
								</tr>";
                
                
          while($linha=$sql_cliente->fetch(PDO::FETCH_ASSOC)){
            echo"<tr>
                  <td>$linha[titulo]</td>
                  <td>$linha[nome_status]</td>
                  <td>A combinar</td>
                  <td><a href='../php/exclui_pedido.php?id=$linha[id_pedido]'>Excluir</a></td>
                </tr>";
          }
          echo"</table>"
        ?>
      </div>
    </section>
  </div>




  <br><br><br><br><br><br><br><br>
    
  <footer id="rodape">
    <ul>
        <a href="quemsomos.html"><li class="itens-rodape">Quem Somos</li></a>
    </ul>
</footer>

  <script src="../js/header.js"></script>
  <script src="../js/js.js"></script>
</body>
</html>