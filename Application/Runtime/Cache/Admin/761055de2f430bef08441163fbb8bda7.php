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

<link href="/LGM1116/Public/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/LGM1116/Public/umeditor/third-party/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/LGM1116/Public/umeditor/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/LGM1116/Public/umeditor/umeditor.min.js"></script>
<script type="text/javascript" src="/LGM1116/Public/umeditor/lang/zh-cn/zh-cn.js"></script>
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>新增文章 - 资讯管理 - H-ui.admin v2.3</title>
<meta name="keywords" content="H-ui.admin v2.3,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v2.3，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" action="<?php echo U('Article/update');?>" enctype="multipart/form-data" method="post" id="form-article-add">
		<input type="hidden" value="<?php echo ($v["id"]); ?>" name="id">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章标题：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($v['title']); ?>" name="title">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">简介：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($v['description']); ?>" name="description">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">背景图片：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<P><img src="/LGM1116/<?php echo ($v["bgpic"]); ?>" width="100"/>
					<input type="hidden" name="bgpic" value="<?php echo ($v["bgpic"]); ?>">
				    <input id="lefile" name="bgpic" type="file" style="display:none">
					<div class="input-append">
					   <input id="photoCover" class="input-large" type="text">
					   <a class="btn btn-success" onclick="$('input[id=lefile]').click();" style="background:#">Browse</a>
					</div>
					  
					<script type="text/javascript">
					$('input[id=lefile]').change(function() {
					   $('#photoCover').val($(this).val());
					});
					</script>
				</p>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">文章内容：</label>
			<div class="formControls col-xs-6 col-sm-7"> 

			<script type="text/plain" id="myEditor" style="width:771px;height:240px;">
    
		       <?php echo "<div class='content'>".htmlspecialchars_decode($v['content'])."</div>";?>
			</script>
			</div>
		</div>

		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button  class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交审核</button>
				<button onClick="article_save();" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存草稿</button>
				<button onClick="removeIframe();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</article>


<script type="text/javascript">
  var um = UM.getEditor('myEditor');

</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>