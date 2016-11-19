<?php if (!defined('THINK_PATH')) exit();?><!-- <?php var_dump($_SESSION)?> -->
<!DOCTYPE html>
<html lang="cn">
  	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>老干妈</title>

	    <!-- Bootstrap -->
	    <link href="/LGM1116/Public/css/bootstrap.min.css" rel="stylesheet">

      
          <link rel="stylesheet" href="/LGM1116/Public/home/home.css">
      
  	</head>
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>

<script type="text/javascript">
    var totalheight = 0;     //定义一个总的高度变量
    function loa动态加载数据ata()
    { 
        totalheight = parseFloat($(window).height()) + parseFloat($(window).scrollTop());     //浏览器的高度加上滚动条的高度 

        if ($(document).height() <= totalheight)     //当文档的高度小于或者等于总的高度的时候，开始动态加载数据
        {   
          $.ajax({
              url:"<?php echo U('Home/index/indexajax');?>",
              data:{"num":1},
              success:function(data){
                  //加载数据 
                $("#container").append(data);
              },
              dataType:"json",

          });
        }
    } 

    $(window).scroll( function() { 
        console.log("滚动条到顶部的垂直高度: "+$(document).scrollTop()); 
        console.log('浏览器的高度：'+$(window).height());
        console.log("页面的文档高度 ："+$(document).height());
        console.log(totalheight);
        loa动态加载数据ata();
    }); 

</script>



<body style="background-color: #f0f0f0">

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
        
        <li class="active"><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
        <li><a href="<?php echo U('Home/Community/index');?>">社区</a></li>
        
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
        <?php if($_SESSION['user_id'] == ''): ?><li>
             <a href="<?php echo U('Home/Login/login');?>">登录</a>
          </li>
        <?php else: ?>
          <li>
              <a href=""><?php echo ($_SESSION['user_username']); ?></a>
          </li><?php endif; ?>
        <?php if($_SESSION['user_id'] == ''): ?><li>
             <a href="<?php echo U('Home/Register/register');?>">注册</a>
          </li>
          <?php else: ?>
          <li>
            <a href="<?php echo U('Home/Login/logout');?>">退出</a>
          </li><?php endif; ?>
         
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




<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- 轮播图开始 -->
<div class="container" id="container">

<!-- <div class="col-md-1 pic"></div> -->
<div id="myCarousel" class="carousel slide pic">
  <!-- 轮播（Carousel）指标 -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>   
  <!-- 轮播（Carousel）项目 -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="/LGM1116/Public/home/image/lunbo1" alt="First slide">
    </div>
    <div class="item">
      <img src="/LGM1116/Public/home/image/lunbo2" alt="Second slide">
    </div>
    <div class="item">
      <img src="/LGM1116/Public/home/image/lunbo3" alt="Third slide">
    </div>
  </div>
  <!-- 轮播（Carousel）导航 -->
  <a class="carousel-control left" href="#myCarousel" 
     data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" 
     data-slide="next">&rsaquo;</a>
</div> 
<!-- 轮播图结束 -->


<div class="row">
    <div class="col-md-1"></div>
    <div class="col-lt-10 col-sm-10 col-md-10 ">
        <div class="rec">
            <p class="recommend" style="margin-top: 10px;">小绿人推荐</p>
            <span class="rec_more rec_img">查看更多</span>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="row">
        <!-- <div class="col-lg-10 col-sm-8">
            <div class="fl rec_img"><img style="border-radius: 5%" src="/LGM1116/Public/home/image/recommend1.jpg" alt="">
            </div>
            <div class="fl rec_img"><img style="border-radius: 5%" src="/LGM1116/Public/home/image/recommend1.jpg" alt="">
            </div>
            <div class="fl rec_img"><img style="border-radius: 5%" src="/LGM1116/Public/home/image/recommend1.jpg" alt="">
            </div>
            <div class="fl rec_img"><img style="border-radius: 5%" src="/LGM1116/Public/home/image/recommend1.jpg" alt="">
            </div>
        </div> -->
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                  <img  style="border-radius: 5%" src="/LGM1116/Public/home/image/recommend1.jpg" alt="...">
                  <div class="caption">
                  </div>
            </div>
            <div class="col-sm-6 col-md-3">
                  <img  style="border-radius: 5%" src="/LGM1116/Public/home/image/recommend1.jpg" alt="...">
                  <div class="caption">
                  </div>
            </div>
            <div class="col-sm-6 col-md-3">
                  <img  style="border-radius: 5%" src="/LGM1116/Public/home/image/recommend1.jpg" alt="...">
                  <div class="caption">
                  </div>
            </div>
            <div class="col-sm-6 col-md-3">
                  <img  style="border-radius: 5%" src="/LGM1116/Public/home/image/recommend1.jpg" alt="...">
                  <div class="caption">
                  </div>
            </div>
        </div>
    </div>
        
