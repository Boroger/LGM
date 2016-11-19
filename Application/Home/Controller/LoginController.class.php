<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {

	public function login()
    {
    	$this->display();
    }

    public function dologin()
    {
        if ($_POST['phone'] == '' || $_POST['password'] =='') {
            $this->redirect('Login/login');exit;
        }
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $user = M('user');
        $data = $user -> where(array('phone'=> $phone )) -> find();


        if (!$data) {
            $this->error('用户不存在!请注册',U('Register/register'));
            exit;
        }
        if(!$data['state'] = "1") {
            $this->error('非法用户，请联系管理员后，登录',U('Register/register'));
            exit;
        }
        //验证密码
        if ($data['password'] != $password) {
            $this->error('您输入的密码不正确');
            exit;
        } else {
            //把用户信息添加到session
            $_SESSION['user_id'] = $data['id'];
            $_SESSION['user_state'] = $data['state'];
            $_SESSION['user_username'] = $data['username'];
            $this -> redirect('Index/index');
        }
    }

    public function logout()
    {
        $_SESSION['user_id'] = '';
        $_SESSION['user_state'] = '';
        $_SESSION['user_username'] = '';
        $this->redirect('Index/index'); 
    }

}