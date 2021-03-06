<?php
    include_once "db.php";
    
    session_start();
	if(!(isset($_SESSION["idLogin"]))){
		header("Location: ../index.php");
	}
    $selectLogin = selectUsuarioBanco($_SESSION["idLogin"]);
    $rsLogado = mysqli_fetch_array($selectLogin);
    $nomeLogado = $rsLogado["nome"];
    $idNivelLogado = $rsLogado["id_nivel"];
    $selectNivelUsuario = selectNivelBanco($idNivelLogado);
    $rsNivelLogado = mysqli_fetch_array($selectNivelUsuario);
    $nivelLogado = $rsNivelLogado["nome"];
?>
<!doctype html>
<html lang="pt-br">
	<head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
		<meta charset="UTF-8">
		<title>
            CMS - Sistema De Gerenciamento De Site
		</title>
	</head>
	<body>
        <main id="caixaPrincipal">
            <div id="caixaLogo">
                <span class="textoGrande">CMS</span> - Sistema De Gerenciamento do Site
                <div id="logo"><img src="icones/config.png"></div>
            </div>
            <div id="caixaOpcoes">
                <?php pegarItens($nivelLogado); ?>
                <div id="caixaUsuario">
                    Bem Vindo, <?php echo($nomeLogado)?>.<br><br><br><br>
                    <a href="../login.php?modo=logout"><span class="branco">Logout</span></a>
                </div>
            </div>
            <div id="caixaConteudo">
                <div class=colunaConteudo>
                    <a href="adminsobre.php">
                        <div class="caixaOpcao">
                            <div class="imagemOpcao"><img src="icones/config.png"></div>
                            Sobre
                        </div>
                    </a>
                    <a href="adminbanca.php">
                        <div class="caixaOpcao">
                            <div class="imagemOpcao"><img src="icones/config.png"></div>
                            Bancas
                        </div>
                    </a>
                    <a href="adminnoticia.php">
                        <div class="caixaOpcao">
                            <div class="imagemOpcao"><img src="icones/config.png"></div>
                            Notícias
                        </div>
                    </a>
                    <a href="admincelebridade.php">
                        <div class="caixaOpcao">
                            <div class="imagemOpcao"><img src="icones/config.png"></div>
                            Celebridades
                        </div>
                    </a>
                </div>
            </div>
            <footer id="rodape">
                Desenvolvido por Igor
            </footer>
        </main>
        <script src="js/javascript.js"></script>
    </body>
</html>