<?php
    include_once "db.php";
    $selected = "";

    if(isset($_POST["btnEnviar"])){
        $nome = $_POST["txtNome"];
        $senha = $_POST["txtSenha"];
        $idNivel = $_POST["cbbNivel"];
        
        insertUsuarioBanco($nome, $senha, $idNivel);
        
        header("Location: adminusuario.php");
    }

    $select = selectNiveisBanco();
    if(isset($_GET['modo'])){
        $modo = $_GET['modo'];
    }
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
                <form method="POST" action="cadastrarusuario.php">
                    Usuário:
                    <input type="text" maxlength="15" name="txtNome" required>
                    Senha:
                    <input type="password" maxlength="10" name="txtSenha" required><br>
                    Nível:
                    <select name="cbbNivel" required>
                        <option value="">Escolha uma opção</option>
                        <?php
                        while($rsNiveis = mysqli_fetch_array($select)){
                        ?>
                        <option value="<?php echo($rsNiveis['id'])?>"><?php echo($rsNiveis['nome'])?></option>
                        <?php
                        }
                        ?>
                    </select>
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