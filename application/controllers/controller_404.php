<?php 

namespace app\controllers;

use app\classes\db\DbMysqli;
use app\classes\Product;
use app\core\Controller;

class Controller_404 extends Controller
{
	function action_index()
	{
		$data['title'] = "404";
		$this->view->generate('404_view.php', 'template_view.php',$data);
	}
}