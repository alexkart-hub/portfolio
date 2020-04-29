Презентации

	<iframe src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/doc/gimnastika.pdf" frameborder="0" width="720px" height="420px"></iframe>


<br>
<br>
<select name="files" id="files">

	<?php
	$path = $_SERVER['DOCUMENT_ROOT'] . '/public/doc/';
	if ($handle = opendir($path)) {
		while (false !== ($entry = readdir($handle))) {
			$expansion = explode(".",$entry)[1];
			if($expansion == "pdf"){
				chmod($path.$entry, 0755);
			?>
			<option value="<?= $entry; ?>"><?= $entry; ?></option>
	<?php 
			}	
		}
		closedir($handle);
	}
	?>
</select>