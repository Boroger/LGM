<?php if (!defined('THINK_PATH')) exit();?>	<div id="content">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" data-title="添加资讯" _href="<?php echo U('add');?>" onclick="Hui_admin_tab(this)" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加资讯</a></span> <span class="r">共有数据：<strong><?php echo ($total); ?></strong> 条</span> </div>
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