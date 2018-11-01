<?php
    include_once "db.php";
	session_start();
    $selectLogin = selectUsuarioBanco($_SESSION["idLogin"]);
    $rsLogado = mysqli_fetch_array($selectLogin);
    $nomeLogado = $rsLogado["nome"];

    $select = selectBanco();
    if(isset($_GET['modo'])){
        $modo = $_GET['modo'];

        if($modo == "apagar"){
        $codigo = $_GET['codigo'];
            deleteContatoBanco($codigo);
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
        <script src="js/jquery.js"></script>
        <script>
            $(document).ready(function(){

                //Function para abrir a janela Modal
                $(".visualizar").click(function(){
                    //toogle, slideToogle, slideDown, slideUp, fadeIn, fadeOut
                    $("#container").fadeIn(1100);
                });
            });
            //Função para receber o ID do Registro e 
            //descarregar na modal
            function modal(idItem){
                //Somente o ajax consegue forçar um POST ou GET
                //para uma página sem precisar atualizar a página

                /*
                    type: - serve para especificar se é GET ou POST

                    url: - serve para especificar a página que será requisitada

                    data: serve para criar váriaveis que serão submetidas (GET/POST) 
                    para a página requisitada

                    success: caso toda a requisição seja realizada com exito, então 
                    a function do success será chamada e através do parametro dados, 
                    iremos descarregar na div (modal) o conteudo de dados
                */
                $.ajax({
                    type: "POST",
                    url: "modal.php",
                    data:{idRegistro:idItem},
                    success: function(dados){

                        $('#modal').html(dados);
                    }
                })
            }
        </script>
	</head>
	<body>
        <div id="container">
            <div id="modal">
            </div>
        </div>
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
                <div class=caixaContato>
                    <?php
                    while($rsContatos = mysqli_fetch_array($select)){
                    ?>
                    <div class="contato">
                        Nome: <span class="textoNegrito"><?php echo($rsContatos['nome'])?></span>
                        <span class="visualizar direito"><a href="#"><img src="icones/zoom.png" onclick="modal(<?php echo($rsContatos['id']) ?>)"></a></span>
                        <br>
                        Email: <span class="textoNegrito"><?php echo($rsContatos['email'])?></span>
                        <span class="direito"><a href="faleconosco.php?modo=apagar&codigo=<?php echo($rsContatos['id'])?>"><img src="icones/delete.png"></a></span>
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