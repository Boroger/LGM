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
<link rel="stylesheet" href="/Roger_www/LGM1116/Public/dist/css/bootstrap.min.css">
<script src="/Roger_www/LGM1116/Public/dist/jquery-1.11.3.min.js"></script>
<script src="/Roger_www/LGM1116/Public/dist/js/bootstrap.min.js"></script>
<title>资讯列表</title>
</head>
<body>
<nav class="breadcrumb" style="line-height:30px"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 资讯管理 <span class="c-gray en">&gt;</span> 资讯列表 <a class="btn btn-success radius r" style="line-height:18px;" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container col-md-offset-4">
		<input type="text" name="" id="search" placeholder=" 资讯名称" style="width:250px" class="input-text">
		<button class="btn btn-success"  onclick="tests()" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜资讯</button>
	</div>
	<div id="content">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" data-title="添加资讯" _href="<?php echo U('add');?>" onclick="Hui_admin_tab(this)" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加资讯</a></span> <span class="r">共有数据：<strong><?php echo ($total); ?></strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="40">ID</th>
					<th width="60">标题</th>
					<th width="100">背景图</th>
					<th width="60">是否显示</th>
					<th width="100">更新时间</th>
					<th width="60">浏览次数</th>
					<th width="100">简介</th>
					<th width="60">内容</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr class="text-c">
					<td><input type="checkbox" value="" name=""></td>
					<td><?php echo ($v["id"]); ?></td>
					<td><?php echo ($v["title"]); ?></td>
					<td><img src="/Roger_www/LGM1116/<?php echo ($v["bgpic"]); ?>" width="120"  height="40"/></td>
					<td><?php if($v["state"] == 1): ?>是
					    <?php else: ?>否<?php endif; ?>
					</td>
					<td><?php echo ($v["ctime"]); ?></td>
					<td><?php echo ($v["glance"]); ?></td>
					<td><?php echo ($v["description"]); ?></td>
					<td class="td-status">
						<a class="label label-success radius" href="<?php echo U('content','id='.$v['id']);?>">查看</a>
					</td>
					<td class="f-14 td-manage">
						<!-- href="<?php echo U('xiaj','id='.$v['id']);?>" -->
						<a style="text-decoration:none" class="ml-5"onclick="xiaj(<?php echo ($v["id"]); ?>)" title="下架"><i class="Hui-iconfont">
		                    <?php if($v["state"] == '0'): ?>&#xe603;
		                    <?php elseif($v["state"] == '1'): ?>&#xe6de;<?php endif; ?>
		                </i></a> 
						<a style="text-decoration:none" class="ml-5" href="<?php echo U('edit','id='.$v['id']);?>" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> 
						<a style="text-decoration:none" class="ml-5" href="<?php echo U('del','id='.$v['id']);?>" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
					</td>

				</tr><?php endforeach; endif; ?>
				   	<tr>
						<td colspan="10">
							<nav>
							  <ul class="pager">
							    <li><a href="#" onclick="page(false)">Previous</a></li>
							    <li><a href="#" onclick="page(<?php echo ($total); ?>)">Next</a></li>
							  </ul>
							</nav>
						</td>
					</tr>
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript" src="/Roger_www/LGM1116/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Roger_www/LGM1116/Public/admin/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="/Roger_www/LGM1116/Public/admin/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="/Roger_www/LGM1116/Public/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/Roger_www/LGM1116/Public/admin/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/Roger_www/LGM1116/Public/admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript">
var num = 1;
var where = '';
var search = document.getElementById('search');
function dele(id){
	var r=confirm("你确定删除吗")
	  if (r==true)
	    {
	    window.location.href="<?php echo U('Article/del');?>+'?a=1&b=2'";
	}
}
function xiaj(id)
{
start("<?php echo U('Admin/Article/xajax');?>?p="+id+"&num="+num+"&title="+where,function(data){
				var a = eval(data);
				$('#content').html(a);
			});
}
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
	// alert(num+'/'+param);
    var param = Math.ceil(param/3);
	if (param) {
		num++;
		num = num>param ? param : num;
	} else {
		num--;
		num = num<1 ? 1 : num;
	}
	start("<?php echo U('Admin/Article/lajax');?>?num="+num+"&title="+where,function(data){
			var a = eval(data);
			$('#content').html(a);
			// alert(a);
		});
}

function tests(){
	// console.log(search);
	where = " title like '%"+search.value+"%'";
	start("<?php echo U('Admin/Article/lajax');?>?num="+num+"&title="+where,function(data){
		var a = eval(data);
		$('#content').html(a);
		// alert(a);
	});
}

</script> 
</body>
</html>