<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<!-- <meta charset="UTF-8"> -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo ($title); ?></title>
	<link rel="stylesheet" href="/tp3/web/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/tp3/web/Public/my.css">
</head>
<body>
  <div class="container">
		<h1><?php echo ($title); ?></h1>

		<div class="center-block mt20">
			<a href="<?php echo U('User/index');?>" class="btn btn-primary">首页</a>
			<a href="<?php echo U('add');?>" class="btn btn-success">添加</a>
			
		</div>
	   
       <table class="table table-striped table-bordered table-hover mt20">
       	  <tr>
       	  	<th>ID</th>
       	  	<th>姓名</th>
       	  	<th>followHeart</th>
       	  	<th>地址</th>
       	  	<th>操作</th>
       	  </tr>
       	  <?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><tr>
    	  	<td class="col-md-2"><?php echo ($v["id"]); ?></td>
    	  	<td class="col-md-2"><?php echo ($v["name"]); ?></td>
    	  	<td class="col-md-2"><?php echo ($v["pwd"]); ?></td>
    	  	<td class="col-md-2"><?php echo ($v["place"]); ?></td>
    	  	  <!--<td>
                    <?php if($v["sex"] == '0'): ?>女
                    <?php elseif($v["sex"] == '1'): ?>男
                    <?php else: ?>保密<?php endif; ?>
              </td>-->
    	  	<td class="col-md-2">
    	  		<a href="<?php echo U('edit',array('id'=>$v['id']));?>" class="btn btn-primary">修改</a>
    	  		<a href="<?php echo U('del',array('id'=>$v['id']));?>" class="btn btn-danger">删除</a>
    	  	</td>
    	  </tr><?php endforeach; endif; else: echo "" ;endif; ?> 
       </table>
       
	</div><!--end container-->
	<script src="/tp3/web/Public/js/jquery.min.js"></script>
    <script src="/tp3/web/Public/js/bootstrap.min.js"></script>
</body>
<script type="text/javascript">
	var a = document.getElementsByTagName('a');
	for(i=0;i<a.length;i++)
	{
		a[i].onclick = function ()
		{
			var con = confirm('你确定去'+this.innerHTML);
			if(!con){
             return false;
			}
		}
	}

</script>
</html>