<?php
namespace app\classes\pages;
class Page extends A_Page
{
	public function SetTitle($title)
	{
		$this->title = $title;
	}

	public function SetAlias($alias)
	{
		$this->alias = $alias;
	}

	public function SetElement($element, $value)
	{
		$element->value = $value;
	}
}