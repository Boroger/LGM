<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="/tp2/web/Public/js/jquery.min.js"></script>
	<style type="text/css">
     #box {
        padding: 20px;
     	background: #feeeed;
     }

	</style>
</head>
<body>
	<button>点我</button>
	<div id="box"></div>
	
</body>
<script type="text/javascript">

	$(function(){
		$('button').click(function(){
			// $.ajax({
			// 	type:"get",
			// 	url:"<?php echo U('Stu/doAjax');?>",
			// 	dataType:'json',
			// 	success:function(data){
   //                 console.log(data);
			// 	},
			// })

		     $.ajax({
		     	url:"<?php echo U('User/index');?>",
		     	success:function(data){
                  $('#box').html(data);
		     	}
		     })
		})
	})

</script>
</html>