</div>


<div class="row" style="margin-top: 40px">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <p class="recommend">最新文章</p>
    </div>
</div>
  <!-- <div class="gray"> -->
    
    <!-- 从这里开始遍历 -->
    <div class="row" style="margin-top: 30px">
        <div class="col-md-1"></div>
        <div class="col-sm-12 col-md-7 ">
            <div style="margin-left:2%">         <!-- 最大的div -->
                <div class="row">
                    <div class="white fl col-md-12">
                        <div class="fl">
                            <a href="">
                              <img style="width:70px;border-radius:50px" src="/LGM1116/Public/home/image/head1.jpg" alt="">
                            </a>
                        </div>
                        <div class=" col-lt-3 col-sm-3 col-md-3 fl" >
                            <div><p class="user">用户名</p></div>
                            <div><a href="" class="group">所属组</a></div>
                        </div>
                        <div class="fr " style="">
                            <p class="time">5小时之前</p>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="row">
                  <div class="col-mid-12 ">
                  <div class=""><img style="width:100%" src="/LGM1116/Public/home/image/title1.jpg" alt=""></div>
                  </div>
                </div>
            <div class=" row">
              <div class="white col-mid-12">
                <a class="title " href="">千元以下能买到什么？红米 4 与红米 4A 轻体验</a>
                <br>
                <span class="content">不知道尾巴们还记得锤子科技 2016 新品发布会时我为大家带来的锤子手机 M1 / M1L 开箱文章吗？当时由于时间、光线等各种原因导致拍出来的开箱文图片...</span>
              </div>
            </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 30px">
        <div class="col-md-1"></div>
        <div class="col-sm-12 col-md-7 ">
            <div style="margin-left:2%">         <!-- 最大的div -->
                <div class="row">
                    <div class="white fl col-md-12">
                        <div class="fl">
                            <a href="">
                              <img style="width:70px;border-radius:50px" src="/LGM1116/Public/home/image/head1.jpg" alt="">
                            </a>
                        </div>
                        <div class=" col-lt-3 col-sm-3 col-md-3 fl" >
                            <div><p class="user">用户名</p></div>
                            <div><a href="" class="group">所属组</a></div>
                        </div>
                        <div class="fr " style="">
                            <p class="time">5小时之前</p>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="row">
                  <div class="col-mid-12 ">
                  <div class=""><img style="width:100%" src="/LGM1116/Public/home/image/title1.jpg" alt=""></div>
                  </div>
                </div>
            <div class=" row">
              <div class="white col-mid-12">
                <a class="title " href="">千元以下能买到什么？红米 4 与红米 4A 轻体验</a>
                <br>
                <span class="content">不知道尾巴们还记得锤子科技 2016 新品发布会时我为大家带来的锤子手机 M1 / M1L 开箱文章吗？当时由于时间、光线等各种原因导致拍出来的开箱文图片...</span>
              </div>
            </div>
            </div>
        </div>   
    </div>
    <!-- <div class="row">
      <div style="margin-top:20px "></div>
        <div class="col-sm-4 col-md-4" style="height:10px"></div>
        <div class="col-sm-4 col-md-4">
            <button type="button" class="btn btn-primary">点此加载更多</button>
        </div>
    </div> -->

  <!-- </div>  gray -->
    <!-- 帖子结束 -->
    <!-- 广告位 -->
    <div class="ggw" id="ggw"></div>  
</div>  <!-- container -->

    <!-- jQuery -->
    <script src="/LGM1116/Public/js/jquery.min.js"></script>
    <!-- bootstrap.min.js 必须放在JQ之后!!! -->
    <script src="/LGM1116/Public/js/bootstrap.min.js"></script>
    <script src="/LGM1116/Public/js/holder.min.js"></script>
</body>
    <script>
    $(window).scroll(function()
    {
      var st = $(this).scrollTop();
      console.log(st);
      if (st>920) {
        $('#ggw').css({position:"fixed",top:"70px"});
      } else{
        $('#ggw').css({position:"absolute",top:"930px"});
      }
    });
</script>
</html>