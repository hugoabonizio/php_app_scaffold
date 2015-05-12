<?php
\Framework\Router::draw(array(
	['GET', '/', 'welcome#index'],
	['GET', '/test', 'welcome#test'],
	['POST', '/test', 'welcome#post']
));