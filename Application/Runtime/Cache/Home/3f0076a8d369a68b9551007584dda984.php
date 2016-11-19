<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="cn">
  	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap -->
 
      
    <title>LGM社区</title>
    <!-- <link rel="stylesheet" href="/LGM1116/Public/dist/css/bootstrap.min.css"> -->
      <link rel="stylesheet" href="/LGM1116/Public/home/post.css">
      <link href="/LGM1116/Public/css/bootstrap.min.css" rel="stylesheet">
      <link href="/LGM1116/Public/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
      <script type="text/javascript" src="/LGM1116/Public/umeditor/third-party/jquery.min.js"></script>
      <script type="text/javascript" charset="utf-8" src="/LGM1116/Public/umeditor/umeditor.config.js"></script>
      <script type="text/javascript" charset="utf-8" src="/LGM1116/Public/umeditor/umeditor.min.js"></script>
      <script type="text/javascript" src="/LGM1116/Public/umeditor/lang/zh-cn/zh-cn.js"></script>



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
    <form action="<?php echo U('Post/insert');?>" method="post">
  	  <div class="col-xs-15 col-md-10 col-md-offset-1" id="postadd_a">

  		  <input type="text" name="title" placeholder="#主题#" class="col-xs-12 col-md-8" id="postadd_title">

        <div class="col-xs-5 col-md-3">
            <select class="col-xs-15 col-md-12" name="gid" id="postadd_sele">
              <?php if(is_array($oppo)): foreach($oppo as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
            </select>
        </div>
      <!--发表预览begin-->
        <div class="col-xs-12 col-sm-10" id="postadd_mye"> 
          <script type="text/plain" id="myEditor" style="width:880px;">
          </script>
        </div>
        <div class="col-xs-13 col-md-11" id="postadd_mye"> 
          <input type="submit"  class="btn btn-danger" style="width:100px;" value="发表">
          <a href=""  class="btn btn-default" id="postadd_glan">预览</a>
          <div style="height:20px"></div>
        </div>
        <hr>
           
      </div>
      <!--发表预览end-->
    </form>
       <script>
        var um = UM.getEditor('myEditor');
        // function getContent() {
        //     var content = UM.getEditor('myEditor').getContent()
        //     UM.getEditor('myEditor').setContent(content, isAppendTo);
        // }
       </script>
  </div>
</div>
<div style="margin-top:100px;width:100%;height:50px;background-color: #222">
    <img style="height:50px;margin-left:2% " src="/LGM1116/Public/home/image/logo.jpg" alt="">
    <img style="height:30px;" src="/LGM1116/Public/home/image/logozi.jpg" alt="">
    <p class="fr" style="color:#f0f0f0;height:50px;line-height:50px;float:right">TECHNOLOGY STAYS TRUE HERE  |  © 2016 LGM | 苏ICP备12076188号-1</p>
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