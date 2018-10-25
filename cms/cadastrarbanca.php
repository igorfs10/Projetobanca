<?php
    include_once "db.php";
    $botao = "Inserir";
    $nome = "";
    $telefone = "";
    $endereco = "";
    session_start();

    if(isset($_POST["btnEnviar"])){
        $acao = $_POST["btnEnviar"];
        if($acao=="Inserir"){
            $nome = $_POST["txtNome"];
            $telefone = $_POST["txtTelefone"];
            $endereco = $_POST["txtEndereco"];
            insertBancaBanco($nome, $telefone, $endereco);
        }else if($acao=="Editar"){
            $nome = $_POST["txtNome"];
            $codigo = $_SESSION["codigo"];
            $telefone = $_POST["txtTelefone"];
            $endereco = $_POST["txtEndereco"];
            updateBancaBanco($nome, $telefone, $endereco, $codigo);
        }        
        header("Location: adminbanca.php");
    }

    if(isset($_GET['modo'])){
        $modo = $_GET['modo'];
        if ($modo == "editar"){
            $botao = "Editar";
            $codigo = $_GET['codigo'];
            $_SESSION["codigo"] = $codigo;
            $select = selectBancaBanco($codigo);
            $rsBanca = mysqli_fetch_array($select);
            $nome = $rsBanca["nome"];
            $telefone = $rsBanca["telefone"];
            $endereco = $rsBanca["endereco"];
        }
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
                <form method="POST" action="cadastrarbanca.php">
                    Nome:
                    <input type="text" maxlength="100" value="<?php echo($nome) ?>"name="txtNome" required><br>
                    Endereco:
                    <input type="text" maxlength="200" value="<?php echo($endereco) ?>"name="txtEndereco" required><br>
                    Telefone:
                    <input type="text" maxlength="15" value="<?php echo($telefone) ?>"name="txtTelefone" required><br>
                    <input type="submit" value="<?php echo($botao) ?>" name="btnEnviar">
                </form>
            </div>
            <footer id="rodape">
                Desenvolvido por Igor
            </footer>
        </main>
        <script src="js/javascript.js"></script>
    </body>
</html>