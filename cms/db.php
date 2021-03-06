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
	
	//Produtos
    function insertProdutoBanco($nome, $sobre, $preco, $desconto, $idSub, $imagem){
        $sql = "INSERT INTO tbl_produtos
                    (nome, sobre, preco, desconto, id_subcategoria , imagem, ativo)
                    VALUES
                    ('".$nome."', '".$sobre."', '".$preco."', '".$desconto."', '".$idSub."', '".$imagem."', 1);";

        mysqli_query(conexaoDb(), $sql);
    }
    
	function selectProdutosBanco(){
        $sql = "SELECT * from tbl_produtos";
        
        return mysqli_query(conexaoDb(), $sql);
    }
	
	function updateProdutoBanco($nome, $sobre, $preco, $desconto, $idSub, $imagem, $id){
        $sql = "UPDATE tbl_produtos SET nome = '". $nome ."', sobre = '".$sobre."', preco = '".$preco."', desconto = '".$desconto."', id_subcategoria = '".$idSub."', imagem = '".$imagem."' WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
    }
	
	function selectProdutoBanco($id){
        $sql = "SELECT * from tbl_produtos WHERE id=" . $id;
        
        return mysqli_query(conexaoDb(), $sql);
    }
    
    function ativarProdutoBanco($id){
        $sql = "UPDATE tbl_produtos SET ativo = 1 WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:adminproduto.php');
    }

    function desativarProdutoBanco($id){
        $sql = "UPDATE tbl_produtos SET ativo = 0 WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:adminproduto.php');
    }

    function deleteProdutoBanco($id){
        $sql = "DELETE FROM tbl_produtos WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:adminproduto.php');
    }



     //Categorias
    function selectCategoriasBanco(){
        $sql = "SELECT * from tbl_categorias";
        
        return mysqli_query(conexaoDb(), $sql);
    }

    function selectCategoriaBanco($id){
        $sql = "SELECT * from tbl_categorias WHERE id=" . $id;
        
        return mysqli_query(conexaoDb(), $sql);
    }


    function insertCategoriaBanco($nome){
        $sql = "INSERT INTO tbl_categorias
                    (nome, ativo)
                    VALUES
                    ('".$nome."', 1);";

        mysqli_query(conexaoDb(), $sql);
    }
    
    function updateCategoriaBanco($nome, $id){
        $sql = "UPDATE tbl_categorias SET nome = '". $nome ."' WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        
    }
    
    function deleteCategoriaBanco($id){
        $sql = "DELETE FROM tbl_categorias WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:admincategoria.php');
    }

    function ativarCategoriaBanco($id){
        $sql = "UPDATE tbl_categorias SET ativo = 1 WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:admincategoria.php');
    }

    function desativarCategoriaBanco($id){
        $sql = "UPDATE tbl_categorias SET ativo = 0 WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:admincategoria.php');
    }

    //Subcategorias
    function selectSubcategoriasBanco(){
        $sql = "SELECT * from tbl_subcategorias";
        
        return mysqli_query(conexaoDb(), $sql);
    }

    function selectSubcategoriaBanco($id){
        $sql = "SELECT * from tbl_subcategorias WHERE id=" . $id;
        
        return mysqli_query(conexaoDb(), $sql);
    }

    function selectSubcategoriasId($id){
        $sql = "SELECT * from tbl_subcategorias WHERE id_categoria=" . $id;
        
        return mysqli_query(conexaoDb(), $sql);
    }


    function insertSubcategoriaBanco($nome, $idCategoria){
        $sql = "INSERT INTO tbl_subcategorias
                    (nome, id_categoria, ativo)
                    VALUES
                    ('".$nome."', '".$idCategoria."', 1);";

        mysqli_query(conexaoDb(), $sql);
    }
    
    function updateSubcategoriaBanco($nome, $idCategoria, $id){
        $sql = "UPDATE tbl_subcategorias SET nome = '". $nome ."', id_categoria = '". $idCategoria ."' WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        
    }
    
    function deleteSubcategoriaBanco($id){
        $sql = "DELETE FROM tbl_subcategorias WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:adminsubcategoria.php');
    }

    function ativarSubcategoriaBanco($id){
        $sql = "UPDATE tbl_subcategorias SET ativo = 1 WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:adminsubcategoria.php');
    }

    function desativarSubcategoriaBanco($id){
        $sql = "UPDATE tbl_subcategorias SET ativo = 0 WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:adminsubcategoria.php');
    }
	
	function pegarItens($nivel){
		if($nivel == "Administrador"){
			echo('<a href="adminconteudo.php">
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
                </a>');
		}else if ($nivel == "Cataloguista"){
			echo('<a href="produtos.php">
                    <div class="caixaItem">
                        <img src="icones/produtos.png"><br>
                        Admin Produtos
                    </div>
                </a>');
		}else if ($nivel == "Operador"){
			echo('<a href="adminconteudo.php">
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
				<a href="usuarios.php">
                    <div class="caixaItem">
                        <img src="icones/admin.png"><br>
                        Admin Usuarios
                    </div>
                </a>');
		}
	}
?>