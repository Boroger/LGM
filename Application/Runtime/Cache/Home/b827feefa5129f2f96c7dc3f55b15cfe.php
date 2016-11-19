<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="cn">
  	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap -->
 
      
<title>分享交流组</title>
  <link rel="stylesheet" href="/LGM1116/Public/dist/css/bootstrap.min.css">
  <script src="/LGM1116/Public/dist/jquery-1.11.3.min.js"></script>
  <script src="/LGM1116/Public/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/LGM1116/Public/home/group.css">



    <link rel="stylesheet" href="/LGM1116/Public/dist/css/bootstrap.min.css">
    <style>
       body{
            font-family: "Helvitica Neue",Helvitica,Arial,"Hiragino Sans GB","Microsoft YaHei","Arial Regular","Microsoft JhengHei",sans-serif;
       }
   
    </style>
      
    </head>
    

<body style='background-color:#fafcff;'>
<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img style="margin-top: -7px" width="70px" src="/LGM1116/Public/home/image/logo.jpg"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
    <li ><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
    <li class="active"><a href="<?php echo U('Home/Community/index');?>">社区</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="搜帖子...">
        </div>
        <button type="submit" class="btn btn-default glyphicon glyphicon-search"></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li>
           <a href="<?php echo U('Home/Login/login');?>">登录</a>
        </li>
        <li>
           <a href="<?php echo U('Home/Register/register');?>">注册</a>
        </li>
         
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




<div class="container">
<div class="row">
  <div class="col-xs-18 col-md-12" id="group_nav">官网>社区>小组>手机研究所</div>

  <div class="col-xs-18 col-md-12" id="group_deg">
  	<!--背景大框begin-->
  	<div id="group_reg" style="height:300px">

  		<div id="group_bg"><img src="/LGM1116/<?php echo ($group["bgpic"]); ?>"></div>
  		<div id="group_logo"><img src="/LGM1116/<?php echo ($group["logo"]); ?>" 
  			style="margin:5px"></div>
        <!--regt begin-->
  		<div id="group_regt">
  			<div id="group_name">
  				<?php echo ($group["name"]); ?>
  			</div>
  			<div id="group_mers">
	  			<div class="fl" id="group_user">
	  				组员：13234
	  			</div>
	  			<div  class="fl" id="group_post">
	  				帖子：4863
	  			</div>
	  			<div class="fl" id="group_btn">
	  				<button type="button" class="btn btn-danger">+ 加入小组</button>
	  			</div>
	  		</div>
  		</div>

  		<!--regt end-->
  		<div id="group_des" style="width:940px;height:60px">
       <?php echo ($group["description"]); ?>
  		</div>

  	</div>
  	<!--背景大框end-->
  	<!--帖子内容begin-->
  	<div id="group_body" class="fl">
  		<!--导航begin-->
  		<div id="group_bodyh">
  			<div class="fl" id="group_bodya">
  				<a href="" id="group_bodyf">全部</a>
  			</div>
  			<div class="fl" id="group_bodya">
  				<a href="" id="group_bodyf">精华</a>
  			</div>
  			<div class="fl" id="group_bodyb">
	  				<button type="button" id="posted" class="btn btn-danger" style="background:#fd6649;">发帖</button>
<script>
var posted = document.getElementById('posted');
	posted.onclick = function(){
		location.href = "<?php echo U('Post/add',array(gid=>$gid));?>"
	}
