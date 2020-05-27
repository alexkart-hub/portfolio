<?php 
namespace app\classes\editor;
class A_Editor
{
	public $editorPath;
	

	public function ShowEditor($formID,$data)
	{
		
		include $_SERVER['DOCUMENT_ROOT'].'/components'.$this->editorPath;
	}
}