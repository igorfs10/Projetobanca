<!doctype html>
<?php
    include "db.php";

    if(isset($_POST["btnEnviar"])){
        $nome = $_POST["txtNome"];
        $telefone = $_POST["txtTelefone"];
        $celular = $_POST["txtCelular"];
        $email = $_POST["txtEmail"];
        $homepage = $_POST["txtHomepage"];
        $facebook = $_POST["txtFacebook"];
        $sugestao = $_POST["txtSugestao"];
        $informacao = $_POST["txtInformacao"];
        $sexo = $_POST["sexo"];
        $profissao = $_POST["txtProfissao"];
        
        insertContato($nome, $telefone, $celular, $email, $homepage, $facebook, $sugestao, $informacao, $sexo, $profissao);
		
		header("Location: contato.php");
    }
?>
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
        <script src="javascript/validacao.js"></script>
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
            <form method="POST" action="index.php">
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
                    <a href=""><div class="itemCategoria">Item1</div></a>
                    <a href=""><div class="itemCategoria">Item2</div></a>
                </nav>
                <div id="itens">
                    <div id="areaContato">
                        <form method="POST" action="contato.php">
                            <h1>Contato</h1><br><br>
                            <p>Nome:*</p>
                            <p><input type="text" maxlength="100" onkeypress="return validar(event, BLOQUEIA_NUMEROS, this)" size="50" name="txtNome" required></p><br>
                            <p>Telefone:</p>
                            <p><input type="text" maxlength="15" onkeypress="return validar(event, BLOQUEIA_CARACTERES, this)" size="50" name="txtTelefone"></p><br>
                            <p>Celular:*</p>
                            <p><input type="text" maxlength="15" onkeypress="return validar(event, BLOQUEIA_CARACTERES, this)" size="50" name="txtCelular" required></p><br>
                            <p>Email:*</p>
                            <p><input type="email" maxlength="100" size="50" name="txtEmail" required></p><br>
                            <p>Homepage:</p>
                            <p><input type="url" maxlength="100" size="50" name="txtHomepage"></p><br>
                            <p>Link no Facebook:</p>
                            <p><input type="text" maxlength="100" size="50" name="txtFacebook"></p><br>
                            <p>Sugestões/Críticas:</p>
                            <textarea rows="5" cols="50" name="txtSugestao"  maxlength="250"></textarea><br>
                            <p>Informações do produto:</p>
                            <textarea rows="5" cols="50" name="txtInformacao"  maxlength="250"></textarea><br>
                            <p>Sexo:*</p>
                            <p>
                                <input type="radio" name="sexo" value="m" required> Masculino
                                <input type="radio" name="sexo" value="f" required> Feminino
                            </p>
                            <p>Profissão:*</p>
                            <p><input type="text" maxlength="100" size="50"  name="txtProfissao" required></p><br>
                            <p><input type="submit" name="btnEnviar"></p>
                        </form>
                    </div>
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