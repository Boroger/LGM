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

<link rel="stylesheet" href="/Roger_www/web11152/Public/dist/css/bootstrap.min.css">

<script src="/Roger_www/web11152/Public/dist/jquery-1.11.3.min.js"></script>
<script src="/Roger_www/web11152/Public/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="/Roger_www/web11152/Public/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Roger_www/web11152/Public/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Roger_www/web11152/Public/admin/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Roger_www/web11152/Public/admin/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="/Roger_www/web11152/Public/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Roger_www/web11152/Public/admin/static/h-ui.admin/css/style.css" />
<!-- <script type="text/javascript" src="/Roger_www/web11152/Public/admin/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/Roger_www/web11152/Public/admin/static/h-ui.admin/js/H-ui.admin.js"></script>  -->
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title></title>
<meta name="keywords" content="H-ui.admin v2.3,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v2.3，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>

<body  unload="FnRefresh()">
<article class="page-container">
	<form class="form form-horizontal" id="deg" action="<?php echo U('Group/update');?>" enctype="multipart/form-data" method="post" id="form-article-add">

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>小组名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="hidden" value="<?php echo ($list["id"]); ?>" name="id">
				<input type="text" class="input-text" value="<?php echo ($list["name"]); ?>" name="name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">小组logo：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<p>
				    <input id="lefile1" name="logo" type="file" style="display:none">
				    <input type="hidden" value="<?php echo ($list["logo"]); ?>" name="logo">
					<div class="input-append">
					   <img src="/Roger_www/web11152/<?php echo ($list["logo"]); ?>" width="80" height="25"/>
					   <input id="photoCover1" class="input-large" type="text">
					   <a class="btn btn-success" onclick="$('input[id=lefile1]').click();" style="background:#">Browse</a>
					</div>
					  
					<script type="text/javascript">
					$('input[id=lefile1]').change(function() {
					   $('#photoCover1').val($(this).val());
					});
					</script>
				</p>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">背景图片：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<P>
					<input id="lefile2" name="bgpic" type="file" style="display:none">
				    <input type="hidden" value="<?php echo ($list["bgpic"]); ?>" name="bgpic">
					<div class="input-append">
					   <img src="/Roger_www/web11152/<?php echo ($list["bgpic"]); ?>" width="80" height="25"/>
                      
					   <input id="photoCover2" class="input-large" type="text">
					   <a class="btn btn-success" onclick="$('input[id=lefile2]').click();">Browse</a>
					</div>
					  
					<script type="text/javascript">
					$('input[id=lefile2]').change(function() {
					   $('#photoCover2').val($(this).val());
					});
					</script>
				</p>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">简介：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="description" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true" onKeyUp="textarealength(this,100)"><?php echo ($list["description"]); ?></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
		    </div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input class="btn btn-warning radius" type="reset" value="&nbsp;&nbsp;重置&nbsp;&nbsp;">
			</div>
	    </div>
	</form>
</article>
<script type="text/javascript" src="http://lib.h-ui.net/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="http://lib.h-ui.net/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="http://lib.h-ui.net/jquery.validation/1.14.0/jquery.validate.min.js"></script> 
<script type="text/javascript" src="http://lib.h-ui.net/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="http://lib.h-ui.net/jquery.validation/1.14.0/messages_zh.min.js"></script> 

<script type="text/javascript">
var index = parent.layer.getFrameIndex(window.name); //获取当前窗体索引
cancel: function(index){ 
  if(confirm('确定要关闭么')){
    layer.close(index)
  }
  return false; 
}   
	$("#form-article-add").validate({
		rules:{
			name:{
				required:true,
				minlength:4,
				maxlength:16
			},
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			form.submit();
			// parent.layer.close(index);
		}
	});
// $("#deg").ajaxSubmit(function(message) { 
// 	parent.layer.close(index);
// });


// $('#deg').on('click', function(){
// layer.closeAll('iframe');//关闭弹窗
// });
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>