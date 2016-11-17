<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Roger_www/web11152/Public/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Roger_www/web11152/Public/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Roger_www/web11152/Public/admin/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Roger_www/web11152/Public/admin/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="/Roger_www/web11152/Public/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Roger_www/web11152/Public/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
	    <link rel="stylesheet" href="/Roger_www/web11152/Public/home/home.css">
	    <link rel="stylesheet" href="/Roger_www/web11152/Public/js/jquery.min.js">
		<link rel="stylesheet" type="text/css" href="/Roger_www/web11152/Public/admin/lib/icheck/icheck.css" />
	<title>登录</title>
</head>
<body style="background-color: #f2f2f2">
<div>     
	<div class="line1"></div>
	<div class="line2"></div>
	<a href="Home/index/index">
		<div class="login_logo">
			<img width="200px" src="/Roger_www/web11152/Public/home/image/biglogo.jpg" alt="">
		</div>
	</a>
	<!-- 继承的id -->
	<div class="login_main">  
		<form action="" method="post" class="form form-horizontal" id="form-member-add">
		
		<div class="row">
			<input type="text" style="height:44px;width:300px" class="input-text" value="" placeholder="&nbsp;手机:" id="mobile" name="mobile">
		</div>
		
		<div class="row">
			<input type="text" style="height:44px;width:300px" class="input-text" value="" placeholder="&nbsp;密码:" id="pass" name="pass">
		</div>

		<div class="row">
			<p class="fr"><a style="text-decoration: none;color:white" href="">忘记密码?</a></p>
		</div>
		
		<div class="row">
			<div >
				<input style="background-color: black;width:300px;height:44px;color:#f2f2f2;border: 2px solid white" class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;登&nbsp;&nbsp;录&nbsp;&nbsp;">
			</div>
		</div>

		<div class="row">
			<p style="color:white" class="fr">还没有账号,<a style="text-decoration: none;color:white;" href=""><b>立即注册</b></a></p>
		</div>
		</form>
	</div>
		<div class="login_gif">
			<img style="width:480px; border-radius: 50%;" src="/Roger_www/web11152/Public/home/image/login.gif" alt="">
		</div>
</div>
	
</body>
	<script type="text/javascript" src="/Roger_www/web11152/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script>  
	<script type="text/javascript" src="/Roger_www/web11152/Public/admin/lib/layer/2.1/layer.js"></script> 
	<script type="text/javascript" src="/Roger_www/web11152/Public/admin/lib/laypage/1.2/laypage.js"></script> 
	<script type="text/javascript" src="/Roger_www/web11152/Public/admin/lib/My97DatePicker/WdatePicker.js"></script> 
	<script type="text/javascript" src="/Roger_www/web11152/Public/admin/static/h-ui/js/H-ui.js"></script> 
	<script type="text/javascript" src="/Roger_www/web11152/Public/admin/static/h-ui.admin/js/H-ui.admin.js"></script> 
	<script type="text/javascript" src="/Roger_www/web11152/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
	<script type="text/javascript" src="/Roger_www/web11152/Public/admin/lib/layer/2.1/layer.js"></script> 
	<script type="text/javascript" src="/Roger_www/web11152/Public/admin/lib/icheck/jquery.icheck.min.js"></script> 
	<script type="text/javascript" src="/Roger_www/web11152/Public/admin/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script> 
	<script type="text/javascript" src="/Roger_www/web11152/Public/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
	<script type="text/javascript" src="/Roger_www/web11152/Public/admin/lib/jquery.validation/1.14.0/messages_zh.min.js"></script> 
	<script type="text/javascript" src="/Roger_www/web11152/Public/admin/static/h-ui/js/H-ui.js"></script> 
	<script type="text/javascript" src="/Roger_www/web11152/Public/admin/static/h-ui.admin/js/H-ui.admin.js"></script> 

	<script>
		$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
});
	</script>
</html>