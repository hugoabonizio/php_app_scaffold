<?php
namespace Framework;

class Router {
	static private $_routes;
	
	static function draw($routes) {
		foreach ($routes as $method=>$to) {
			if (is_string($to)) {
				// controller#action pattern
			} elseif (is_callable($to)) {
				// bind direct a lambda function
			}
			self::$_routes[strtoupper($method)] = $to;
		}
	}
	
	function get($params) {
		var_dump($params);
	}
}