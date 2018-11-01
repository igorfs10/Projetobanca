<?php
    include_once "db.php";
	session_start();
    $selectLogin = selectUsuarioBanco($_SESSION["idLogin"]);
    $rsLogado = mysqli_fetch_array($selectLogin);
    $nomeLogado = $rsLogado["nome"];
	
    $selected = "";
    $botao = "Inserir";
    $nome = "";
    $senha = "";
    $idNivel = "";

    if(isset($_POST["btnEnviar"])){
        $acao = $_POST["btnEnviar"];
        if($acao=="Inserir"){
            $nome = $_POST["txtNome"];
            $senha = $_POST["txtSenha"];
            $idNivel = $_POST["cbbNivel"];
        
            insertUsuarioBanco($nome, $senha, $idNivel);
        }else if($acao=="Editar"){
            $nome = $_POST["txtNome"];
            $senha = $_POST["txtSenha"];
            $idNivel = $_POST["cbbNivel"];
            $codigo = $_SESSION["codigo"];
            updateUsuarioBanco($nome, $senha, $idNivel, $codigo);
        }        
        header("Location: adminusuario.php");
    }
    
    if(isset($_GET['modo'])){
        $modo = $_GET['modo'];
        if ($modo == "editar"){
            $botao = "Editar";
            $codigo = $_GET['codigo'];
            $_SESSION["codigo"] = $codigo;
            $select = selectUsuarioBanco($codigo);
            $rsUsuario = mysqli_fetch_array($select);
            $nome = $rsUsuario["nome"];
            $senha = $rsUsuario["senha"];
            $idNivel = $rsUsuario["id_nivel"];
        }
    }
    
    $selectNivel = selectNiveisBanco();
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
                <form method="POST" action="cadastrarusuario.php">
                    Usuário:
                    <input type="text" maxlength="15" name="txtNome" value="<?php echo($nome)?>" required>
                    Senha:
                    <input type="password" maxlength="10" name="txtSenha" value="<?php echo($senha)?>" required><br>
                    Nível:
                    <select name="cbbNivel" required>
                        <option value="">Escolha uma opção</option>
                        <?php
                        while($rsNiveis = mysqli_fetch_array($selectNivel)){
                            if($idNivel == $rsNiveis['id']){
                                $selected = "selected";
                            }else{
                                $selected = "";
                            }
                        ?>
                        <option value="<?php echo($rsNiveis['id'])?>"<?php echo($selected)?>><?php echo($rsNiveis['nome'])?></option>
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