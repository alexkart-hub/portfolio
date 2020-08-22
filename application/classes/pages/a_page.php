<?php
namespace app\classes\pages;
abstract class A_Page
{
	private $elements;
	private $title;
	private $alias;

	public function __construct($title, $alias)
	{
		$this->title = $title;
		$this->alias = $alias;
	}
}