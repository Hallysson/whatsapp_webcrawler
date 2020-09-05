<?php
class Emojis extends modelGeral {

	public function obterTotalEmojis() {
		$sql = $this->db->query("SELECT COUNT(*) as c FROM emojis");
		$row = $sql->fetch();

		return $row['c'];
	}

	public function obterUmEmoji($coddec) {
		$sql = $this->db->prepare("SELECT codhex FROM emojis WHERE coddec = :coddec");
		$sql->bindValue(":codhex", $coddec);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return $sql->fetchAll();
		}

	}

	public function obterTodosEmojis() {
		$sql = $this->db->prepare("SELECT coddec FROM emojis WHERE descricao = 'Emoji'");
		$sql->execute();

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}
	public function obterEmojisFiltroCategoria($categoria) {
		$sql = $this->db->prepare("SELECT coddec FROM emojis WHERE descricao = 'Emoji' AND categoria LIKE :categoria");
		$sql->bindValue(":categoria", $categoria);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return $sql->fetchAll();
		}

	}

	public function ObterTotalCategorias() {
		$sql = $this->db->query("SELECT COUNT(distCategorias.categoria) as c FROM(SELECT DISTINCT categoria FROM public.emojis WHERE categoria NOT LIKE '') as distCategorias");
		$row = $sql->fetch();

		return $row['c'];
	}

	public function obterTodasCategorias() {
		$sql = $this->db->prepare("SELECT DISTINCT categoria FROM public.emojis WHERE descricao = 'Emoji' AND categoria NOT LIKE '' ORDER BY categoria ASC");
		$sql->execute();

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}
}
?>