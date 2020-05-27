<form method="post" action="">
	<textarea class="tinyeditor" style="border:1px solid #ccc; width: 80%; height: 100px; margin-left:10%;" name="text<?= $formID;?>">
		<?= $data["text".$formID];?>
	</textarea>
	<button type="submit">Отправить</button>
</form>

