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
	
    $botao = "Inserir";
    $nome = "";
    $telefone = "";
    $endereco = "";

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
                <?php pegarItens($nivelLogado); ?>
                <div id="caixaUsuario">
                    Bem Vindo, <?php echo($nomeLogado)?>.<br><br><br><br>
                    <a href="../login.php?modo=logout"><span class="branco">Logout</span></a>
                </div>
            </div>
            <div id="caixaConteudo">
                <form method="POST" action="cadastrarbanca.php">
                    Nome:
                    <input type="text" maxlength="60" value="<?php echo($nome) ?>"name="txtNome" required><br>
                    Endereco:
                    <input type="text" maxlength="90" value="<?php echo($endereco) ?>"name="txtEndereco" required><br>
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