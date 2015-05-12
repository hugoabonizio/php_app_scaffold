<?php
namespace Framework;
require_once 'router.php';

class Application {
	function run() {
		$route = Router::route($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
		if (is_numeric($route) and $route == 404) {
			echo 404;
		} else {
			echo $route;
		}
	}
}