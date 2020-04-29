<?php 
namespace app\controllers;

use app\core\Controller;
use app\core\Model;
use app\core\View;

class Controller_Presentations extends Controller
{
	public function __construct()
	{
		$this->model = new Model;
		$this->view = new View;
	}

	public function action_index()
	{
		$data['title'] = "Презентации";
		$this->view->generate("presentations_view.php", "template_view.php",$data);
	}
}
