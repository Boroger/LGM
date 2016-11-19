<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="http://lib.h-ui.net/html5.js"></script>
<script type="text/javascript" src="http://lib.h-ui.net/respond.min.js"></script>
<script type="text/javascript" src="http://lib.h-ui.net/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="http://static.h-ui.net/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="http://static.h-ui.net/h-ui/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="http://lib.h-ui.net/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="http://lib.h-ui.net/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="http://static.h-ui.net/h-ui/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="http://static.h-ui.net/h-ui/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>权限添加 - 管理员管理</title>
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-admin-add" method="post" action="<?php echo U('Admin/permDoAdd');?>">
	<div class="row cl">
		<label class="form-label col-xs-3 col-sm-3">&nbsp&nbsp&nbsp&nbsp权限名称：</label>
		<div class="formControls col-xs-7 col-sm-6">
			<input type="text" class="input-text" value="" placeholder="" id="permName" name="perm">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-3 col-sm-4">&nbsp&nbsp&nbsp&nbsp权限说明：</label>
		<div class="formControls col-xs-7 col-sm-6">
			<textarea name="description" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true" onKeyUp="textarealength(this,100)"></textarea>
			<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
		</div>
	</div>
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
		</div>
	</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去--> 
<script type="text/javascript" src="http://lib.h-ui.net/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="http://lib.h-ui.net/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="http://lib.h-ui.net/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="http://lib.h-ui.net/jquery.validation/1.14.0/jquery.validate.min.js"></script> 
<script type="text/javascript" src="http://lib.h-ui.net/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="http://lib.h-ui.net/jquery.validation/1.14.0/messages_zh.min.js"></script> 
<script type="text/javascript" src="/Roger_www/web11152/Public/admin/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/Roger_www/web11152/Public/admin/static/h-ui.admin/js/H-ui.admin.js"></script> 
<!--/_footer /作为公共模版分离出去--> 

<!--请在下方写此页面业务相关的脚本--> 
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-admin-add").validate({
		rules:{
			perm:{
				required:true,
				minlength:4,
				maxlength:16
			},
			description:{
				required:true,
			},
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			form.submit();
		}
	});
});
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>