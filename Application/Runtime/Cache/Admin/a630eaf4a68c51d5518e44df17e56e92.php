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
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Roger_www/LGM1116/Public/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Roger_www/LGM1116/Public/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Roger_www/LGM1116/Public/admin/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Roger_www/LGM1116/Public/admin/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="/Roger_www/LGM1116/Public/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Roger_www/LGM1116/Public/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>编辑角色 - 管理员管理</title>
<meta name="keywords" content="H-ui.admin v2.3,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v2.3，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form action="<?php echo U('Admin/roleUpdate');?>" method="post" class="form form-horizontal" id="form-admin-role-add">
    <input type="hidden" name="id" value="<?php echo ($list3["id"]); ?>">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>角色名称：</label>
			<div class="formControls col-xs-8 col-sm-7">
				<input type="text" class="input-text" value="<?php echo ($list3["role"]); ?>" placeholder="" id="roleName" name="role" datatype="*4-16" nullmsg="用户账户不能为空">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">说明：</label>
			<div class="formControls col-xs-8 col-sm-7">
				<input type="text" class="input-text" value="<?php echo ($list3["description"]); ?>" placeholder="" id="" name="description">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">角色权限：</label>
			<div class="formControls col-xs-8 col-sm-7">
			<!-- ****************************写手动全部节点**************************************** -->
				<dl class="permission-list">
					<dt>
						<label>
							<!-- <input type="checkbox" value="" name="user-Character-0" id="user-Character-0"> -->
							管理员模块</label>
					</dt>
					<dd>
						<dl class="cl permission-list2">
							<dt>
								<label class="">
									<input type="checkbox" value="" name="" id="user-Character-0-0">
									全选</label>
							</dt>
							<dd>
								<!-- value对应权限节点id，name规定格式为permid_节点id -->
								<label class="">
									<input type="checkbox" value="1" name="permid_1" id="" <?php echo in_array("1",$list2)?"checked":"" ?> >
									添加</label>
								<label class="">
									<input type="checkbox" value="2" name="permid_2" id="" <?php echo in_array("2",$list2)?"checked":"" ?> >
									删除</label>
								<label class="">
									<input type="checkbox" value="3" name="permid_3" id="" <?php echo in_array("3",$list2)?"checked":"" ?> >
									修改</label>
								<label class="">
									<input type="checkbox" value="4" name="permid_4" id="" <?php echo in_array("4",$list2)?"checked":"" ?> >
									查看</label>
								<!-- <label class="">
									<input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-4">
									审核</label> -->
							</dd>
						</dl>
					</dd>
				</dl>
				<!-- ************************************一个部分到此结束****************************************** -->
				<dl class="permission-list">
					<dt>
						<label>
							<!-- <input type="checkbox" value="" name="user-Character-0" id="user-Character-0"> -->
							用户模块</label>
					</dt>
					<dd>
						<dl class="cl permission-list2">
							<dt>
								<label class="">
									<input type="checkbox" value="" name="" id="user-Character-0-0">
									全选</label>
							</dt>
							<dd>
								<!-- value对应权限节点id，name规定格式为permid_节点id -->
								<label class="">
									<input type="checkbox" value="5" name="permid_5" id="" <?php echo in_array("5",$list2)?"checked":"" ?> >
									添加</label>
								<label class="">
									<input type="checkbox" value="6" name="permid_6" id="" <?php echo in_array("6",$list2)?"checked":"" ?> >
									删除</label>
								<label class="">
									<input type="checkbox" value="7" name="permid_7" id="" <?php echo in_array("7",$list2)?"checked":"" ?> >
									修改</label>
								<label class="">
									<input type="checkbox" value="8" name="permid_8" id="" <?php echo in_array("8",$list2)?"checked":"" ?> >
									查看</label>
								<!-- <label class="">
									<input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-4">
									审核</label> -->
							</dd>
						</dl>
					</dd>
				</dl>
				<!-- ************************************一个部分到此结束****************************************** -->
				<dl class="permission-list">
					<dt>
						<label>
							<!-- <input type="checkbox" value="" name="user-Character-0" id="user-Character-0"> -->
							帖子模块</label>
					</dt>
					<dd>
						<dl class="cl permission-list2">
							<dt>
								<label class="">
									<input type="checkbox" value="" name="" id="user-Character-0-0">
									全选</label>
							</dt>
							<dd>
								<!-- value对应权限节点id，name规定格式为permid_节点id -->
								<label class="">
									<input type="checkbox" value="9" name="permid_9" id="" <?php echo in_array("9",$list2)?"checked":"" ?> >
									查看</label>
								<label class="">
									<input type="checkbox" value="10" name="permid_10" id="" <?php echo in_array("10",$list2)?"checked":"" ?> >
									删除</label>
								<!-- <label class="">
									<input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-4">
									审核</label> -->
							</dd>
						</dl>
					</dd>
				</dl>
				<!-- ************************************一个部分到此结束****************************************** -->
				<dl class="permission-list">
					<dt>
						<label>
							<!-- <input type="checkbox" value="" name="user-Character-0" id="user-Character-0"> -->
							回复模块</label>
					</dt>
					<dd>
						<dl class="cl permission-list2">
							<dt>
								<label class="">
									<input type="checkbox" value="" name="" id="user-Character-0-0">
									全选</label>
							</dt>
							<dd>
								<!-- value对应权限节点id，name规定格式为permid_节点id -->
								<label class="">
									<input type="checkbox" value="11" name="permid_11" id="" <?php echo in_array("11",$list2)?"checked":"" ?> >
									查看</label>
								<label class="">
									<input type="checkbox" value="12" name="permid_12" id="" <?php echo in_array("12",$list2)?"checked":"" ?> >
									删除</label>
								<!-- <label class="">
									<input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-4">
									审核</label> -->
							</dd>
						</dl>
					</dd>
				</dl>
				<!-- ************************************一个部分到此结束****************************************** -->
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-7 col-xs-offset-4 col-sm-offset-2">
				<button type="submit" class="btn btn-success radius" id="admin-role-save" name=""><i class="icon-ok"></i> 确定</button>
			</div>
		</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Roger_www/LGM1116/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Roger_www/LGM1116/Public/admin/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="/Roger_www/LGM1116/Public/admin/lib/icheck/jquery.icheck.min.js"></script> 
 
<script type="text/javascript" src="/Roger_www/LGM1116/Public/admin/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/Roger_www/LGM1116/Public/admin/static/h-ui.admin/js/H-ui.admin.js"></script> 
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">
$(function(){
	$(".permission-list dt input:checkbox").click(function(){
		$(this).closest("dl").find("dd input:checkbox").prop("checked",$(this).prop("checked"));
	});
	$(".permission-list2 dd input:checkbox").click(function(){
		var l =$(this).parent().parent().find("input:checked").length;
		var l2=$(this).parents(".permission-list").find(".permission-list2 dd").find("input:checked").length;
		if($(this).prop("checked")){
			$(this).closest("dl").find("dt input:checkbox").prop("checked",true);
			$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",true);
		}
		else{
			if(l==0){
				$(this).closest("dl").find("dt input:checkbox").prop("checked",false);
			}
			if(l2==0){
				$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",false);
			}
		}
	});
	
	$("#form-admin-role-add").validate({
		rules:{
			roleName:{
				required:true,
			},
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			$(form).ajaxSubmit();
			var index = parent.layer.getFrameIndex(window.name);
			parent.layer.close(index);
		}
	});
});
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>