<?php
    include_once "db.php";

    $select = selectProdutos();
    $selectCat = selectCategorias();
    if(isset($_GET['categoria'])){
        $categoria = $_GET['categoria'];
        $select = selectProdutosCategoria($categoria);
    }
    if(isset($_GET['subcategoria'])){
        $subCategoria = $_GET['subcategoria'];
        $select = selectProdutosSubcategoria($subCategoria);
    }
	if(isset($_GET['txtBusca'])){
        $busca = $_GET['txtBusca'];
        $select = buscaProduto($busca);
    }
?>
<!doctype html>
<html lang="pt-br">
	<head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
		<meta charset="UTF-8">
		<title>
            Banca de Jornal Bugs Bunny
		</title>
	</head>
	<body>
        <script src="jquery/jquery-3.3.1.min.js"></script>
        <script src="jquery/jquery-migrate-1.4.1.min.js"></script>
        <script src="slick/slick.min.js"></script>
        <header id="cabecalho">
            <div id="logo"><a href="index.php"><img src="imagens/logo.png" alt="Banca Bugs Bunny"></a></div>
            <nav id="menu">
                <ul>
                    <li>
                        <a href="noticias.php">Notícias</a>
                    </li>
                    <li>
                        <a href="promocoes.php">Promoções</a>
                    </li>
                    <li>
                        <a href="bancas.php">Bancas</a>
                    </li>
                    <li>
                        <a href="sobre.php">Sobre</a>
                    </li>
                    <li>
                        <a href="contato.php">Contato</a>
                    </li>
                    <li>
                        <a href="celebridades.php">Celebridades</a>
                    </li>
                </ul>
            </nav>
            <form method="POST" action="login.php">
            <div id="login">
                <div id="txtLogin">
                    Usuário:<br>
                    Senha:
                </div>
                <div id="caixaLogin">
                    <input type="text" name="txtUsuario" id="entrar"><br>
                    <input type="password" name="txtSenha" id="senha"><br>
                </div>
                <div id="botaoLogin">
                    <input type="submit" name="login" value="Entrar">
                </div>
            </div>
            </form>
        </header>
        <div id="caixaEspecial"></div>
        <div id="conteudoPrincipal">
            <main id="conteudo">
                <div class="slider">
                    <div><img src="imagens/1.jpg" alt="Banner"></div>
                    <div><img src="imagens/2.jpg" alt="Banner"></div>
                    <div><img src="imagens/3.jpg" alt="Banner"></div>
                    <div><img src="imagens/4.jpg" alt="Banner"></div>
                </div>
                <nav id="categorias">
					<form method="GET" action="index.php">
						<p align="center"><input type="text" name="txtBusca" style="width: 100px;">
						<input type="submit" name="buscaProduto" value="Buscar"></p><br>
					</form>
                    <?php
                        while($rsCat = mysqli_fetch_array($selectCat)){
                            $selectSub = selectSubcategorias($rsCat["id"]);
                    ?>
                    <div class="itemCategoria">
                        <a href="index.php?categoria=<?php echo($rsCat["nome"])?>"><?php echo($rsCat["nome"])?></a>
                        <div class="dropdown">
                            <?php
                                while($rsSub = mysqli_fetch_array($selectSub)){
                            ?>
                            <a href="index.php?subcategoria=<?php echo($rsSub["nome"])?>"><?php echo($rsSub["nome"])?></a>
                            <?php }?>
                        </div>
                    </div>
                    <?php }?>
                </nav>
				<div id="itens2">
				<?php
                        while($rsProdutos = mysqli_fetch_array($select)){
							if($rsProdutos["desconto"] > 0){
								$class = "red";
								$valorDoProduto = "<span class='traco'>R$" . $rsProdutos['preco'] .",00</span>";
							}else{
								$class = "";
								$valorDoProduto = "";
							}
                    ?>
                    <div class="item">
                        <div class="itemDados">
                            <div class="itemImagem">
                                <img src="cms/<?php echo($rsProdutos["imagem"])?>" alt="Livro"><br>
                            </div>
                            <div class="itemDetalhe">
                                Nome: <?php echo($rsProdutos["nome"])?><br>
                                Descrição:<?php echo($rsProdutos["sobre"])?><br>
                                Preço: R$<span class="<?php echo($class)?>"><?php echo($rsProdutos["preco"] - $rsProdutos["desconto"] . ",00")?></span><?php echo($valorDoProduto)?><br>
                            </div>
                        </div>
                        <div class="itemDescricao">
                            Detalhes
                        </div>
                    </div>
				<?php 
                        }
                    ?>
				</div>
            </main>
            <footer id="rodape">
                Todos os direitos reservados.
            </footer>
        </div>
            <div id="redesSociais">
                <div id="twitter"><a href="http://twitter.com"><img src="imagens/twitter.png" alt="Twitter"></a></div>
                <div id="googleplus"><a href="http://plus.google.com"><img src="imagens/googleplus.png" alt="Google plus"></a></div>
                <div id="facebook"><a href="http://facebook.com"><img src="imagens/facebook.png" alt="Facebook"></a></div>
            </div>
        <script src="javascript/slider.js"></script>
    </body>
</html>