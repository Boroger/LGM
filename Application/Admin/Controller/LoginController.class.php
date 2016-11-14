<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller
{
    
    public function login()
    {
   	    $this->display();
    }
    public function yzm()
    {
        $Verify = new \Think\Verify();
        $Verify->fontSize = 16;
        $Verify->length = 4;
        $Verify->codeSet = '0123456789';
        $Verify->imageW = 100;
        $Verify->imageH = 40;
        $Verify->entry();
    }
    public function dologin()
    {
    
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $yzm = $_POST['yzm'];


    $admin = M('admin');
    //把用户状态 传到session；
    $state = $admin->field('state')->where("name='$name'")->find();
    session('state',$state['state']);
    session('name',"$name");
    // var_dump($_SESSION);
    // die;

    //登陆判断处理
    //检查验证码
    $verify = new \Think\Verify();    
    $res = $verify->check($yzm);
    
    $data = $admin->where("name='$name'")->find();
    if ($data['id'] > 0) {
        $pwd = $admin->field('pass')->where("name='$name'")->find();
        if ($pwd['pass'] === $pass) {
            if ($res) {
                $this->redirect('Index/index');
            } else {
                $this->error('验证码有误', U('Login/login'),3);

            }
        } else {
        $this->error('密码有误', U('Login/login'),3);
          
        }
    } else {
        $this->error('账号有误', U('Login/login'),3);    
    }
     // $this->display('Index/index');
    }

    
    public function logout()
    {
        session(null);
        header('Location: Login/login');
    }

}