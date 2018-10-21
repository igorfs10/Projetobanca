<?php
    include_once "conexao.php";
    function selectBanco(){
        $sql = "SELECT * from tbl_contatos";
        
        return mysqli_query(conexaoDb(), $sql);
    }

    function selectContatoBanco($id){
        $sql = "SELECT * from tbl_contatos WHERE id=" . $id;
        
        return mysqli_query(conexaoDb(), $sql);
    }

    function deleteContatoBanco($id){
        $sql = "DELETE FROM tbl_contatos WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:faleconosco.php');
    }

    function selectUsuariosBanco(){
        $sql = "SELECT * from tbl_usuarios";
        
        return mysqli_query(conexaoDb(), $sql);
    }

    function deleteUsuarioBanco($id){
        $sql = "DELETE FROM tbl_usuarios WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:adminusuario.php');
    }

    function ativarUsuarioBanco($id){
        $sql = "UPDATE tbl_usuarios SET ativo = 1 WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:adminusuario.php');
    }

    function desativarUsuarioBanco($id){
        $sql = "UPDATE tbl_usuarios SET ativo = 0 WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:adminusuario.php');
    }

    function insertUsuarioBanco($nome, $senha, $idNivel){
        $sql = "INSERT INTO tbl_usuarios
                    (nome, senha, id_nivel, ativo)
                    VALUES
                    ('".$nome."', '".$senha."', ".$idNivel.", 1);";

        mysqli_query(conexaoDb(), $sql);
        
        echo($sql);
    }
    
    function selectNiveisBanco(){
        $sql = "SELECT * from tbl_niveis";
        
        return mysqli_query(conexaoDb(), $sql);
    }
?>