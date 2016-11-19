<?php if (!defined('THINK_PATH')) exit();?><div id="content">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" href="<?php echo U('add');?>" ><i class="Hui-iconfont">&#xe600;</i> 添加小组</a></span> <span class="r">共有数据：<strong><?php echo ($total); ?></strong>条</span></div>
	<div class="cl pd-5 mt-20">
		
<!-- 		<select>
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
					<td class="td-manage"><a style="text-decoration:none" class="ml-5" onClick="picture_edit('图库编辑','picture-add.html','10001')" href="<?php echo U('edit',array('id'=>$v['id']));?>" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" href="<?php echo U('del',array('id'=>$v['id']));?>" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
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
<script>
function group_add(title,url,w,h){
	layer_show(title,url,w,h);
}
// function run()
// 	{

// 	pnum = pagenum.value;
// 	start("<?php echo U('Admin/group/lajax');?>?num="+num+"&group="+where+"&pnum="+pnum,function(data){
// 				var a = eval(data);
// 				$('#content').html(a);
// 				// alert(a);
// 			});
// 	}
// function start(url,func){
// 	var xhr = new XMLHttpRequest();
// 	xhr.open('get',url,true);
// 	xhr.send();
// 	xhr.onreadystatechange = function(){
// 		if(xhr.status == 200 && xhr.readyState == 4){
// 			var result = xhr.responseText;
// 			func(result);
// 		}
// 	}
// }

</script>