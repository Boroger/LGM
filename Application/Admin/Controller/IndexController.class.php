<?php
namespace Admin\Controller;
use \Think\Controller;

class IndexController extends BaseController 
{
    public function index(){

        if ($_SESSION['state'] == 0) {
            $identity = "超级管理员";
        } else {
            $identity = "普通管理员";
        }
        $name = $_SESSION['name'];
        $this->assign('name',$name);
        $this->assign('identity',$identity);
   	    $this->display();
    }

    public function welcome()
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
}