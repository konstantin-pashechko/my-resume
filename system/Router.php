<?php
class Router
{
	private $routes;

	function __construct()
	{
		$url =  trim($_SERVER['REQUEST_URI'],'/');
		$this->routes = explode('/',$url);
	}
	public function run(){
		$controllerName = ucfirst(array_shift($this->routes)) ?: 'Index';

		$actionName = array_shift($this->routes) ?: 'index';

		$params = $this->routes;

		if(class_exists($controllerName) && method_exists($controllerName, $actionName)){
			 (new $controllerName)->$actionName($params);
		} else {
			require_once(ROOT.'/template/404.html');
		}
	}
}