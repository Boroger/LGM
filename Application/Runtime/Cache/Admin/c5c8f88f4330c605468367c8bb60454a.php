<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<!-- <meta charset="UTF-8"> -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo ($title); ?></title>
	<link rel="stylesheet" href="/tp3/web/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/tp3/web/Public/my.css">
</head>
<body>
  <div class="container">
		<h1><?php echo ($title); ?></h1>

		<div class="center-block mt20">
			<a href="<?php echo U('User/index');?>" class="btn btn-primary">首页</a>
			<a href="<?php echo U('add');?>" class="btn btn-success">添加</a>
			
		</div>
	   
		
	<hr>
	<form action="<?php echo U('update');?>" method="post" class="h4">

		<table>
			<input type="hidden" name="id" value="<?php echo ($v["id"]); ?>">
			<tr>
				<td>用户名：</td>
				<td><input type="text" name="name" value="<?php echo ($v["name"]); ?>"></td>
			</tr>
			<tr><td height="10"></td></tr>
			<tr>
				<td>pwd：</td>
				<td><input type="text" name="pwd" value="<?php echo ($v["pwd"]); ?>"></td>
			</tr>
			<tr><td height="10"></td></tr>
			<tr>
				<td>地址：</td>
				<td><input type="text" name="place" value="<?php echo ($v["place"]); ?>"></td>
			</tr>
			<tr><td height="10"></td></tr>
			<tr>
				<td colspan="2"><input class="btn btn-primary" type="submit" value="提交"></td>
			</tr>
		</table>
	
	</form>

	</div><!--end container-->
	<script src="/tp3/web/Public/js/jquery.min.js"></script>
    <script src="/tp3/web/Public/js/bootstrap.min.js"></script>
    
</body>
<script type="text/javascript">
	var a = document.getElementsByTagName('a');
	for(i=0;i<a.length;i++)
	{
		a[i].onclick = function ()
		{
			var con = confirm('你确定去'+this.innerHTML);
			if(!con){
             return false;
			}
		}
	}

</script>
</html>