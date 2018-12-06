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
    $titulo = "";
    $noticia = "";
    $foto = "";

    if(isset($_POST["btnEnviar"])){
        $acao = $_POST["btnEnviar"];
        if($acao=="Inserir"){
            $titulo = $_POST["txtTitulo"];
            $noticia = $_POST["txtNoticia"];
            $foto = $_POST["txtFoto"];
            insertNoticiaBanco($titulo, $noticia, $foto);
        }else if($acao=="Editar"){
            $titulo = $_POST["txtTitulo"];
            $noticia = $_POST["txtNoticia"];
            $foto = $_POST["txtFoto"];
            $codigo = $_SESSION["codigo"];
            updateNoticiaBanco($titulo, $noticia, $foto, $codigo);
        }        
        header("Location: adminnoticia.php");
    }

    if(isset($_GET['modo'])){
        $modo = $_GET['modo'];
        if ($modo == "editar"){
            $botao = "Editar";
            $codigo = $_GET['codigo'];
            $_SESSION["codigo"] = $codigo;
            $select = selectNoticiaBanco($codigo);
            $rsNoticia = mysqli_fetch_array($select);
            $titulo = $rsNoticia["titulo"];
            $noticia = $rsNoticia["noticia"];
            $foto = $rsNoticia["imagem"];
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
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script>
        $(document).ready(function(){
            // Na ação do live do elemento file, que significa algo ser carregado com um arquivo(foto), será acionado
            $("#foto").live("change",function(){
                
                //Coloca um gif animado para criar uma interação com o usuario
                $("#visualizarNoticia").html("<img src='imagens/ajax-loader.gif'>");
                
                setTimeout(function(){
                    //Forçando um submit no formulario do file upload para conseguir realizar o upload  da foto sem um clique de um botão
                
                    //O retorno da página upload.php que será submetido pelo formulário deverá ser descarregada na div visualizar. Para isso usamos o atributo target do ajaxForm (isso é conhecido como callback)
                    $("#frmFoto").ajaxForm({
                        target:"#visualizarNoticia"
                    }).submit();
                }, 1000);
            });
            //Colocando gif animado no click do botao
            $("#btnSalvar").click(function(){
                 $("#visualizarNoticia").html("<img src='imagens/ajax-salvando.gif'>");
                
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
                <?php pegarItens($nivelLogado); ?>
                <div id="caixaUsuario">
                    Bem Vindo, <?php echo($nomeLogado)?>.<br><br><br><br>
                    <a href="../login.php?modo=logout"><span class="branco">Logout</span></a>
                </div>
            </div>
            <div id="caixaConteudo">
                <form id="frmFoto" name="formFoto" method="POST" action="upload.php" enctype="multipart/form-data">
                    <div id="visualizarNoticia">
                        <?php if ($foto){
                            echo("<img src='" .$foto . "'>");
                        } 
                        ?>
                    </div><br>
                    Imagem:<br>
                    <input type="file" name="fleFoto" id="foto">
                </form>
                <form id="frm"method="POST" action="cadastrarnoticia.php">
                    <input type="text" name="txtFoto" id="uploadFoto" value="<?php echo($foto) ?>"><br>
                    Título:
                    <input type="text" maxlength="100" value="<?php echo($titulo) ?>"name="txtTitulo" required><br>
                    Notícia:<br>
                    <textarea rows="6" cols="70" name="txtNoticia" maxlength="400" required><?php echo($noticia) ?></textarea><br>
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