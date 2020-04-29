<?php

namespace app\controllers;

use app\classes\db\DbMysqli;
use app\classes\User;
use app\core\Controller;

class Controller_Auth extends Controller
{
	function action_index()
	{
		if (isset($_POST['login']) && isset($_POST['password'])) {

			$login = $_POST['login'];
			$password = $_POST['password'];
			$db = DbMysqli::GetInstance();
			if (User::IsUserExist($login,$db) && User::CheckPassword($login, $password,$db)) {
			 	User::SessionStart(User::GetUser($login,$db));
				header('Location: admin');
			}
		}
		if (empty($_COOKIE['admin'])) {
			$this->view->generate('auth_view.php', 'template_view.php');
		} else {
			header('Location: admin');
		}
	}
}