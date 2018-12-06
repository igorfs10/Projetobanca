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

    $select = selectSobresBanco();
    if(isset($_GET['modo'])){
        $modo = $_GET['modo'];

        if($modo == "apagar"){
        $codigo = $_GET['codigo'];
            deleteSobreBanco($codigo);
        }
        
        if($modo == "ativar"){
        $codigo = $_GET['codigo'];
            ativarSobreBanco($codigo);
        }
        
        if($modo == "desativar"){
        $codigo = $_GET['codigo'];
            desativarSobreBanco($codigo);
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
                    <a href="cadastrarsobre.php">
                        <div class="caixaOpcao">
                             &nbsp;&nbsp; Novo Sobre
                        </div>
                    </a>
                </div>
                <div class=colunaConteudoContatoNivel>
                    <?php
                    while($rsSobre = mysqli_fetch_array($select)){
                        $ativo = $rsSobre['ativo'];
                    ?>
                        <div class="usuarioNivel">
                             <?php echo($rsSobre['nome'])?>
                            <span class="direito"><a href="adminsobre.php?modo=apagar&codigo=<?php echo($rsSobre['id'])?>"><img src="icones/delete.png"></a></span>
                            <span class="direito"><a href="cadastrarsobre.php?modo=editar&codigo=<?php echo($rsSobre['id'])?>"><img src="icones/edit.png"></a></span>
                            <?php
                                if($ativo){
                            ?>
                            <span class="direito"><a href="adminsobre.php?modo=desativar&codigo=<?php echo($rsSobre['id'])?>"><img src="icones/checked.png"></a></span>
                            <?php
                                }else{
                            ?>
                            <span class="direito"><a href="adminsobre.php?modo=ativar&codigo=<?php echo($rsSobre['id'])?>"><img src="icones/unchecked.png"></a></span>
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