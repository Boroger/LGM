<?php
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller {
	public function register()
    {
    	$this->display();
    }


    //手机号是否存在ajax
    public function confirm()
    {	
    	// if (!IS_AJAX) {
     //        $this->redirect('User/index','',3,'非法访问');
     //    } else {
            $phone = $_GET['phone'];
            $res = M('user')->field('id')->where("phone='$phone'")->find();
            if (!$res) {
                echo "true";
            } else {
                echo "false";
            }
        // }
    }

    public function doregister()
    {   
        $user = M('user');
        if (!$user->create()) {
            $this->error($article->getError());
        } else {
            if (M('user')->add() > 0) {
               $this->success('恭喜您,添加成功!',U('Index/login'));
            } else {
               $this->error('添加失败....');
            }
        }

    }

    function get_info()
    {
        $to = $_GET['phone_mob'];
        //主帐号,对应开官网发者主账号下的 ACCOUNT SID
        $accountSid= '8aaf0708586c434001586c626b890008';

        //主帐号令牌,对应官网开发者主账号下的 AUTH TOKEN
        $accountToken= '6a3167601b4940fcafe471b1719cfe13';

        //应用Id，在官网应用列表中点击应用，对应应用详情中的APP ID
        //在开发调试的时候，可以使用官网自动为您分配的测试Demo的APP ID
        $appId='8aaf0708586c434001586c626c41000c';

        //请求地址
        //沙盒环境（用于应用开发调试）：sandboxapp.cloopen.com
        //生产环境（用户应用上线使用）：app.cloopen.com
        // $serverIP='app.cloopen.com';
        $serverIP='sandboxapp.cloopen.com';


        //请求端口，生产环境和沙盒环境一致
        $serverPort='8883';

        //REST版本号，在官网文档REST介绍中获得。
        $softVersion='2013-12-26';

         // 初始化REST SDK
         // global $accountSid,$accountToken,$appId,$serverIP,$serverPort,$softVersion;
        $rest = new \Org\Util\REST($serverIP,$serverPort,$softVersion);die;
        $rest->setAccount($accountSid,$accountToken);
        $rest->setAppId($appId);

         // 发送模板短信
        echo "Sending TemplateSMS to $to <br/>";
        $result = $rest->sendTemplateSMS($to,'123',1);
        if($result == NULL ) {
            echo "result error!";
            // break;
        }
        if($result->statusCode!=0) {
            echo "error code :" . $result->statusCode . "<br>";
            echo "error msg :" . $result->statusMsg . "<br>";
            //TODO 添加错误处理逻辑
        }else{
            echo "Sendind TemplateSMS success!<br/>";
            // 获取返回信息
            $smsmessage = $result->TemplateSMS;
            echo "dateCreated:".$smsmessage->dateCreated."<br/>";
            echo "smsMessageSid:".$smsmessage->smsMessageSid."<br/>";
             //TODO 添加成功处理逻辑
        }
            get_info("15851936580",array('6532','2'),"1");//手机号码，替换内容数组，模板ID

    }

    //Demo调用
            //**************************************举例说明***********************************************************************
            //*假设您用测试Demo的APP ID，则需使用默认模板ID 1，发送手机号是13800000000，传入参数为6532和5，则调用方式为           *
            //*result = sendTemplateSMS("13800000000" ,array('6532','5'),"1");                                                                        *
            //*则13800000000手机号收到的短信内容是：【云通讯】您使用的是云通讯短信模板，您的验证码是6532，请于5分钟内正确输入     *
            //*********************************************************************************************************************
            // sendTemplateSMS("15851936580",array('6532','2'),"1");//手机号码，替换内容数组，模板ID
	
}