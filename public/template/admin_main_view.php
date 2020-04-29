Админка
<?php 
if($_COOKIE['login']){?>
	Привет, <?=$_COOKIE['login'];?>! <a href="/logout"> Выйти </a>
<? } ?>