<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/web/index.php/Admin/Uploads/upload" enctype="multipart/form-data" method="post" >
	<input type="text" name="name" />
	<input type="file" name="photo1" />
	<input type="submit" value="提交" >
	</form>
	
</body>
</html>