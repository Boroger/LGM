<?php if (!defined('THINK_PATH')) exit();?><div id="table">
		<div class="text-c"> <!-- 日期范围： -->
			<!-- <input type="text" onfocus="WdatePicker({maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}'})" id="datemin" class="input-text Wdate" style="width:120px;">
			-
			<input type="text" onfocus="WdatePicker({minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d'})" id="datemax" class="input-text Wdate" style="width:120px;"> -->
			<input type="text" class="input-text" style="width:250px" placeholder="输入管理员登录名" id="search" name="search">
			<button type="submit" class="btn btn-success" id="" name="search" onclick="searchuser(this)"><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
		</div>
		<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="admin_add('添加管理员','<?php echo U('adminAdd');?>','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加管理员</a></span> <span class="r">共有数据：<strong><?php echo ($total); ?></strong> 条</span> </div>
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