</script>
  			</div>

  		</div>
  			<!--导航end-->
       <?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><!--帖子begin-->
		<div id="group_cont">
			<div id="group_contc">
				<div style="width:50px;height:40px;margin-top:5px">评论<br><?php echo ($v["comment"]); ?></div>
			</div>
			<div id="group_contt">
				<a href=""id="group_conta"><?php echo ($v["title"]); ?></a>
			</div>
			<!--遍历帖子图片beign-->
			<div id="group_contp">
				<?php if(is_array($pic)): foreach($pic as $k=>$vo): if($v["id"] == $k): if(is_array($vo)): $i = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><div id="group_contpp">
						<img src="/LGM1116/Public<?php echo ($sub); ?>" width=120 height=80>

					     </div><?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; ?>
			</div>
			<!--遍历帖子图片beign-->
			<!--作者begin-->
			<div id="group_contu">
				<?php echo ($v["name"]); ?>
			</div>
			<!--作者end-->
        <!--时间begin-->
		    <div id="group_contd">
		    	<p class="glyphicon glyphicon-time" style="margin-top:5px"></p>
		    	<?php echo ($v["ctime"]); ?>
			</div>
        <!--时间end-->
	        <!--点赞begin-->
	        <div id="group_conte">
	        	<p class="glyphicon glyphicon-thumbs-up" style="margin-top:5px"></p>
	        	<?php echo ($v["likes"]); ?>
	        </div>
	        <!--点赞end-->
	        <!--浏览量begin-->
	        <div id="group_conts">
	        	<p class="glyphicon glyphicon-eye-open" style="margin-top:5px"></p>
	        	<?php echo ($v["glance"]); ?>
	        </div>
	        <!--浏览量end-->
		</div>
		<!--帖子end--><?php endforeach; endif; else: echo "" ;endif; ?>

	     <nav class="col-md-6 col-md-offset-2">
		  <ul class="pagination pagination-lg">
		    <li><a href="#">&laquo;</a></li>
		    <li><a href="#">1</a></li>
		    <li><a href="#">2</a></li>
		    <li><a href="#">3</a></li>
		    <li><a href="#">4</a></li>
		    <li><a href="#">5</a></li>
		    <li><a href="#">&raquo;</a></li>
		  </ul>
		</nav>
  		
  	</div>
  	<!--帖子内容end-->
   <div id="group_adver"class="fl">
  	<div id="group_gather">
  		<div id="group_gathera">
  			232位组员聚集在此
  			<a href="" id="group_gatherb">全部></a>
  		</div>
  		<div id="group_gatherc">
  			<div id="group_gatherd"></div>
  		</div>
  		
  	</div>
    <!--推荐小组begin-->
  	<div id="group_reco">
  		<div id="group_gathera">
  			推荐小组
  		</div>
  		<div id="group_recoc">
  			<div id="group_recod">
  				<!--头像-->
  				<div id="group_recoe">
  				</div>
  				<!--组名-->
  				<div id="group_recof">
  				</div>
  				<!--进入小组-->
  				<div id="group_recog">
  					<a href=""id="group_recoj">进入小组></a>
  				</div>
  				<!--人数-->
  				<div id="group_recoh">
  					<div style="width:90px" class="fl">2112</div>
  					<div style="width:60px" class="fl">聚集在此</div>
  			    </div>
  			    <!--帖子-->
  			    <div id="group_recoi">
  			    	<div style="width:40px" class="fl">2112</div>
  					<div style="width:25px" class="fl">帖子</div>
  			    </div>
  			</div>

  			<div id="group_recod">
  				<!--头像-->
  				<div id="group_recoe">
  				</div>
  				<!--组名-->
  				<div id="group_recof">
  				</div>
  				<!--进入小组-->
  				<div id="group_recog">
  					<a href=""id="group_recoj">进入小组></a>
  				</div>
  				<!--人数-->
  				<div id="group_recoh">
  					<div style="width:90px" class="fl">2112</div>
  					<div style="width:60px" class="fl">聚集在此</div>
  			    </div>
  			    <!--帖子-->
  			    <div id="group_recoi">
  			    	<div style="width:40px" class="fl">2112</div>
  					<div style="width:25px" class="fl">帖子</div>
  			    </div>
  			</div>

  			<div id="group_recod">
  				<!--头像-->
  				<div id="group_recoe">
  				</div>
  				<!--组名-->
  				<div id="group_recof">
  				</div>
  				<!--进入小组-->
  				<div id="group_recog">
  					<a href=""id="group_recoj">进入小组></a>
  				</div>
  				<!--人数-->
  				<div id="group_recoh">
  					<div style="width:90px" class="fl">2112</div>
  					<div style="width:60px" class="fl">聚集在此</div>
  			    </div>
  			    <!--帖子-->
  			    <div id="group_recoi">
  			    	<div style="width:40px" class="fl">2112</div>
  					<div style="width:25px" class="fl">帖子</div>
  			    </div>
  			</div>
  		</div>
  	</div>
  	<!--推荐小组end-->

  	<!--推荐小组begin-->
  	<div id="group_reco">
  		<div id="group_gathera">
  			组员光荣榜
  		</div>
  		<div id="group_recoc">
  			<div id="group_recod">
  				<!--头像-->
  				<div id="group_recoe">
  				</div>
  				<!--组名-->
  				<div id="group_recof">
  				</div>
 
  				<!--人数-->
  				<div id="group_recol">
  			     发表的..............被加精
  			    </div>
  			</div>

  			<div id="group_recod">
  				<!--头像-->
  				<div id="group_recoe">
  				</div>
  				<!--组名-->
  				<div id="group_recof">
  				</div>
 
  				<!--人数-->
  				<div id="group_recol">
  			     发表的..............被加精
  			    </div>
  			</div>

  			<div id="group_recod">
  				<!--头像-->
  				<div id="group_recoe">
  				</div>
  				<!--组名-->
  				<div id="group_recof">
  				</div>
 
  				<!--人数-->
  				<div id="group_recol">
  			     发表的..............被加精
  			    </div>
  			</div>
 
  			</div>
  		</div>
  	</div>
  	<!--推荐小组end-->
  	</div>	
  	</div>

  </div>


</div>
</div>

</body>

<script>
$(window).scroll(function()
{
  var st = $(this).scrollTop();
  // console.log(st);
  if (st>920) {
    $('#ggw').css({position:"fixed",top:"70px"});
  } else{
    $('#ggw').css({position:"absolute",top:"930px"});
  }
});
</script>

</html>