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
	
    $selected = "";
    $botao = "Inserir";
    $nome = "";
    $idCategoria = "";

    if(isset($_POST["btnEnviar"])){
        $acao = $_POST["btnEnviar"];
        if($acao=="Inserir"){
            $nome = $_POST["txtNome"];
            $idCategoria = $_POST["cbbCategoria"];
        
            insertSubcategoriaBanco($nome, $idCategoria);
        }else if($acao=="Editar"){
            $nome = $_POST["txtNome"];
            $idCategoria = $_POST["cbbCategoria"];
            $codigo = $_SESSION["codigo"];
            updateSubcategoriaBanco($nome, $idCategoria, $codigo);
        }
        header("Location: adminsubcategoria.php");
    }
    
    if(isset($_GET['modo'])){
        $modo = $_GET['modo'];
        if ($modo == "editar"){
            $botao = "Editar";
            $codigo = $_GET['codigo'];
            $_SESSION["codigo"] = $codigo;
            $select = selectSubcategoriaBanco($codigo);
            $rsSubcategoria = mysqli_fetch_array($select);
            $nome = $rsSubcategoria["nome"];
            $idCategoria = $rsSubcategoria["id_categoria"];
        }
    }
    
    $selectCategoria = selectCategoriasBanco();
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
                <form method="POST" action="cadastrarSubcategoria.php">
                    Subcategoria:
                    <input type="text" maxlength="20" name="txtNome" value="<?php echo($nome)?>" required>
                    Categoria:
                    <select name="cbbCategoria" required>
                        <option value="">Escolha uma opção</option>
                        <?php
                        while($rsCategorias = mysqli_fetch_array($selectCategoria)){
                            if($idCategoria == $rsCategorias['id']){
                                $selected = "selected";
                            }else{
                                $selected = "";
                            }
                        ?>
                        <option value="<?php echo($rsCategorias['id'])?>"<?php echo($selected)?>><?php echo($rsCategorias['nome'])?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <input type="submit" value="<?php echo($botao)?>"name="btnEnviar">
                </form>
            </div>
            <footer id="rodape">
                Desenvolvido por Igor
            </footer>
        </main>
        <script src="js/javascript.js"></script>
    </body>
</html>