<?php

namespace app\core;

class Route
{
	public function start()
	{
		$controller = "Main";
		$action = "index";
		$address_string = $_SERVER['REQUEST_URI'];
		$routes = explode('/', $address_string);
		// print_r($routes);

		if ($routes[1]) {
			$controller = $routes[1];
			$param = "";


			if ($routes[2]) {
				$action = "second_index";
				$request_param = $routes[2];
				$param = 'request_param';
			}
		}

		$action = "action_".$action;
		$model_name = 'Model_' . $controller;
		$model_file = strtolower($model_name) . '.php';
		$model_path = $_SERVER['DOCUMENT_ROOT'] . "/application/models/" . $model_file;
		if (file_exists($model_path)) {
			include $_SERVER['DOCUMENT_ROOT'] . "/application/models/" . $model_file;
		}

		$controller_name = "Controller_".$controller;
		$controller_name = 'app\controllers\\' .  $controller_name;
		$controller_file = strtolower($controller). ".php";
		$controller_file = $_SERVER['DOCUMENT_ROOT'] . "/application/controllers/controller_" . $controller_file;
		if (file_exists($controller_file)) {
			require_once $controller_file;
			$controller_obj = new $controller_name;
			if (method_exists($controller_obj, $action)) {
				
				$controller_obj->$action($$param);
			}
		} else {
			$this->ErrorPage404();
		}
	}

	public function ErrorPage404()
	{
		$host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
		header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:' . $host . '404');
	}
}
