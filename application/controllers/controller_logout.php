<?php 
namespace app\controllers;

use app\classes\User;
use app\core\Controller;

class Controller_Logout extends Controller
{
	public function action_index()
	{
		User::SessionStop();
		header("Location: auth");
	}
}