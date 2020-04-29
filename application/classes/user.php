<?php 
namespace app\classes;

use app\classes\db\Db;

class User
{
	static public function SessionStart($user)
	{
		setcookie('user_id', $user['user_id'], time() + (60 * 60 * 24 * 30));
		setcookie('login', $user['login'], time() + (60 * 60 * 24 * 30));
		setcookie('admin', $user['password'], time() + (60 * 60 * 24 * 30));
	}
	static public function SessionStop()
	{
		unset($_COOKIE['user_id']);
		unset($_COOKIE['login']);
		unset($_COOKIE['admin']);
		setcookie('user_id', '', -1, '/');
		setcookie('login', '', -1, '/');
		setcookie('admin', '', -1, '/');
	}
	static public function GetUser($login, Db $db)
	{
		$query = "SELECT * FROM users WHERE login = '$login'";
		$result = $db->ExecuteQuery($query);
		if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();
			foreach ($row as $key => $vol) {
				$user_data[$key] = $vol;
			}
			$result->free();
			return $user_data;
		} else {
			return false;
		}
	}
	static public function IsUserExist($login,Db $db)
	{
		$login = $db->Connect()->real_escape_string($login);
		$query = "SELECT login FROM users WHERE login = '$login'";
		$result = $db->ExecuteQuery($query);
		if ($result->num_rows == 1) {
			return true;
		} else {
			return false;
		}
	}
	static public function CheckPassword($login, $password,Db $db)
	{
		$login = $db->Connect()->real_escape_string($login);
		$query = "SELECT login, password FROM users WHERE login = '$login'";
		$result = $db->ExecuteQuery($query);
		if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();
			if (password_verify($password, password_hash($row['password'],PASSWORD_DEFAULT))) {
			// if (password_verify($password, $row['password'])) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
}