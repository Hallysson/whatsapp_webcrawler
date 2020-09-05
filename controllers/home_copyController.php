<?php
class home_copyController extends controllerGeral {

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

	public function obterEmoji($coddec){
		$dados = array();

		$e = new Emojis();

		$obterEmoji = $e->obterUmEmoji($coddec);

		$dados['obterEmoji'] = $obterEmoji;

		$this->loadTemplate('home', $dados);
	}

	public function obterEmojisCategorias($categoria){
		$dados = array();

		$e = new Emojis();

		$emojis_categoria = $e->obterEmojisFiltroCategorias($categoria);
		
		$dados['emogis_categoria'] = $emojis_categoria;

		$this->loadTemplate('home', $dados);
	}

}