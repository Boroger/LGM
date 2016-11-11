<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1><?php echo ($title); ?></h1>
	<h4>系统保留量</h4>
	<p><?php echo ($_GET['id']); ?></p>
	<p><?php echo var_dump($_GET);?></p>

	<h4>常量</h4>
	<p>PHP版本:<?php echo (PHP_VERSION); ?></p>
	<p>当前模块:<?php echo (MODULE_NAME); ?></p>
	<p>当前控制器:<?php echo (CONTROLLER_NAME); ?></p>
	<p>当前操作:<?php echo (ACTION_NAME); ?></p>

	<h4>模板替换变量</h4>
	<p>/tp3/web/Public</p>
	<p>/tp3/web/index.php</p>
	<p>/tp3/web</p>
	<p>/tp3/web/index.php/Home</p>
	<p>/tp3/web/index.php/Home/User</p>
	<p>/tp3/web/index.php/Home/User/index</p>
	<P>/tp3/web/Home/User/index</p>
	<p>/tp3/web/Uploads</p>
</body>
</html>