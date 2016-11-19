<?php if (!defined('THINK_PATH')) exit();?><div id="contents"> 
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