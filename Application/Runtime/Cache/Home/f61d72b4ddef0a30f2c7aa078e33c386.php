<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<link rel="stylesheet" href="/LGM1116/Public/home/home.css">
<link rel="stylesheet" href="/LGM1116/Public/js/jquery.min.js">
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/lib/icheck/icheck.css" />
<title>登录</title>
</head>



<body style="background-color: #f2f2f2">


<div>     
  <div class="line1"></div>
  <div class="line2"></div>
  <a href="<?php echo u('Home/Index/index');?>">
    <div class="login_logo">
      <img width="200px" src="/LGM1116/Public/home/image/biglogo.jpg" alt="">
    </div>
  </a>
 <!-- 继承的id -->
  <div class="login_main" style="margin-top: -120px">  
    <form action="" method="post" class="form form-horizontal" id="form-member-add">
        <div class="row formControls">
      <input type="text" style="height:44px;width:300px" class="input-text" value="" placeholder="&nbsp;昵称(仅限汉字,5-8个字符)" id="name" name="name">
    </div>
    <div class="row formControls">
      <input type="text" style="height:44px;width:300px" class="input-text" value="" placeholder="&nbsp;手机:" id="mobile" name="mobile">
    </div>
    <div class="row formControls">
      <input type="text" style="height:44px;width:170px" class="input-text" value="" placeholder="&nbsp;验证码(必填)" id="yzm" name="yzm">
      <a href=""><input style="background-color: black;width:100px;height:44px;color:#f2f2f2;border: 2px solid white" class="btn btn-primary radius fr" type="submit" value="获取验证码"></a>
    </div>
    <div class="row formControls">
      <input type="text" style="height:44px;width:300px" class="input-text" value="" placeholder="&nbsp;密码:" id="pass" name="pass">
    </div>
    <div class="row formControls">
      <input type="text" style="height:44px;width:300px" class="input-text" value="" placeholder="&nbsp;确认密码" id="confirm_pass" name="confirm_pass">
    </div>
    <div class="row formControls">
      <input type="text" style="height:44px;width:300px" class="input-text" value="" placeholder="&nbsp;邮箱(必填)" id="email" name="email">
    </div>
    <div class="row formControls">
      <div>
        <input style="background-color: black;width:300px;height:44px;color:#f2f2f2;border: 2px solid white" class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;注&nbsp;&nbsp;册&nbsp;&nbsp;">
      </div>
      <div class="row formControls" formControls>
      <p style="color:#000" class="fr">已有账号,<a style="text-decoration: none;color:#000;" href="<?php echo U('Home/Login/login');?>"><b>立即登录</b></a></p>
    </div>
    </div>

    

    
    </form>
  </div>
</div>
  
</body>
  <script type="text/javascript" src="/LGM1116/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script>  
  <script type="text/javascript" src="/LGM1116/Public/admin/lib/layer/2.1/layer.js"></script> 
  <script type="text/javascript" src="/LGM1116/Public/admin/lib/laypage/1.2/laypage.js"></script> 
  <script type="text/javascript" src="/LGM1116/Public/admin/lib/My97DatePicker/WdatePicker.js"></script> 
  <script type="text/javascript" src="/LGM1116/Public/admin/static/h-ui/js/H-ui.js"></script> 
  <script type="text/javascript" src="/LGM1116/Public/admin/static/h-ui.admin/js/H-ui.admin.js"></script> 
  <script type="text/javascript" src="/LGM1116/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
  <script type="text/javascript" src="/LGM1116/Public/admin/lib/layer/2.1/layer.js"></script> 
  <script type="text/javascript" src="/LGM1116/Public/admin/lib/icheck/jquery.icheck.min.js"></script> 
  <script type="text/javascript" src="/LGM1116/Public/admin/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script> 
  <script type="text/javascript" src="/LGM1116/Public/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
  <script type="text/javascript" src="/LGM1116/Public/admin/lib/jquery.validation/1.14.0/messages_zh.min.js"></script> 
  <script type="text/javascript" src="/LGM1116/Public/admin/static/h-ui/js/H-ui.js"></script> 
  <script type="text/javascript" src="/LGM1116/Public/admin/static/h-ui.admin/js/H-ui.admin.js"></script> 

<script>
$(function(){
  $('.skin-minimal input').iCheck({
    checkboxClass: 'icheckbox-blue',
    radioClass: 'iradio-blue',
    increaseArea: '20%'
  });
  
  $("#form-member-add").validate({
    rules:{
      name:{
            required: true,
            minlength:5,
            maxlength:12,
            remote: {
                url: "<?php echo U('confirm');?>",
                type: "post",
                dataType: "json",
                data: {
                    name: function () {
                        return $("#name").val();　　　　//这个是要验证的用户名
                    }
                },
                dataFilter: function (data) {　　　　//判断控制器返回的内容
                    if (data == "true") {
                        return true;
                    }
                    else {
                        return false;
                    }
                }
          }
    },

      mobile:{
        required:true,
        isMobile:true,
      },
      email:{
        required:true,
        email:true,
      },
      uploadfile:{
        required:true,
      },
      
    },
    messages: { 
// 注册用户名 
    name: { 
      remote:"该用户名已存在"
    }, 
  },
    onkeyup:false,
    focusCleanup:true,
    success:"valid",
    submitHandler:function(form){
      //$(form).ajaxSubmit();
      var index = parent.layer.getFrameIndex(window.name);
      //parent.$('.btn-refresh').click();
      parent.layer.close(index);
    }
  });
});
  </script>
</html>