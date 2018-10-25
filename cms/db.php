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

    function selectUsuarioBanco($id){
        $sql = "SELECT * from tbl_usuarios WHERE id=". $id;
        
        return mysqli_query(conexaoDb(), $sql);
    }

    function updateUsuarioBanco($nome, $senha, $nivel, $id){
        $sql = "UPDATE tbl_usuarios SET nome = '". $nome ."', senha = '". $senha. "', id_nivel = '". $nivel."' WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        echo($sql);
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
    }
    
    function selectNiveisBanco(){
        $sql = "SELECT * from tbl_niveis";
        
        return mysqli_query(conexaoDb(), $sql);
    }

    function selectNivelBanco($id){
        $sql = "SELECT * from tbl_niveis WHERE id=" . $id;
        
        return mysqli_query(conexaoDb(), $sql);
    }


    function insertNivelBanco($nome){
        $sql = "INSERT INTO tbl_niveis
                    (nome, ativo)
                    VALUES
                    ('".$nome."', 1);";

        mysqli_query(conexaoDb(), $sql);
    }
    
    function updateNivelBanco($nome, $id){
        $sql = "UPDATE tbl_niveis SET nome = '". $nome ."' WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        
    }
    
    function deleteNivelBanco($id){
        $sql = "DELETE FROM tbl_niveis WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:adminnivel.php');
    }

    function ativarNivelBanco($id){
        $sql = "UPDATE tbl_niveis SET ativo = 1 WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:adminnivel.php');
    }

    function desativarNivelBanco($id){
        $sql = "UPDATE tbl_niveis SET ativo = 0 WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:adminnivel.php');
    }

    


    function selectBancasBanco(){
        $sql = "SELECT * from tbl_bancas";
        
        return mysqli_query(conexaoDb(), $sql);
    }

    function deleteBancaBanco($id){
        $sql = "DELETE FROM tbl_bancas WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:adminbanca.php');
    }

    function ativarBancaBanco($id){
        $sql = "UPDATE tbl_bancas SET ativo = 1 WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:adminbanca.php');
    }

    function desativarBancaBanco($id){
        $sql = "UPDATE tbl_bancas SET ativo = 0 WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:adminbanca.php');
    }

    function updateBancaBanco($nome, $telefone, $endereco, $id){
        $sql = "UPDATE tbl_bancas SET nome = '". $nome ."', telefone = '". $telefone ."', endereco = '". $endereco ."'  WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
    }
    
    function selectBancaBanco($id){
        $sql = "SELECT * from tbl_bancas WHERE id=" . $id;
        
        return mysqli_query(conexaoDb(), $sql);
    }

    function insertBancaBanco($nome, $telefone, $endereco){
        $sql = "INSERT INTO tbl_bancas
                    (nome, telefone, endereco, ativo)
                    VALUES
                    ('".$nome."', '".$telefone."', '".$endereco."', 1);";

        mysqli_query(conexaoDb(), $sql);
    }
?>