<?php
namespace Controllers;

use \Core\ControllerGeral;
use \Models\Emojis;

class HomeController extends ControllerGeral {

	public function index() {
		
		// Carregar dados de emojis do Banco de Dados
		$dados = array();
                                                                                                                                                                                                                                              
		$e = new Emojis();
 
		$total_emojis = $e->obterTotalEmojis();
		$emojis = $e->obterTodosEmojis();
		$total_categorias = $e->ObterTotalCategorias();
		$categorias = $e->obterEmojisCategorias();

		$dados['total_emojis'] = $total_emojis;
		$dados['emojis'] = $emojis;
		$dados['total_categorias'] = $total_categorias;
		$dados['categorias'] = $categorias;

		// Carregar dados dos emojis na página
		$this->loadTemplate('Home', $dados);
	}

	public function obterEmoji($codhex){
		$dados = array();

		$e = new Emojis();

		$obterEmoji = $e->obterUmEmoji($codhex);

		$dados['obterEmoji'] = $obterEmoji;

		$this->loadTemplate('Home', $dados);
	}

	public function obterEmojisCategoria($categoria){

		$e = new Emojis();
		
		$emojis_categorias = $e->obterEmojisFiltroCategoria($categoria);

		return $emojis_categorias;
	}

	public function obterSubcategoria($categoria){
		
		$e = new Emojis();
		
		$subcategorias = $e->obterFiltroSubcategorias($categoria);

		return $subcategorias;
	}

	public function obterEmojisSubcategoria($categoria, $subcategoria){

		$e = new Emojis();
		
		$emojis_categorias_subcategoria = $e->obterEmojisFiltroSubcategoria($categoria, $subcategoria);

		return $emojis_categorias_subcategoria;
	}

}