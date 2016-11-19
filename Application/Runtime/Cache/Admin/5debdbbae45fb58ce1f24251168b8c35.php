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
<link rel="stylesheet" href="/LGM1116/Public/dist/css/bootstrap.min.css">
<script src="/LGM1116/Public/dist/jquery-1.11.3.min.js"></script>
<script src="/LGM1116/Public/dist/js/bootstrap.min.js"></script>

<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->

<title>图片列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 小组管理 <span class="c-gray en">&gt;</span> 小组列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c">
		<input type="text" name="" id="search" style="width:250px" class="input-text">
		<button name="" id="" onclick="tests()" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜小组</button>
	</div>
  	                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
  <div id="content">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" href="<?php echo U('add');?>"><i class="Hui-iconfont">&#xe600;</i> 添加小组</a></span> <span class="r">共有数据：<strong><?php echo ($total); ?></strong>条</span></div>
	<div class="cl pd-5 mt-20">
		
	<!-- 	<select id="pagenum" onchange="run()">
			<option>分页数</option>
			<option value="2" <?php if($select == '2'): ?>selected<?php endif; ?>>2</option>
			<option value="3" <?php if($select == '3'): ?>selected<?php endif; ?>>3</option>
			<option value="4" <?php if($select == '4'): ?>selected<?php endif; ?>>4</option>
			<option value="5" <?php if($select == '5'): ?>selected<?php endif; ?>>5</option>
		</select> -->
	</div>
	<div class="mt-20">

		<table class="table table-bor/LGM1116/Public/admin/er table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="40"><i/LGM1116/Public/admin/put name="" type="checkbox" value=""></th>
					<th width="40">ID</th>
					<th width="80">小组名</th>
					<th width="80">logo</th>
					<th width="80">所属栏目</th>
					<th width="100">背景图</th>
					<th width="250">简介</th>
					<th width="120">更新时间</th>
					<th width="60">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr class="text-c">

					<td><input name="" type="checkbox" value=""></td>
					<td><?php echo ($v["id"]); ?></td>
					<td><?php echo ($v["name"]); ?></td>
					<td><img src="/LGM1116/<?php echo ($v["logo"]); ?>" width="80" height="30" onclick="group_add('logo','<?php echo U('Group/image',array('id'=>$v['id'],'state'=>1));?>','150','200')"/></td>
					<td><?php if($v["cid"] == 0): ?>3C数码
						<?php elseif($v["cid"] == 1): ?>文化
						<?php elseif($v["cid"] == 2): ?>行摄
						<?php else: ?>文化<?php endif; ?>
					</td>
					<td><img src="/LGM1116/<?php echo ($v["bgpic"]); ?>" width="100" height="40" onclick="group_add('background','<?php echo U('Group/image',array('id'=>$v['id'],'state'=>2));?>','800','300')"/></td>
					<td><?php echo ($v["description"]); ?></td>
					<td><?php echo ($v["ctime"]); ?></td>
					<td class="td-manage">
						<!-- <a style="text-decoration:none" onClick="picture_stop(this,'10001')" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>  -->
						<a style="text-decoration:none" class="ml-5" href="<?php echo U('edit',array('id'=>$v['id']));?>" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
					    <a style="text-decoration:none" class="ml-5" href="<?php echo U('del',array('id'=>$v['id']));?>" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
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
<script type="text/javascript" src="/LGM1116/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/LGM1116/Public/admin/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="/LGM1116/Public/admin/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="/LGM1116/Public/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/LGM1116/Public/admin/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/LGM1116/Public/admin/static/h-ui.admin/js/H-ui.admin.js"></script> 
<script type="text/javascript">

function group_add(title,url,w,h){
	layer_show(title,url,w,h);
}
// function img_add(title,url,w,h){
// 	layer_show(title,url,w,h);
// }

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
	// alert(num+'/'+param);
// pnum = pagenum.value;

    var param = Math.ceil(param/3);
	if (param) {
		num++;
		num = num>param ? param : num;
	} else {
		num--;
		num = num<1 ? 1 : num;
	}
	start("<?php echo U('Admin/group/lajax');?>?num="+num+"&group="+where,function(data){
			var a = eval(data);
			$('#content').html(a);
			// alert(a);
		});
}

function tests(){

	where = " name like '%"+search.value+"%'";
	console.log(where);
	start("<?php echo U('Admin/group/lajax');?>?num="+num+"&group="+where,function(data){
		var a = eval(data);
		$('#content').html(a);
		// alert(a);
	});
}
// var opts = document.getElementsByTagName('option');

// function run()
// {
// pnum = pagenum.value;
// window.location.href="<?php echo U('page');?>? num="+num+"&group="+where+"&pnum="+pnum;
// }


</script>
</body>
</html>