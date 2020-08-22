<?php
namespace app\classes\editor;
class A_Editor
{
	public $editorPath;
	public $editorScriptPath;

	public function ShowEditor($formID,$data)
	{

		echo "<script>";
		include $_SERVER['DOCUMENT_ROOT'].'/components'.$this->editorScriptPath;
		echo "</script>";

		include $_SERVER['DOCUMENT_ROOT'].'/components'.$this->editorPath;
	}
}