<?php

namespace app\controllers;

use app\classes\db\DbMysqli;
use app\core\Controller;
use app\core\View;
use app\core\Model;

class Controller_Main extends Controller
{
	public function __construct()
	{
		$this->model = new Model;
		$this->view = new View;
	}

	function action_index()
	{
		$db = DbMysqli::GetInstance();
		$data = $this->model->getData();
		// if(!empty($_POST)){
		// 	header('Location: '.translit('Корм '.$category['name']));
		// 	die();
		// } 
			 $layout = 'main';
		$data['title'] = "Главная страница";	
		$this->view->generate($layout.'_view.php', 'template_view.php', $data);
	}
	
}