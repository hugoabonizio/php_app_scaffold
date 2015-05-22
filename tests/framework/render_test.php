<?php
class TestingController {
	function index() {
		return "OK!";
	}
}
\Framework\Router::draw(array(
	['GET', '/test1', 'testing#index']
));

class RenderTest extends \PHPUnit_Framework_TestCase {
	function testRenderText() {
		$app = new \Framework\Application;
		ob_start();
		$app->route('GET', '/test1');
		$rendered = ob_get_clean();
		$this->assertEquals('OK!', $rendered);
	}
}