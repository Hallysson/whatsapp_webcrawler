<?php
namespace Controllers;

use \Core\ControllerGeral;

class NotfoundController extends ControllerGeral {

	public function index() {
		$this->loadView('404', array());
	}

}