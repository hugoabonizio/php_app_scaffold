<?php
class WelcomeController extends ApplicationController {
	function index() {
		return "Hello, world!";
	}
	
	function test() {
		$this->hello = 'world';
	}
}