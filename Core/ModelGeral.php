<?php
namespace Core;

class ModelGeral {

	protected $db;

	public function __construct() {
		global $db;
		$this->db = $db;
	}

}