<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE11">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tiny.cloud/1/hwmf6iiynv2w4nam41o9zul5zg53ajnf8t8a1c66k68fx3xx/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<title><?= $title; ?></title>
	<script>
		tinymce.init({
			selector: '#mytextarea'
		});
	</script>
</head>

<body>
	<ul></ul>
	<li><a href="/">Главная</a></li>
	<li><a href="/presentations">Презентации</a></li>
	<li><a href="/admin">Админка</a></li>
	</ul>
	Header
	<br>
	<br>
	<hr>