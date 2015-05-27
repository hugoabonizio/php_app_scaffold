<?php
namespace Framework;

class ControllerBase {
	public $_layout = 'application';
	
	function layout($layout) {
		$this->_layout = $layout;
	}
	
	// callbacks
	function before_action() {
	}
	function after_action() {
	}
	
	function redirect($to) {
		header('Location: ' . $to);
	}
}