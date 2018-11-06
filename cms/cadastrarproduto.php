<?php
    include_once "db.php";
	session_start();
	if(!(isset($_SESSION["idLogin"]))){
		header("Location: ../index.php");
	}
    $selectLogin = selectUsuarioBanco($_SESSION["idLogin"]);
    $rsLogado = mysqli_fetch_array($selectLogin);
    $nomeLogado = $rsLogado["nome"];
	
    $selected = "";
    $botao = "Inserir";
    $nome = "";
	$preco = "";
	$desconto = "";

    if(isset($_POST["btnEnviar"])){
        $acao = $_POST["btnEnviar"];
        if($acao=="Inserir"){
            $nome = $_POST["txtNome"];

            insertUsuarioBanco($nome, $senha, $idNivel);
        }else if($acao=="Editar"){
            $desconto = $_POST["txtDesconto"];
            $codigo = $_SESSION["codigo"];
            updateProdutoBanco($desconto, $codigo);
        }        
        header("Location: produtos.php");
    }
    
    if(isset($_GET['modo'])){
        $modo = $_GET['modo'];
        if ($modo == "editar"){
            $botao = "Editar";
            $codigo = $_GET['codigo'];
            $_SESSION["codigo"] = $codigo;
            $select = selectProdutoBanco($codigo);
            $rsProduto = mysqli_fetch_array($select);
            $nome = $rsProduto["nome"];
			$preco = $rsProduto["preco"];
            $desconto = $rsProduto["desconto"];
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
                    Bem Vindo, <?php echo($nomeLogado)?>.<br><br><br><br>
                    <a href="../login.php?modo=logout"><span class="branco">Logout</span></a>
                </div>
            </div>
            <div id="caixaConteudo">
                <form method="POST" action="cadastrarproduto.php">
					<span class="branco">
                    Produto: <?php echo($nome)?><br>
					Valor: R$<?php echo($preco)?>,00<br>
                    Desconto:
                    <input type="number" maxlength="5" min="0" max="<?php echo($preco - 1)?>"name="txtDesconto" value="<?php echo($desconto)?>" required>,00<br>
                    <input type="submit" value="<?php echo($botao)?>"name="btnEnviar">
					</span>
                </form>
            </div>
            <footer id="rodape">
                Desenvolvido por Igor
            </footer>
        </main>
        <script src="js/javascript.js"></script>
    </body>
</html>