<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>查看所属用户</title>
  <style type="text/css">
    span{
      font-size: 20px;
      /*font-weight: 600;*/
      margin-left: 200px;
    }
  </style>
</head>
<body>
  <table border="0" width="300" height="50" cellpadding="0" cellspacing="0" align="center">
    <caption><h3>该角色所属管理员：</h3></caption>
    <?php if(is_array($adminname)): $k = 0; $__LIST__ = $adminname;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><tr><td><?php echo ($v); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
</body>
</html>