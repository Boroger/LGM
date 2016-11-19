<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
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
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>管理员列表</title>
</head>
<body>

<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 管理员列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>

<div class="page-container">
	<div id="box">
		<div class="text-c"> <!-- 日期范围： -->
			<!-- <input type="text" onfocus="WdatePicker({maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}'})" id="datemin" class="input-text Wdate" style="width:120px;">
			-
			<input type="text" onfocus="WdatePicker({minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d'})" id="datemax" class="input-text Wdate" style="width:120px;"> -->
			<input type="text" class="input-text" style="width:250px" placeholder="输入管理员登录名" id="search" name="search">
			<button type="submit" class="btn btn-success" id="" name="search" onclick="searchuser(this)"><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
		</div>
		<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="admin_add('添加管理员','<?php echo U('adminAdd');?>','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加管理员</a></span> <span class="r">共有数据：<strong><?php echo ($totals); ?></strong> 条</span> </div>
		<table class="table table-border table-bordered table-bg">
			<thead>
				<tr>
					<th scope="col" colspan="10">管理员列表</th>
				</tr>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="40">ID</th>
					<th width="150">登录名</th>
					<th width="40">性别</th>
					<th width="90">手机</th>
					<th width="150">邮箱</th>
					<th width="90">角色</th>
					<th width="130">创建时间</th>
					<th width="80">是否启用</th>
					<th width="120">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr class="text-c">
						<td><input type="checkbox" value="1" name=""></td>
						<td><?php echo ($v["id"]); ?></td>
						<td><?php echo ($v["name"]); ?></td>
						<td>
							<?php if($v["sex"] == '0'): ?>女
	                    	<?php else: ?>男<?php endif; ?>
						</td>
						<td><?php echo ($v["phone"]); ?></td>
						<td><?php echo ($v["email"]); ?></td>
						<td>
							<?php if($v["state"] == '0'): ?>超级管理员
	                   		<?php elseif($v["state"] == '1'): ?>普通管理员
	                   		<?php else: ?>死变态<?php endif; ?>
						</td>
						<td><?php echo ($v["date"]); ?></td>
						<td class="td-status">
							<?php if($v["state"] == '1'): ?><span class="label radius">已停用</span>
	                   		<?php else: ?><span class="label label-success radius">已启用</span><?php endif; ?>
						</td>
						<td class="td-manage">

							<a style="text-decoration:none" href="<?php echo U('adminChangeState',array('id'=>$v['id'],'state'=>0));?>" title="启/停用"><i class="Hui-iconfont">&#xe61d;</i></a>

							<a title="编辑" href="<?php echo U('adminEdit',array('id'=>$v['id']));?>" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 

							<a title="删除" href="<?php echo U('adminDel',array('id'=>$v['id']));?>" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
						</td>
					</tr><?php endforeach; endif; ?>
			</tbody>
		</table>
	</div>
	<div>
    </div>

	<tr><button class="btn btn-success" style="position: absolute;left: 450px;top: 450px;" onclick="page(false)">上一页</button></tr>
	<tr><button class="btn btn-success" style="position: absolute;left: 550px;top: 450px;" onclick="page(<?php echo ($total); ?>)">下一页</button></tr>
	

</div>
<script type="text/javascript" src="/LGM1116/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script>  
<script type="text/javascript" src="/LGM1116/Public/admin/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="/LGM1116/Public/admin/lib/laypage/1.2/laypage.js"></script> 
<script type="text/javascript" src="/LGM1116/Public/admin/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="/LGM1116/Public/admin/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/LGM1116/Public/admin/static/h-ui.admin/js/H-ui.admin.js"></script> 
<script type="text/javascript">
	/*
		参数解释：
		title	标题
		url		请求的url
		id		需要操作的数据id
		w		弹出层宽度（缺省调默认值）
		h		弹出层高度（缺省调默认值）
	*/
	/*管理员-增加界面*/
	function admin_add(title,url,w,h){
		layer_show(title,url,w,h);
	}

	// Ajax分页
	var num = 1;
	var where = '';
	var box = document.getElementById('box');
	function page(param){
		if (param) {
			num++;
			num = num>param ? param : num;
		} else {
			num--;
			num = num<1 ? 1 : num;
		}
		start("<?php echo U('Admin/Admin/adminListAjax');?>?p="+num+"&name="+where,
			function(data){
				var a = eval(data);
				$('#box').html(a);
			});
	}
	// ajax操作
	function start(url,func){
		var xhr = new XMLHttpRequest();
		xhr.open('get',url,true);
		xhr.send();
		xhr.onreadystatechange = function(){
			if(xhr.status == 200 && xhr.readyState == 4){
				var result = xhr.responseText;
				func(result);
			}
		}
	}
	// 查找用户
	function searchuser(obj){
		where = " name like '%"+search.value+"%'";
		start("<?php echo U('Admin/Admin/adminListAjax');?>?p="+num+"&name="+where,
		function(data){
			var a = eval(data);
			$('#box').html(a);
		});
	}
</script>
</body>
</html>