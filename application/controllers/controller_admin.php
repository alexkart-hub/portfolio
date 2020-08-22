<?php

namespace app\controllers;

use app\classes\db\Db;
use app\classes\db\DbMysqli;
use app\classes\User;
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
		$db = DbMysqli::GetInstance();
		$user = User::GetUser($_COOKIE['login'],$db);
		if (!empty($_COOKIE['admin']) && ($_COOKIE['admin'] == $user['password'])) {
			$data = $this->model->getData();
			$data['title'] = "Админка - главная";
			if (!empty($_POST)) {
				$data += $_POST;
			}
			$this->view->generate("admin_main_view.php", "template_view.php", $data);
		} else {
			header("Location: auth");
		}
	}
}