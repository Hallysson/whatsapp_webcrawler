<?php
class Emojis extends modelGeral {

	public function obterTotalEmojis() {
		$sql = $this->db->query("SELECT COUNT(*) as c FROM emojis WHERE tipo NOT LIKE 'Tom de Pele' AND qualificacao LIKE 'completamente qualificado'");
		$row = $sql->fetch();

		return $row['c'];
	}

	public function obterUmEmoji($codhex) {
		$sql = $this->db->prepare("SELECT codhex FROM emojis WHERE tipo NOT LIKE 'Tom de Pele' AND qualificacao LIKE 'completamente qualificado' AND codhex = :codhex");
		$sql->bindValue(":codhex", $codhex);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return $sql->fetchAll();
		}
	}

	public function obterTodosEmojis() {
		$sql = $this->db->prepare("SELECT codhex FROM emojis WHERE tipo NOT LIKE 'Tom de Pele' AND qualificacao LIKE 'completamente qualificado'");
		$sql->execute();

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}
	
	public function obterEmojisFiltroCategoria($categoria) {
		$sql = $this->db->prepare("SELECT codhex subcategoria, descricao FROM emojis WHERE tipo LIKE 'Emoji' AND qualificacao LIKE 'completamente qualificado' AND categoria LIKE :categoria");
		$sql->bindValue(":categoria", $categoria);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return $sql->fetchAll();
		}
	}

	public function obterEmojisFiltroSubcategoria($categoria, $subcategoria) {
		$sql = $this->db->prepare("SELECT codhex, subcategoria, descricao FROM emojis WHERE tipo LIKE 'Emoji' AND qualificacao LIKE 'completamente qualificado' AND categoria LIKE :categoria AND subcategoria LIKE :subcategoria");
		$sql->bindValue(":categoria", $categoria);
		$sql->bindValue(":subcategoria", $subcategoria);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return $sql->fetchAll();
		}

	}

	public function ObterTotalCategorias() {
		$sql = $this->db->query("SELECT COUNT(distCategorias.categoria) as c FROM(SELECT DISTINCT categoria FROM public.emojis WHERE tipo NOT LIKE 'Tom de Pele' AND qualificacao LIKE 'completamente qualificado') as distCategorias");
		$row = $sql->fetch();

		return $row['c'];
	}

	public function obterTodasCategorias() {
		$sql = $this->db->prepare("SELECT DISTINCT categoria FROM public.emojis WHERE tipo NOT LIKE 'Tom de Pele' AND qualificacao LIKE 'completamente qualificado' ORDER BY categoria ASC");
		$sql->execute();

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function ObterTotalSubcategorias() {
		$sql = $this->db->query("SELECT COUNT(distCategorias.categoria) as c FROM(SELECT DISTINCT subcategoria FROM public.emojis WHERE tipo NOT LIKE 'Tom de Pele') as distSubcategorias");
		$row = $sql->fetch();

		return $row['c'];
	}

	public function obterTodasSubcategorias() {
		$sql = $this->db->prepare("SELECT DISTINCT subcategoria FROM public.emojis WHERE tipo NOT LIKE 'Tom de Pele' ORDER BY subcategoria ASC");
		$sql->execute();

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}
}
?>