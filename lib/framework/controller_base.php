<?php
namespace Framework;

class ControllerBase {
	public $_layout = 'application';
	
	function layout($layout) {
		$this->_layout = $layout;
	}
}