<?php
class notfoundController extends controllerGeral {

	public function index() {
		$this->loadView('404', array());
	}

}