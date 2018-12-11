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
	
	function selectNoticias(){
        $sql = "SELECT * from tbl_noticias";
        
        return mysqli_query(conexaoDb(), $sql);
    }
	
	function selectCelebridades(){
        $sql = "SELECT * from tbl_celebridades";
        
        return mysqli_query(conexaoDb(), $sql);
    }
	
	function selectSobres(){
        $sql = "SELECT * from tbl_sobre";
        
        return mysqli_query(conexaoDb(), $sql);
    }
    
    function selectUsuarios(){
        $sql = "SELECT * from tbl_usuarios";
        
        return mysqli_query(conexaoDb(), $sql);
    }
	
    function selectCategorias(){
        $sql = "SELECT * FROM tbl_categorias WHERE ativo = 1";
		
		return mysqli_query(conexaoDb(), $sql);
    }

    function selectSubcategorias($categoria){
        $sql = "SELECT * FROM tbl_subcategorias WHERE ativo = 1 AND id_categoria = " . $categoria;
		
		return mysqli_query(conexaoDb(), $sql);
    }
    
	function selectProdutos(){
		$sql = "SELECT * FROM selectProdutosBanca ORDER BY RAND()";
		
		return mysqli_query(conexaoDb(), $sql);
	}
	
	function selectPromocoes(){
		$sql = "SELECT * FROM selectProdutosBanca WHERE desconto > 0 ORDER BY RAND()" ;
		
		return mysqli_query(conexaoDb(), $sql);
	}

    function selectProdutosCategoria($categoria){
        $sql = "SELECT * FROM selectProdutosBanca WHERE cat = '".$categoria."'";
        		
		return mysqli_query(conexaoDb(), $sql);
    }

    function selectPromocoesCategoria($categoria){
        $sql = "SELECT * FROM selectProdutosBanca WHERE desconto > 0 AND cat = '".$categoria."'";
        		
		return mysqli_query(conexaoDb(), $sql);
    }

    function selectProdutosSubcategoria($subCategoria){
        $sql = "SELECT * FROM selectProdutosBanca WHERE sub = '".$subCategoria."'";
        		
		return mysqli_query(conexaoDb(), $sql);
    }

    function selectPromocoesSubcategoria($subCategoria){
        $sql = "SELECT * FROM selectProdutosBanca WHERE desconto > 0 AND sub = '".$subCategoria."'";
        		
		return mysqli_query(conexaoDb(), $sql);
    }
?>