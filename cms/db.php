<?php
    include_once "conexao.php";

    // Contato
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

    
    //Usuario
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
    
    
    //Nivel
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

    

    //Banca
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


    //Noticia
    function selectNoticiasBanco(){
        $sql = "SELECT * from tbl_noticias";
        
        return mysqli_query(conexaoDb(), $sql);
    }

    function ativarNoticiaBanco($id){
        $sql = "UPDATE tbl_noticias SET ativo = 1 WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:adminnoticia.php');
    }

    function desativarNoticiaBanco($id){
        $sql = "UPDATE tbl_noticias SET ativo = 0 WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:adminnoticia.php');
    }

    function deleteNoticiaBanco($id){
        $sql = "DELETE FROM tbl_noticias WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:adminnoticia.php');
    }

    function selectNoticiaBanco($id){
        $sql = "SELECT * from tbl_noticias WHERE id=" . $id;
        
        return mysqli_query(conexaoDb(), $sql);
    }

    function insertNoticiaBanco($titulo, $noticia, $imagem){
        $sql = "INSERT INTO tbl_noticias
                    (titulo, noticia, imagem, ativo)
                    VALUES
                    ('".$titulo."', '".$noticia."', '".$imagem."', 1);";

        mysqli_query(conexaoDb(), $sql);
    }

    function updateNoticiaBanco($titulo, $noticia, $imagem, $id){
        $sql = "UPDATE tbl_noticias SET titulo = '". $titulo ."', noticia = '". $noticia ."', imagem = '". $imagem ."'  WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
    }


    //Celebridade
    function updateCelebridadeBanco($nome, $sobre, $imagem){
        $sql = "UPDATE tbl_celebridades SET nome = '". $nome ."', sobre = '". $sobre ."', imagem = '". $imagem ."'  WHERE id= 1";
        mysqli_query(conexaoDb(), $sql);
    }

    function selectCelebridadeBanco(){
        $sql = "SELECT * from tbl_celebridades WHERE id= 1";
        
        return mysqli_query(conexaoDb(), $sql);
    }

    //Sobre
    function updateSobreBanco($nome, $sobre){
        $sql = "UPDATE tbl_sobre SET nome = '". $nome ."', sobre = '". $sobre ."' WHERE id= 1";
        mysqli_query(conexaoDb(), $sql);
    }

    function selectSobreBanco(){
        $sql = "SELECT * from tbl_sobre WHERE id= 1";
        
        return mysqli_query(conexaoDb(), $sql);
    }
    
?>