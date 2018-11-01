<?php
    include_once "db.php";
	session_start();
    $selectLogin = selectUsuarioBanco($_SESSION["idLogin"]);
    $rsLogado = mysqli_fetch_array($selectLogin);
    $nomeLogado = $rsLogado["nome"];
	
    $nome = "";
    $sobre = "";
    $foto = "";

    if(isset($_POST["btnEnviar"])){
        $nome = $_POST["txtNome"];
        $sobre = $_POST["txtSobre"];
        $foto = $_POST["txtFoto"];
        updateCelebridadeBanco($nome, $sobre, $foto);       
        header("Location: index.php");
    }
    $select = selectCelebridadeBanco();
    $rsCelebridade = mysqli_fetch_array($select);
    $nome = $rsCelebridade["nome"];
    $sobre = $rsCelebridade["sobre"];
    $foto = $rsCelebridade["imagem"];
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
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script>
        $(document).ready(function(){
            // Na ação do live do elemento file, que significa algo ser carregado com um arquivo(foto), será acionado
            $("#foto").live("change",function(){
                
                //Coloca um gif animado para criar uma interação com o usuario
                $("#visualizarCelebridade").html("<img src='imagens/ajax-loader.gif'>");
                
                setTimeout(function(){
                    //Forçando um submit no formulario do file upload para conseguir realizar o upload  da foto sem um clique de um botão
                
                    //O retorno da página upload.php que será submetido pelo formulário deverá ser descarregada na div visualizar. Para isso usamos o atributo target do ajaxForm (isso é conhecido como callback)
                    $("#frmFoto").ajaxForm({
                        target:"#visualizarCelebridade"
                    }).submit();
                }, 1000);
            });
            //Colocando gif animado no click do botao
            $("#btnSalvar").click(function(){
                 $("#visualizarCelebridade").html("<img src='imagens/ajax-salvando.gif'>");
                
                setTimeout(function(){
                    frm.submit();
                }, 1000);
            });
        });
        </script>
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
                <form id="frmFoto" name="formFoto" method="POST" action="upload.php" enctype="multipart/form-data">
                    <div id="visualizarCelebridade">
                        <?php if ($foto){
                            echo("<img src='" .$foto . "'>");
                        } 
                        ?>
                    </div><br>
                    Imagem:<br>
                    <input type="file" name="fleFoto" id="foto">
                </form>
                <form id="frm"method="POST" action="admincelebridade.php">
                    <input type="text" name="txtFoto" id="uploadFoto" value="<?php echo($foto) ?>"><br>
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