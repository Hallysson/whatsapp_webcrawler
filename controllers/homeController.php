<?php
class homeController extends controllerGeral {

	public function index() {
		$dados = array();
                                                                                                                                                                                                                                              
		$e = new Emojis();
 
		$total_emojis = $e->obterTotalEmojis();
		$emojis = $e->obterTodosEmojis();
		$total_categorias = $e->ObterTotalCategorias();
		$categorias = $e->obterTodasCategorias();

		$dados['total_emojis'] = $total_emojis;
		$dados['emojis'] = $emojis;
		$dados['total_categorias'] = $total_categorias;
		$dados['categorias'] = $categorias;

		$this->loadTemplate('home', $dados);
	}

	public function obterEmoji($codhex){
		$dados = array();

		$e = new Emojis();

		$obterEmoji = $e->obterUmEmoji($codhex);

		$dados['obterEmoji'] = $obterEmoji;

		$this->loadTemplate('home', $dados);
	}

	public function obterEmojisCategoria($categoria){

		$e = new Emojis();
		
		$emojis_categorias = $e->obterEmojisFiltroCategoria($categoria);

		return $emojis_categorias;
	}

	public function obterEmojisSubcategoria($categoria, $subcategoria){

		$e = new Emojis();
		
		$emojis_categorias_subcategoria = $e->obterEmojisFiltroSubcategoria($categoria, $subcategoria);

		return $emojis_categorias_subcategoria;
	}

}