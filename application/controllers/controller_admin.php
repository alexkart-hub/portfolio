<?php 

namespace app\controllers;

use app\core\Controller;
use app\core\Model;
use app\core\View;

class Controller_Admin extends Controller
{
	public function __construct()
	{
		$this->model = new Model;
		$this->view = new View;
	}

	public function action_index()
	{
		$data['title'] = "Админка - главная";
		$this->view->generate("admin_main_view.php","template_view.php",$data);
	}
}