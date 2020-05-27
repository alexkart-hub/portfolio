Админка
<?php

use app\classes\editor\EditorTiny;

if ($_COOKIE['login']) { ?>
	Привет, <?= $_COOKIE['login']; ?>! <a href="/logout"> Выйти </a>
<? } ?>
<? debug($data["text1"]);?>
<? $editor = new EditorTiny;
$editor->ShowEditor(1,$data);
?>
<div class="editor">
	<? $editor->ShowEditor(2, $data); ?>
</div>

