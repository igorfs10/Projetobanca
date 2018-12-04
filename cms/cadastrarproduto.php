<?php
    include_once "db.php";
	session_start();
	if(!(isset($_SESSION["idLogin"]))){
		header("Location: ../index.php");
	}
    $selectLogin = selectUsuarioBanco($_SESSION["idLogin"]);
    $rsLogado = mysqli_fetch_array($selectLogin);
    $nomeLogado = $rsLogado["nome"];
	
    $botao = "Inserir";
    $nome = "";
    $sobre = "";
    $foto = "";
    $preco = "";
    $desconto = "";
    $catEscolhido = 0;
    $subEscolhido = 0;

    $selectCategorias = selectCategoriasBanco();

    if(isset($_POST["btnEnviar"])){
        $acao = $_POST["btnEnviar"];
        if($acao=="Inserir"){
            $nome = $_POST["txtNome"];
            $sobre = $_POST["txtSobre"];
            $foto = $_POST["txtFoto"];
            $preco = $_POST["txtPreco"];
            $desconto = $_POST["txtDesconto"];
            $catEscolhido = $_POST["cbbCat"];
            $subEscolhido = $_POST["cbbSub"];
            insertProdutoBanco($nome, $sobre, $preco, $desconto, $subEscolhido, $foto);
        }else if($acao=="Editar"){
            $nome = $_POST["txtNome"];
            $sobre = $_POST["txtSobre"];
            $foto = $_POST["txtFoto"];
            $codigo = $_SESSION["codigo"];
            $preco = $_POST["txtPreco"];
            $desconto = $_POST["txtDesconto"];
            $catEscolhido = $_POST["cbbCat"];
            $subEscolhido = $_POST["cbbSub"];
            insertProdutoBanco($nome, $sobre, $preco, $desconto, $subEscolhido, $foto);
        }        
        header("Location: adminproduto.php");
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
            $sobre = $rsProduto["sobre"];
            $foto = $rsProduto["imagem"];
            $subEscolhido = $rsProduto["id_subcategoria"];
            $select = selectSubcategoriaBanco($subEscolhido);
            $rsSub = mysqli_fetch_array($select);
            $catEscolhido = $rsSub["id_categoria"];
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
    <script>
        let cat = [];
        let sub = [];
        for(let i=0; i<500; i++) {
            sub[i] = new Array(500);
        }
        <?php
            echo("let catE = ".$catEscolhido.";");
            echo("let subE = ".$subEscolhido.";");
            while($rsCategorias = mysqli_fetch_array($selectCategorias)){
                $idCat = $rsCategorias['id'];
                $nomeCat = $rsCategorias['nome'];
                echo("
                    cat[".$idCat."] = '".$nomeCat."';
                    ");
                $selectSubs = selectSubcategoriasId($idCat);
                while($rsSubs = mysqli_fetch_array($selectSubs)){
                    $idSub = $rsSubs['id'];
                    $nomeSub = $rsSubs['nome'];
                    echo("
                        sub[".$idCat."][".$idSub."] = '".$nomeSub."';
                        ");
                }
            }
        ?>
        
    </script>
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
                <form id="frm"method="POST" action="cadastrarproduto.php">
                    <input type="text" name="txtFoto" id="uploadFoto" value="<?php echo($foto) ?>"><br>
                    Nome:
                    <input type="text" maxlength="100" value="<?php echo($nome) ?>"name="txtNome" required>
                    Valor:
                    <input type="number" max="1000" min="0" value="<?php echo($preco) ?>"name="txtPreco" onchange="limiteDesconto(this.value)"required>
                    Desconto:
                    <input type="number" max="0" min="0" value="<?php echo($desconto) ?>"name="txtDesconto" id="tDesconto" required>
                    <br>
                    Descricao:<br>
                    <textarea rows="5" cols="70" name="txtSobre" maxlength="100" required><?php echo($sobre) ?></textarea><br>
                    <select name="cbbCat" id="cbCat" required onchange="preencherSub(this.value)"></select>
                    <select name="cbbSub" id="cbSub" required></select>
                    <input type="submit" value="<?php echo($botao) ?>" name="btnEnviar">
                </form>
            </div>
            <footer id="rodape">
                Desenvolvido por Igor
            </footer>
        </main>
        <script src="js/javascript.js"></script>
        <script>
            function preencherCat(){
                cbCat.innerHTML= "<option value=''>Escolha a Categoria</option>"
                for(let i in cat){
                    cbCat.innerHTML += `<option value="${i}">${cat[i]}</option>`
                }
            }
            
            function preencherSub(cat){
                cbSub.innerHTML = "<option value=''>Escolha a Subcategoria</option>";
                for(let i in sub[cat]){
                    cbSub.innerHTML += `<option value="${i}">${sub[cat][i]}</option>`
                }
            }
            
            function limiteDesconto(maximo){
                if(maximo <= 0){
                    tDesconto.setAttribute("max", 0);
                }else{
                    tDesconto.setAttribute("max", maximo - 1);
                }
                tDesconto.value = 0;
            }
            preencherCat();
            preencherSub(0);
            
            if(catE){
                
            }
        </script>
    </body>
</html>