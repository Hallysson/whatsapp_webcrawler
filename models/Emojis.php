<?php
class Emojis extends modelGeral {

	public function getTotalEmojis() {
		$sql = $this->db->query("SELECT COUNT(*) as c FROM emojis");
		$row = $sql->fetch();

		return $row['c'];
	}

	public function obterUmEmoji($coddec) {
		$sql = $this->db->prepare("SELECT id, codhex FROM emojis WHERE coddec = :coddec");
		$sql->bindValue(":codhex", $coddec);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return $sql->fetchAll();
		}

	}

	public function obterTodosEmojis() {
		$sql = $this->db->prepare("SELECT id, coddec, codhex FROM emojis WHERE descricao = 'Emoji'");
		$sql->execute();

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}
}
?>