<?php
namespace Framework;
require_once 'router.php';

class Application {
	function run() {
		$route = Router::route($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
		if (is_numeric($route) and $route == 404) {
			echo 404;
		} else {
			// if it's in format "controller#action"
			if (is_string($route)) {
				$parts = explode('#', $route);
				$controller = $parts[0] . "Controller";
				$action = $parts[1];
				// create a new controller instance
				$instance = new $controller();
				echo $instance->$action();
			}
		}
	}
}