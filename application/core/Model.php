<?php 

namespace app\core;

use app\classes\db\DbMysqli;

class Model
{
	public $db;
	public $data;

	public function __construct()
	{
		$this->db = DbMysqli::GetInstance();
		$this->data['db'] = $this->db;
	}
	
	public function getData()
	{
		$data = $this->data;
        return $data;
	}
}
