<?php
    include_once "db.php";

    $select = selectCelebridades();
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
                <div id="itens">
				<?php
                        while($rsCelebridades = mysqli_fetch_array($select)){
                        $ativo = $rsCelebridades["ativo"];
                            if($ativo){
                    ?>
                    <div class="caixaCelebridade">
                        <div class="imagemCelebridade">
                            <img src="cms/<?php echo($rsCelebridades["imagem"])?>">
                        </div>
                        <article class="textoCelebridade">
                            <h2><?php echo($rsCelebridades["nome"])?></h2>
                            <?php echo($rsCelebridades["sobre"])?>
                        </article>
                    </div>
					<?php 
                            }
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