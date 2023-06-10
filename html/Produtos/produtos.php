<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/styles.css" />
    <link rel="stylesheet" type="text/css" href="../../css/stylespadrao.css" />
    <link rel="shortcut icon" type="image/x-icon" href="../../imagens/icon.png">
    <title>Home</title>
</head>
<body>

    <!--Menu horinzontal-->
    <header class="menu-h">
        <nav >
            <div id="logo">
                <span> <a href="../index.html">Get-Pandas</a> </span>
            </div>
            <div>
                <ul>
                </ul>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <br>
    </header>
    <!--------------------------------------------->

    <main class="b-area">
        <div class="d-form">
            <form class="form-pedido" method="POST" action="../../php/produto.php">
                <h2>Preencha as informações abaixo para seguirmos com a sua solicitação.</h2> <br>
                    <?php
                        include_once("../../php/conexao.php");

                        $sql_area = $conectar->query("SELECT * FROM site.area");

                        echo"<select class='dados-pequenos' name='area'>";
                        while($linha=$sql_area->fetch(PDO::FETCH_ASSOC)){
                            echo"<option value='$linha[id_area]'>$linha[nome_area]</option>'>";
                        }

                        echo "</select>";

                    ?>
                    
                <input type="text" class="dados" name="cpf" id="cpf" maxlength="14" onkeypress="validaCpf()" required placeholder="Digite seu CPF ..."> 
                <input type="text" class="dados" name="titulo" maxlength="50" placeholder="Titulo da sua solicitação..." required>
                <textarea cols="30" rows="10" name="descrição_pedido" maxlength="250" placeholder="Digite uma descrição do que você precisa"   ></textarea>
                <h2>Para quando você precisa?</h2> <br>
                <input type="date" class="dados-pequenos" name="data_solicitada_entrega">
                <h2>Preço que está disposto a pagar...</h2> <br>
                <input type="number" class="dados" name="preco">
                <input type="submit" class="dados" value="Enviar">
            </form>
        </div>
    </main>
    
    <footer id="rodape">
        <ul>
            <a href="quemsomos.html"><li class="itens-rodape">Quem Somos</li></a>
        </ul>
    </footer>
    <script src="../../js/form_restricoes.js"></script>
    <script src="../../js/cadastro_restricoes.js"></script>

</body>
</html>