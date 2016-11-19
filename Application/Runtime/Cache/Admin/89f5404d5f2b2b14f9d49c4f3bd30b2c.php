<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
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
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<link rel="stylesheet" href="/LGM1116/Public/dist/css/bootstrap.min.css">
<script src="/LGM1116/Public/dist/jquery-1.11.3.min.js"></script>
<script src="/LGM1116/Public/dist/js/bootstrap.min.js"></script>
<title>用户管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 用户中心 <span class="c-gray en">&gt;</span> 用户管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c"> 
		<input type="text" class="input-text" style="width:250px" placeholder="输入昵称" id="search">
		<button type="submit" class="btn btn-success radius" onclick="tests()"><i class="Hui-iconfont">&#xe665;</i> 搜昵称</button>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="member_add('添加用户','add','','510')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加用户</a></span> <span class="r">共有数据：<strong><?php echo ($total); ?></strong> 条</span> </div>
	<div class="mt-20">
<div id="contents">	
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="80">ID</th>
				<th width="100">用户名</th>
				<th width="40">性别</th>
				<th width="90">手机</th>
				<th width="150">邮箱</th>
				<th width="100">地址</th>
				<th width="130">加入时间</th>
				<th width="70">状态</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr class="text-c">
				<td><input type="checkbox" value="1" name=""></td>
				<td><?php echo ($v["id"]); ?></td>
				<td><u style="cursor:pointer" class="text-primary" onclick="member_show('张三','member-show.html','10001','360','400')"><?php echo ($v["username"]); ?></u></td>
				<td>
					<?php if($v["sex"] == '0'): ?>女
					<?php elseif($v["sex"] == '1'): ?>男
                	<?php else: ?>保密<?php endif; ?>
				</td>
				<td><?php echo ($v["phone"]); ?></td>
				<td><?php echo ($v["email"]); ?></td>
				<td class=""><?php echo ($v["place"]); ?></td>
				<td><?php echo (date("y-m-d h:i:s",$v["date"])); ?></td>
				<td class="td-status">
					<?php if($v["state"] == '1'): ?><span class="label label-success radius">已启用</span>
					<?php elseif($v["state"] == '0'): ?><span class="label label-defaunt radius">已停用</span><?php endif; ?>
				</td>
				<td class="td-manage">
				<a style="text-decoration:none" onClick="member_stop(this,'<?php echo ($v["id"]); ?>')" href="javascript:;" title="停用">
				<i class="Hui-iconfont">&#xe631;</i>
				</a>  
				<a title="删除" href="javascript:;" onclick="member_del(this,'<?php echo ($v["id"]); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
				</td>
			</tr><?php endforeach; endif; ?>	
		</tbody>
	</table>
</div>
<tr>
	<td colspan="10">
		<nav>
		  <ul class="pager">
		    <li><a href="#" onclick="page(false)">上一页</a></li>
		    <li><a href="#" onclick="page(<?php echo ($total); ?>)">下一页</a></li>
		  </ul>
		</nav>
	</td>
</tr>
	</div>
</div>
<script type="text/javascript" src="/LGM1116/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/LGM1116/Public/admin/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/LGM1116/Public/admin/lib/laypage/1.2/laypage.js"></script> 
<script type="text/javascript" src="/LGM1116/Public/admin/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="/LGM1116/Public/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/LGM1116/Public/admin/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/LGM1116/Public/admin/static/h-ui.admin/js/H-ui.admin.js"></script> 
<script type="text/javascript">
$(function(){
	
	$('.table-sort tbody').on( 'click', 'tr', function () {
		if ( $(this).hasClass('selected') ) {
			$(this).removeClass('selected');
		}
		else {
			$('tr.selected').removeClass('selected');
			$(this).addClass('selected');
		}
	});
});
/*用户-添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*用户-查看*/
function member_show(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*用户-停用*/
function member_stop(obj,id){
	layer.confirm('确认要停用吗？',function(index){
		$.ajax({
			url:"<?php echo U('Admin/Member/stopajax');?>",
	  		data:{"num":id},
	 		success:function(data){
	 			console.log(data);
	 			$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_start(this,id)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe6e1;</i></a>');
				$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已停用</span>');
				$(obj).remove();
				layer.msg('已停用!',{icon: 5,time:1000});
	 		},
	  		dataType:"json",
		});

		
	});
}

/*用户-启用*/
function member_start(obj,id){
	layer.confirm('确认要启用吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
		$(obj).remove();
		layer.msg('已启用!',{icon: 6,time:1000});

	});
}

/*用户-删除*/
function member_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			url:"<?php echo U('Admin/Member/delajax');?>",
	  		data:{"num":id},
	 		success:function(data){
	 			console.log(data);
	 			$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
				window.location.reload();
	 		},
	  		dataType:"json",
		})

		// $(obj).parents("tr").remove();
		// layer.msg('已删除!',{icon:1,time:1000});
	});
}



var num = 1;
var where = '';
var search = document.getElementById('search');

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
    
function page(param){
    var param = Math.ceil(param/5);
	if (param) {
		num++;
		num = num>param ? param : num;
	} else {
		num--;
		num = num<1 ? 1 : num;
	}
	start("<?php echo U('Admin/Member/showajax');?>?num="+num+"&title="+where,function(data){
		var a = eval(data);
		$('#contents').html(a);
	});
}

function tests(){
	// where = " &username like '%"+search.value+"%'";
	where = search.value;
	start("<?php echo U('Admin/Member/showajax');?>?num="+num+"&title="+where,function(data){
		var a = eval(data);
		$('#contents').html(a);
	});
}
</script> 
</body>
</html>