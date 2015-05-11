<?php
namespace Framework;

class Application {
	function __construct() {
		$this->loadFramework();
		$this->loadControllers();
		$this->loadRoutes();
	}
	
	function loadFramework() {
		$files = scandir('lib/framework');
		foreach($files as $file) {
			if ($file != '.' and $file != '..') {
				include_once 'lib/framework/' . $file;
			}
		}
	}
	
	function loadControllers() {
		if (is_dir('app/controllers')) {
			$files = scandir('app/controllers');
			foreach($files as $file) {
				if ($file != '.' and $file != '..') {
					include 'app/controllers/' . $file;
				}
			}
		}
	}
	
	function loadRoutes() {
		if (file_exists('config/routes.php')) {
			include 'config/routes.php';
		}
	}
	
	function run() {
		
	}
}