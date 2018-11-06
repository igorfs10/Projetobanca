<?php
    include_once "db.php";
	session_start();
    if(isset($_POST["login"])){
        $usuario = $_POST["txtUsuario"];
        $senha = $_POST["txtSenha"];
        $select = selectUsuarios();
        $logado = false;
        
        while($rsUsuarios = mysqli_fetch_array($select)){
            $ativo = $rsUsuarios['ativo'];
            $usuarioBanco = $rsUsuarios['nome'];
            $senhaBanco = $rsUsuarios['senha'];
            if($ativo and $usuarioBanco == $usuario and $senhaBanco == $senha){
                $logado = true;
                $_SESSION["idLogin"] = $rsUsuarios['id'];
            }
        }
        if ($logado){
            echo("<p>Encaminhando para o CMS.</p> <script>setTimeout(function(){ window.location.assign( 'cms/') }, 2000);</script>");
        }else{
            echo("<p>Login Inválido. Encaminhando para a página inicial.</p> <script>setTimeout(function(){ window.location.assign( 'index.php') }, 2000);</script>");
        }
    }
    if(isset($_GET["modo"])){
		unset ($_SESSION["idLogin"]);
        echo("<p>Saindo do sistema. Encaminhando para a página inicial.</p> <script>setTimeout(function(){ window.location.assign( 'index.php') }, 2000);</script>");
    }
?>