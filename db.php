<?php
    include_once "conexao.php";
    function insertContato($nome, $telefone, $celular, $email, $homepage, $facebook, $sugestao, $informacao, $sexo, $profissao){
        $sql = "INSERT INTO tbl_contatos
                    (nome, telefone, celular, email, homepage, facebook, sugestao, informacao, sexo, profissao)
                    VALUES
                    ('".$nome."', '".$telefone."', '".$celular."', '".$email."', '".$homepage."', '".$facebook."', '".$sugestao."', '".$informacao."', '".$sexo."', '".$profissao."');";

        mysqli_query(conexaoDb(), $sql);
    }

    function insertBanca($nome, $endereco, $telefone){
        $sql = "INSERT INTO tbl_bancas
                    (nome, endereco, telefone, ativo)
                    VALUES
                    ('".$nome."', '".$endereco."', '".$telefone."', 1)";

        mysqli_query(conexaoDb(), $sql);
    }

    function selectBancas(){
        $sql = "SELECT * FROM tbl_bancas";
        return mysqli_query(conexaoDb(), $sql);
    }
?>