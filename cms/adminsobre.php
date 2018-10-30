<?php
    include_once "db.php";
    $nome = "";
    $sobre = "";

    if(isset($_POST["btnEnviar"])){
        $nome = $_POST["txtNome"];
        $sobre = $_POST["txtSobre"];
        updateSobreBanco($nome, $sobre);       
        header("Location: index.php");
    }
    $select = selectSobreBanco();
    $rsSobre = mysqli_fetch_array($select);
    $nome = $rsSobre["nome"];
    $sobre = $rsSobre["sobre"];
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
                <a href="produtos.php">
                    <div class="caixaItem">
                        <img src="icones/produtos.png"><br>
                        Admin Produtos
                    </div>
                </a>
                <a href="usuarios.php">
                    <div class="caixaItem">
                        <img src="icones/admin.png"><br>
                        Admin Usuarios
                    </div>
                </a>
                <div id="caixaUsuario">
                    Bem Vindo, Usuario.<br><br><br><br>
                    Logout
                </div>
            </div>
            <div id="caixaConteudo">
                <form method="POST" action="adminsobre.php">
                    Nome:
                    <input type="text" maxlength="100" value="<?php echo($nome) ?>"name="txtNome" required><br>
                    Sobre:<br>
                    <textarea rows="4" cols="70" name="txtSobre" maxlength="400" required><?php echo($sobre) ?></textarea><br>
                    <input type="submit" name="btnEnviar">
                </form>
            </div>
            <footer id="rodape">
                Desenvolvido por Igor
            </footer>
        </main>
        <script src="js/javascript.js"></script>
    </body>
</html>