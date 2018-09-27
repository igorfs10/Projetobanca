<?php
include "db.php";

$select = selectBanco();

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
                <a href="index.php">
                    <div class="caixaItem">
                        <img src="icones/config.png"><br>
                        Admin Conteudo
                    </div>
                </a>
                <a href="faleconosco.php">
                    <div class="caixaItem">
                        <img src="icones/contato.png"><br>
                        Admin Fale Conosco
                    </div>
                </a>
                <div class="caixaItem">
                    <img src="icones/produtos.png"><br>
                    Admin Produtos
                </div>
                <div class="caixaItem">
                    <img src="icones/admin.png"><br>
                    Admin Usuario
                </div>
                <div id="caixaUsuario">
                    Bem Vindo, Usuario.<br><br><br><br>
                    Logout
                </div>
            </div>
            <div id="caixaConteudo">
                <div class=caixaContato>
                    <?php
                    while($rsContatos = mysqli_fetch_array($select)){
                    ?>
                    <div class="contato">
                        Nome: <span class="textoNegrito"><?php echo($rsContatos['nome'])?></span>
                        <span class="direito"><img src="icones/zoom.png"></span>
                        <br>
                        Email: <span class="textoNegrito"><?php echo($rsContatos['email'])?></span>
                        <span class="direito"><img src="icones/delete.png"></span>
                    </div>
                      <?php } ?>
                </div>
            </div>
            <footer id="rodape">
                Desenvolvido por Igor
            </footer>
        </main>
    </body>
</html>