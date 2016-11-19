<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="cn">
  	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap -->
 
      
    <link rel="stylesheet" href="/LGM1116/Public/home/community.css">
    <link rel="stylesheet" href="/LGM1116/Public/home/home.css">
    <script src="/LGM1116/Public/dist/jquery-1.11.3.min.js"></script>
    <script src="/LGM1116/Public/dist/js/bootstrap.min.js"></script>
    <!-- 边框颜色 #222  #BBB  字#666 #111 -->


    <link rel="stylesheet" href="/LGM1116/Public/dist/css/bootstrap.min.css">
    <style>
       body{
            font-family: "Helvitica Neue",Helvitica,Arial,"Hiragino Sans GB","Microsoft YaHei","Arial Regular","Microsoft JhengHei",sans-serif;
       }
   
    </style>
      
    </head>
    

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
        // console.log("滚动条到顶部的垂直高度: "+$(document).scrollTop()); 
        // console.log('浏览器的高度：'+$(window).height());
        // console.log("页面的文档高度 ："+$(document).height());
        // console.log(totalheight);
        loa动态加载数据ata();
    }); 

</script>


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
    <div class="" style="">
        <!-- 4个小组 -->
        <div class="" style="margin-top:20px">
            <a href="<?php echo U('Community/group',array(cid=>0));?>" class="type fl" style="color:#111">3C数码</a>
            <a href="<?php echo U('Community/group',array(cid=>1));?>" class="type fl" style="color:#737474">文化</a>
            <a href="<?php echo U('community/group',array(cid=>2));?>" class="type fl" style="color:#737474">行摄</a>
            <a href="<?php echo U('community/group',array(cid=>3));?>" class="type fl" style="color:#737474">LGM</a>
            <p style="margin-right:15%" class="type fr">活跃小组</p>

        </div>

            
 <!--        <div class="clear" style="width:50px"></div> -->

        <div class="fl" style="margin-top:-20px">
            <div class=" fr" style="width:25%;">


                <div>  <!-- 复制一整块为右侧三个小组 -->
                    <div class="fr" style="border:1px solid #eee;padding:10px;margin-top:30px; ">
                        <div class="mt10">
                            <div class="fl">
                                <img width="50px" src="/LGM1116/Public/home/image/grouphead1.jpg" alt="">
                            </div>
                            <div >
                                <div style="margin-left:10px;" class="fl"><a style="font-size:18px;color:#111" href="">手机研究所</a></div>
                                <div style="margin-top: 2px" class="fr"><a style="font-size:14px;color:#111;" href="">进入小组></a></div>
                            </div>

                            <div class="fl">
                                <span class="fl" style="font-size:10px;margin-left:10px;margin-top: 3px">13216&nbsp;&nbsp;&nbsp;人聚集于此 &nbsp;&nbsp;</span>
                            </div>
                            <div class="fr">
                                <span class="fr" style="font-size:10px;margin-left:10px;margin-top: 3px">4855&nbsp;&nbsp;帖子</span>
                            </div>   
                            <div class="clear"></div>
                            <div class="mt10"><p style="color:#666">小桌面，大世界，就算是在方寸之间也有不一样的风景画面，DIY自定义最独特的...</p></div> 
                        </div> 
                        <div style="border-top:1px solid #eee"></div>   

                        <div class="mt10">
                            <div class="fl">
                                <img width="50px" src="/LGM1116/Public/home/image/grouphead1.jpg" alt="">
                            </div>
                            <div >
                                <div style="margin-left:10px;" class="fl"><a style="font-size:18px;color:#111" href="">手机研究所</a></div>
                                <div style="margin-top: 2px" class="fr"><a style="font-size:14px;color:#111;" href="">进入小组></a></div>
                            </div>

                            <div class="fl">
                                <span class="fl" style="font-size:10px;margin-left:10px;margin-top: 3px">13216&nbsp;&nbsp;&nbsp;人聚集于此 &nbsp;&nbsp;</span>
                            </div>
                            <div class="fr">
                                <span class="fr" style="font-size:10px;margin-left:10px;margin-top: 3px">4855&nbsp;&nbsp;帖子</span>
                            </div>   
                            <div class="clear"></div>
                            <div class="mt10"><p style="color:#666">小桌面，大世界，就算是在方寸之间也有不一样的风景画面，DIY自定义最独特的...</p></div> 
                        </div> 
                        <div style="border-top:1px solid #eee"></div>

                        <div class="mt10">
                            <div class="fl">
                                <img width="50px" src="/LGM1116/Public/home/image/grouphead1.jpg" alt="">
                            </div>
                            <div >
                                <div style="margin-left:10px;" class="fl"><a style="font-size:18px;color:#111" href="">手机研究所</a></div>
                                <div style="margin-top: 2px" class="fr"><a style="font-size:14px;color:#111;" href="">进入小组></a></div>
                            </div>

                            <div class="fl">
                                <span class="fl" style="font-size:10px;margin-left:10px;margin-top: 3px">13216&nbsp;&nbsp;&nbsp;人聚集于此 &nbsp;&nbsp;</span>
                            </div>
                            <div class="fr">
                                <span class="fr" style="font-size:10px;margin-left:10px;margin-top: 3px">4855&nbsp;&nbsp;帖子</span>
                            </div>   
                            <div class="clear"></div>
                            <div class="mt10"><p style="color:#666">小桌面，大世界，就算是在方寸之间也有不一样的风景画面，DIY自定义最独特的...</p></div> 
                        </div> 
                    </div>
                </div>
                <div class="clear"></div>
                <div class=" mt20" style="">
                    <p style="font-size: 18px;" class=" ">最新小组</p>
                </div>

                <div>  <!-- 复制一整块为右侧三个小组 -->
                    <div class="fr" style="border:1px solid #BBB;padding:10px;margin-top:10px; ">
                        <div class="mt10">
                            <div class="fl">
                                <img width="50px" src="/LGM1116/Public/home/image/grouphead1.jpg" alt="">
                            </div>
                            <div >
                                <div style="margin-left:10px;" class="fl"><a style="font-size:18px;color:#111" href="">手机研究所</a></div>
                                <div style="margin-top: 2px" class="fr"><a style="font-size:14px;color:#111;" href="">进入小组></a></div>
                            </div>

                            <div class="fl">
                                <span class="fl" style="font-size:10px;margin-left:10px;margin-top: 3px">13216&nbsp;&nbsp;&nbsp;人聚集于此 &nbsp;&nbsp;</span>
                            </div>
                            <div class="fr">
                                <span class="fr" style="font-size:10px;margin-left:10px;margin-top: 3px">4855&nbsp;&nbsp;帖子</span>
                            </div>   
                            <div class="clear"></div>
                            <div class="mt10"><p style="color:#666">小桌面，大世界，就算是在方寸之间也有不一样的风景画面，DIY自定义最独特的...</p></div> 
                        </div> 
                        <div style="border-top:2px solid #BBB"></div>   

                        <div class="mt10">
                            <div class="fl">
                                <img width="50px" src="/LGM1116/Public/home/image/grouphead1.jpg" alt="">
                            </div>
                            <div >
                                <div style="margin-left:10px;" class="fl"><a style="font-size:18px;color:#111" href="">手机研究所</a></div>
                                <div style="margin-top: 2px" class="fr"><a style="font-size:14px;color:#111;" href="">进入小组></a></div>
                            </div>

                            <div class="fl">
                                <span class="fl" style="font-size:10px;margin-left:10px;margin-top: 3px">13216&nbsp;&nbsp;&nbsp;人聚集于此 &nbsp;&nbsp;</span>
                            </div>
                            <div class="fr">
                                <span class="fr" style="font-size:10px;margin-left:10px;margin-top: 3px">4855&nbsp;&nbsp;帖子</span>
                            </div>   
                            <div class="clear"></div>
                            <div class="mt10"><p style="color:#666">小桌面，大世界，就算是在方寸之间也有不一样的风景画面，DIY自定义最独特的...</p></div> 
                        </div> 
                        <div style="border-top:2px solid #BBB"></div>

                        <div class="mt10">
                            <div class="fl">
                                <img width="50px" src="/LGM1116/Public/home/image/grouphead1.jpg" alt="">
                            </div>
                            <div >
                                <div style="margin-left:10px;" class="fl"><a style="font-size:18px;color:#111" href="">手机研究所</a></div>
                                <div style="margin-top: 2px" class="fr"><a style="font-size:14px;color:#111;" href="">进入小组></a></div>
                            </div>

                            <div class="fl">
                                <span class="fl" style="font-size:10px;margin-left:10px;margin-top: 3px">13216&nbsp;&nbsp;&nbsp;人聚集于此 &nbsp;&nbsp;</span>
                            </div>
                            <div class="fr">
                                <span class="fr" style="font-size:10px;margin-left:10px;margin-top: 3px">4855&nbsp;&nbsp;帖子</span>
                            </div>   
                            <div class="clear"></div>
                            <div class="mt10"><p style="color:#666">小桌面，大世界，就算是在方寸之间也有不一样的风景画面，DIY自定义最独特的...</p></div> 
                        </div> 
                    </div>
                </div>
                <div class="clear"></div>
                <div class=" mt20" style="">
                    <p class="fl" style="font-size: 14px; color:#666" class=" ">没有找到自己心仪的小组？</p>
                    <a href="" class="fr" style="font-size: 14px; color:#111">+申请新建小组</a>
                </div>

                <div class="clear"></div>
                <div class=" " style="margin-top:5px ">
                    <p style="font-size: 18px;" class=" ">小组达人榜</p>
                </div>

                <!-- <div>  
                    <div class="fr" style="border:1px solid #BBB;padding:10px;margin-top:10px; ">
                        <div class="mt10">
                            <div class="fl">
                                <img width="50px" style="border-radius:50% " src="/LGM1116/Public/home/image/grouphead1.jpg" alt="">
                            </div>
                            <div >
                                <div style="margin-left:10px;margin-top: 5px" class="fl">
                                    <a class="fl" style="font-size:16px;color:#111" href="">红尘望浮生阿斯顿&nbsp;&nbsp;&nbsp;&nbsp; </a>
                                    <p class="fl" style="width:18px;height:18px;line-height:18px;text-align:center;border-radius:50%;background-color:#38A0E1;margin-top:3px;color:white">5</p>

                                </div>
                            </div>
                            <div class="fl">
                                <span class="fl" style="font-size:10px;margin-left:10px;margin-top:-5px">精品帖数&nbsp;&nbsp;&nbsp;222&nbsp;&nbsp;</span>
                            </div>
                            
                            <div class="clear"></div>
                            <div class="mt10"><p style="color:#666">发表的&nbsp;&nbsp; <a style="color:#38a0e1" href="">一个来自帝都码农的恋物阿斯顿......</a> &nbsp;&nbsp; 被加精</p></div> 
                        </div> 
                    </div>
                </div> -->
                <div>  
                    <div class="fr" style="border:1px solid #BBB;padding:10px;margin-top:10px; ">
                        <div class="mt10">
                            <div class="fl">
                                <img width="50px" style="border-radius:50% " src="/LGM1116/Public/home/image/grouphead1.jpg" alt="">
                            </div>
                            <div >
                                <div style="margin-left:10px;margin-top: 5px" class="fl">
                                    <a class="fl" style="font-size:16px;color:#111" href="">红尘望浮生阿斯顿&nbsp;&nbsp;&nbsp;&nbsp; </a>
                                    <p class="fl" style="width:18px;height:18px;line-height:18px;text-align:center;border-radius:50%;background-color:#38A0E1;margin-top:3px;color:white">5</p>

                                </div>
                            </div>
                            <div class="fl">
                                <span class="fl" style="font-size:10px;margin-left:10px;margin-top:-5px">精品帖数&nbsp;&nbsp;&nbsp;222&nbsp;&nbsp;</span>
                            </div>
                            
                            <div class="clear"></div>
                            <div class="mt10"><p style="color:#666">发表的&nbsp;&nbsp; <a style="color:#38a0e1" href="">一个来自帝都码农的恋物阿斯顿......</a> &nbsp;&nbsp; 被加精</p></div> 
                        </div> 
                        <div style="border-top:2px solid #BBB"></div>  


                        <div class="mt10">
                            <div class="fl">
                                <img width="50px" style="border-radius:50% " src="/LGM1116/Public/home/image/grouphead1.jpg" alt="">
                            </div>
                            <div >
                                <div style="margin-left:10px;margin-top: 5px" class="fl">
                                    <a class="fl" style="font-size:16px;color:#111" href="">红尘望浮生阿斯顿&nbsp;&nbsp;&nbsp;&nbsp; </a>
                                    <p class="fl" style="width:18px;height:18px;line-height:18px;text-align:center;border-radius:50%;background-color:#38A0E1;margin-top:3px;color:white">5</p>

                                </div>
                            </div>
                            <div class="fl">
                                <span class="fl" style="font-size:10px;margin-left:10px;margin-top:-5px">精品帖数&nbsp;&nbsp;&nbsp;222&nbsp;&nbsp;</span>
                            </div>
                            
                            <div class="clear"></div>
                            <div class="mt10"><p style="color:#666">发表的&nbsp;&nbsp; <a style="color:#38a0e1" href="">一个来自帝都码农的恋物阿斯顿......</a> &nbsp;&nbsp; 被加精</p></div> 
                        </div> 
                        <div style="border-top:2px solid #BBB"></div>  


                        <div class="mt10">
                            <div class="fl">
                                <img width="50px" style="border-radius:50% " src="/LGM1116/Public/home/image/grouphead1.jpg" alt="">
                            </div>
                            <div >
                                <div style="margin-left:10px;margin-top: 5px" class="fl">
                                    <a class="fl" style="font-size:16px;color:#111" href="">红尘望浮生阿斯顿&nbsp;&nbsp;&nbsp;&nbsp; </a>
                                    <p class="fl" style="width:18px;height:18px;line-height:18px;text-align:center;border-radius:50%;background-color:#38A0E1;margin-top:3px;color:white">5</p>

                                </div>
                            </div>
                            <div class="fl">
                                <span class="fl" style="font-size:10px;margin-left:10px;margin-top:-5px">精品帖数&nbsp;&nbsp;&nbsp;222&nbsp;&nbsp;</span>
                            </div>
                            
                            <div class="clear"></div>
                            <div class="mt10"><p style="color:#666">发表的&nbsp;&nbsp; <a style="color:#38a0e1" href="">一个来自帝都码农的恋物阿斯顿......</a> &nbsp;&nbsp; 被加精</p></div> 
                        </div> 
                    </div>
                </div>

            </div>
            
           <?php if(is_array($list)): foreach($list as $key=>$v): ?><!-- 小组遍历此处 -->
            <div class="fl border group_content mt30" style="border:1px solid #eee;border-top:2px solid #fd6649;">
                <div>
                    <div>
                        <div class="fl" style="width:14%">
                            <img src="/LGM1116<?php echo ($v["logo"]); ?>"width=70 height=70 alt="">
                        </div>
                        <div class="fl type1" style="width:65%;margin-top:10px">
                            <a style="color:#111;font-family:'黑体'" id="com_name" href="<?php echo U('group/index',array(gid=>$v['id']));?>"><?php echo ($v["name"]); ?></a><br>
                            <span class="group_zi" style="font-size:14px;cursor:default;"><?php echo ($v["pnum"]); ?>&nbsp;人聚集于此 &nbsp;&nbsp;<?php echo ($v["tnum"]); ?>&nbsp;帖子</span>
                        </div>
                        <div class="fr"><a id="com_entr" href="<?php echo U('enter');?>">进入小组></a></div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="mt10 group_zi"><span style="font-size:17px"><?php echo ($v["description"]); ?></span></div>
                <div class="mt20" style="border-top:1px solid #BBB"></div>  
                <div class="mt10">
                    <div class="mt10" id="com_title">
                        <a style="color:#555;font-size:16px;" href="">屏幕炸屏幕炸,屏幕炸完天线炸!|记iPhone 7【天线门】</a>
                        <div class="fr">
                            <span style="color:#666"><p style='margin-top:3px' class="glyphicon glyphicon-eye-open"></p>200&nbsp;
                            <p class="glyphicon glyphicon-cloud"></p>200</span>
                        </div>
                        
                    </div>

                </div>
            </div><?php endforeach; endif; ?>

        </div>
        
    </div>
    </div>    <!-- container -->  
    <div style="width:100%;height:50px;margin-top:100px;background-color: #222">
        <img style="height:50px;margin-left:2% " src="/LGM1116/Public/home/image/logo.jpg" alt="">
        <img style="height:30px;" src="/LGM1116/Public/home/image/logozi.jpg" alt="">
        <p class="fr" style="color:#f0f0f0;height:50px;line-height: 50px">TECHNOLOGY STAYS TRUE HERE  |  © 2016 LGM | 苏ICP备12076188号-1 </p>
    </div>
    <script>
        $('.hover').mouseover(function(){
            $(this).css("color",'#38a0e1');
        })
        $('.hover').mouseout(function(){
            $(this).css("color",'#111');
        })
    </script>

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