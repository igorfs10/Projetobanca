<<<<<<< HEAD
<?php
    include_once "db.php";

    $select = selectNiveisBanco();
    if(isset($_GET['modo'])){
        $modo = $_GET['modo'];

        if($modo == "apagar"){
        $codigo = $_GET['codigo'];
            deleteNivelBanco($codigo);
        }
        
        if($modo == "ativar"){
        $codigo = $_GET['codigo'];
            ativarNivelBanco($codigo);
        }
        
        if($modo == "desativar"){
        $codigo = $_GET['codigo'];
            desativarNivelBanco($codigo);
        }
    }
?>
=======
>>>>>>> 98ffbee75d7c9b22673614a6a5d586350ca5d2b2
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
                <div class=colunaConteudo>
<<<<<<< HEAD
                    <a href="cadastrarnivel.php">
                        <div class="caixaOpcao">
                            <div class="imagemOpcao"><img src="icones/config.png"></div>
                             Novo Nível
                        </div>
                    </a>
                </div>
                <div class=colunaConteudoContatoNivel>
                    <?php
                    while($rsNiveis = mysqli_fetch_array($select)){
                        $ativo = $rsNiveis['ativo'];
                    ?>
                        <div class="usuarioNivel">
                             <?php echo($rsNiveis['nome'])?>
                            <span class="direito"><a href="adminnivel.php?modo=apagar&codigo=<?php echo($rsNiveis['id'])?>"><img src="icones/delete.png"></a></span>
                            <span class="direito"><a href="cadastrarnivel.php?modo=editar&codigo=<?php echo($rsNiveis['id'])?>"><img src="icones/edit.png"></a></span>
                            <?php
                                if($ativo){
                            ?>
                            <span class="direito"><a href="adminnivel.php?modo=desativar&codigo=<?php echo($rsNiveis['id'])?>"><img src="icones/checked.png"></a></span>
                            <?php
                                }else{
                            ?>
                            <span class="direito"><a href="adminnivel.php?modo=ativar&codigo=<?php echo($rsNiveis['id'])?>"><img src="icones/unchecked.png"></a></span>
                            <?php
                                }
                            ?>
                        </div>
                    <?php } ?>
=======
                    <div class="caixaOpcao">
                        <div class="imagemOpcao"><img src="icones/config.png"></div>
                        Usuários
                    </div>
                    <div class="caixaOpcao">
                        <div class="imagemOpcao"><img src="icones/config.png"></div>
                        Niveis
                    </div>
                </div>
                <div class=colunaConteudo>
>>>>>>> 98ffbee75d7c9b22673614a6a5d586350ca5d2b2
                </div>
            </div>
            <footer id="rodape">
                Desenvolvido por Igor
            </footer>
        </main>
        <script src="js/javascript.js"></script>
    </body>
</html>