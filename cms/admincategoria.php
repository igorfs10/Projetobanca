<?php
    include_once "db.php";
	session_start();
	if(!(isset($_SESSION["idLogin"]))){
		header("Location: ../index.php");
	}
    $selectLogin = selectUsuarioBanco($_SESSION["idLogin"]);
    $rsLogado = mysqli_fetch_array($selectLogin);
    $nomeLogado = $rsLogado["nome"];

    $select = selectCategoriasBanco();
    if(isset($_GET['modo'])){
        $modo = $_GET['modo'];

        if($modo == "apagar"){
        $codigo = $_GET['codigo'];
            deleteCategoriaBanco($codigo);
        }
        
        if($modo == "ativar"){
        $codigo = $_GET['codigo'];
            ativarCategoriaBanco($codigo);
        }
        
        if($modo == "desativar"){
        $codigo = $_GET['codigo'];
            desativarCategoriaBanco($codigo);
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
                <div class=colunaConteudo>
                    <a href="cadastrarcategoria.php">
                        <div class="caixaOpcao">
                            <div class="imagemOpcao"><img src="icones/config.png"></div>
                             Nova Categoria
                        </div>
                    </a>
                </div>
                <div class=colunaConteudoContatoNivel>
                    <?php
                    while($rsCategorias = mysqli_fetch_array($select)){
                        $ativo = $rsCategorias['ativo'];
                    ?>
                        <div class="usuarioNivel">
                             <?php echo($rsCategorias['nome'])?>
                            <span class="direito"><a href="admincategoria.php?modo=apagar&codigo=<?php echo($rsCategorias['id'])?>"><img src="icones/delete.png"></a></span>
                            <span class="direito"><a href="cadastrarcategoria.php?modo=editar&codigo=<?php echo($rsCategorias['id'])?>"><img src="icones/edit.png"></a></span>
                            <?php
                                if($ativo){
                            ?>
                            <span class="direito"><a href="admincategoria.php?modo=desativar&codigo=<?php echo($rsCategorias['id'])?>"><img src="icones/checked.png"></a></span>
                            <?php
                                }else{
                            ?>
                            <span class="direito"><a href="admincategoria.php?modo=ativar&codigo=<?php echo($rsCategorias['id'])?>"><img src="icones/unchecked.png"></a></span>
                            <?php
                                }
                            ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <footer id="rodape">
                Desenvolvido por Igor
            </footer>
        </main>
        <script src="js/javascript.js"></script>
    </body>
</html>