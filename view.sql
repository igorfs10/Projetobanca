CREATE VIEW selectProdutosBanca AS
	SELECT produtos.id,
		produtos.nome,
		produtos.sobre,
		produtos.preco,
		produtos.desconto,
		produtos.id_subcategoria,
		produtos.ativo,
		produtos.imagem,
		subcategorias.nome AS sub,
		categorias.nome AS cat
	FROM tbl_produtos AS produtos,
		tbl_categorias AS categorias,
		tbl_subcategorias AS subcategorias
	WHERE categorias.id = subcategorias.id_categoria
	AND produtos.id_subcategoria = subcategorias.id
	AND produtos.ativo = 1
	AND categorias.ativo = 1
	AND subcategorias.ativo = 1
;