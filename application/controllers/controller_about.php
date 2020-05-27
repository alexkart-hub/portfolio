<?php
namespace app\controllers;

use app\core\Controller;
use app\core\View;

class Controller_About extends Controller
{
	public function action_index()
	{
		$data["title"] = "О себе";
		$this->view->generate("about_view.php", "template_view.php", $data);
	}
}