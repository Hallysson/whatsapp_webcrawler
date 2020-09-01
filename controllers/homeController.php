<?php
class homeController extends controllerGeral {

	public function index() {
		$dados = array();

		$e = new Emojis();

		$total_emojis = $e->getTotalEmojis();
		//$obterEmoji = $e->obterUmEmoji($coddec);
		$emojis = $e->obterTodosEmojis();

		$dados['total_emojis'] = $total_emojis;
		//$dados['obterEmoji'] = $obterEmoji;
		$dados['emojis'] = $emojis;

		$this->loadTemplate('home', $dados);
	}

}