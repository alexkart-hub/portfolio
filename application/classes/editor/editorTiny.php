<?php
namespace app\classes\editor;
class EditorTiny extends A_Editor
{
	public function __construct()
	{
		$this->editorPath = '/tiny/editor.php';
		$this->editorScriptPath = '/tiny/config/editor_config.js';
	}
}