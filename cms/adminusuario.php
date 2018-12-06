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

    $select = selectUsuariosBanco();
    if(isset($_GET['modo'])){
        $modo = $_GET['modo'];

        if($modo == "apagar"){
        $codigo = $_GET['codigo'];
            deleteUsuarioBanco($codigo);
        }
        
        if($modo == "ativar"){
        $codigo = $_GET['codigo'];
            ativarUsuarioBanco($codigo);
        }
        
        if($modo == "desativar"){
        $codigo = $_GET['codigo'];
            desativarUsuarioBanco($codigo);
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
                <div class=colunaConteudo>
                    <a href="cadastrarusuario.php">
                        <div class="caixaOpcao">
                            <div class="imagemOpcao"><img src="icones/config.png"></div>
                             Novo Usuário
                        </div>
                    </a>
                </div>
                <div class=colunaConteudoContatoNivel>
                    <?php
                    while($rsUsuarios = mysqli_fetch_array($select)){
                        $ativo = $rsUsuarios['ativo'];
                    ?>
                        <div class="usuarioNivel">
                             <?php echo($rsUsuarios['nome'])?>
                            <span class="direito"><a href="adminusuario.php?modo=apagar&codigo=<?php echo($rsUsuarios['id'])?>"><img src="icones/delete.png"></a></span>
                            <span class="direito"><a href="cadastrarusuario.php?modo=editar&codigo=<?php echo($rsUsuarios['id'])?>"><img src="icones/edit.png"></a></span>
                            <?php
                                if($ativo){
                            ?>
                            <span class="direito"><a href="adminusuario.php?modo=desativar&codigo=<?php echo($rsUsuarios['id'])?>"><img src="icones/checked.png"></a></span>
                            <?php
                                }else{
                            ?>
                            <span class="direito"><a href="adminusuario.php?modo=ativar&codigo=<?php echo($rsUsuarios['id'])?>"><img src="icones/unchecked.png"></a></span>
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