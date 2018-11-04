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
    function selectCelebridadesBanco(){
        $sql = "SELECT * from tbl_celebridades";
        
        return mysqli_query(conexaoDb(), $sql);
    }

    function ativarCelebridadeBanco($id){
        $sql = "UPDATE tbl_celebridades SET ativo = 1 WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:admincelebridade.php');
    }

    function desativarCelebridadeBanco($id){
        $sql = "UPDATE tbl_celebridades SET ativo = 0 WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:admincelebridade.php');
    }

    function deleteCelebridadeBanco($id){
        $sql = "DELETE FROM tbl_celebridades WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:admincelebridade.php');
    }

    function selectCelebridadeBanco($id){
        $sql = "SELECT * from tbl_celebridades WHERE id=" . $id;
        
        return mysqli_query(conexaoDb(), $sql);
    }

    function insertCelebridadeBanco($nome, $sobre, $imagem){
        $sql = "INSERT INTO tbl_celebridades
                    (nome, sobre, imagem, ativo)
                    VALUES
                    ('".$nome."', '".$sobre."', '".$imagem."', 1);";

        mysqli_query(conexaoDb(), $sql);
    }

    function updateCelebridadeBanco($nome, $sobre, $imagem, $id){
        $sql = "UPDATE tbl_celebridades SET nome = '". $nome ."', sobre = '". $sobre ."', imagem = '". $imagem ."'  WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
    }

    //Sobre banca
    function selectSobresBanco(){
        $sql = "SELECT * from tbl_sobre";
        
        return mysqli_query(conexaoDb(), $sql);
    }

    function ativarSobreBanco($id){
        $sql = "UPDATE tbl_sobre SET ativo = 1 WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:adminsobre.php');
    }

    function desativarSobreBanco($id){
        $sql = "UPDATE tbl_sobre SET ativo = 0 WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:adminsobre.php');
    }

    function deleteSobreBanco($id){
        $sql = "DELETE FROM tbl_sobre WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:adminsobre.php');
    }

    function selectSobreBanco($id){
        $sql = "SELECT * from tbl_sobre WHERE id=" . $id;
        
        return mysqli_query(conexaoDb(), $sql);
    }

    function insertSobreBanco($nome, $sobre){
        $sql = "INSERT INTO tbl_sobre
                    (nome, sobre, ativo)
                    VALUES
                    ('".$nome."', '".$sobre."', 1);";

        mysqli_query(conexaoDb(), $sql);
    }

    function updateSobreBanco($nome, $sobre, $id){
        $sql = "UPDATE tbl_sobre SET nome = '". $nome ."', sobre = '". $sobre ."'  WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
    }
?>