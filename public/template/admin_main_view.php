Админка
<?php
use app\classes\editor\EditorTiny;
if ($_COOKIE['login']) { ?>
	Привет, <?= $_COOKIE['login']; ?>! <a href="/logout"> Выйти </a>
<? } ?>
<? debug($data["text1"]);?>
<? $editor = new app\classes\editor\EditorTiny;
$editor->ShowEditor(1,$data);
?>