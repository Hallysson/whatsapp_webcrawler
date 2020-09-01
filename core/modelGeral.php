<?php
class modelGeral {

	protected $db;

	public function __construct() {
		global $db;
		$this->db = $db;
	}

}