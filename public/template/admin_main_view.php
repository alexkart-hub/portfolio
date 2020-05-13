Админка
<?php

use app\classes\editor\EditorTiny;

if ($_COOKIE['login']) { ?>
	Привет, <?= $_COOKIE['login']; ?>! <a href="/logout"> Выйти </a>
<? } ?>

<? $editor = new EditorTiny;
$editor->ShowEditor();
?>
