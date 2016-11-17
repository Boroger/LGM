<?php
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller {
	public function register()
    {
    	$this->display();
    }



    //有了前台用户表后修改
    public function confirm()
    {	
    	$name = $_POST['name'];
    	if ($name == "admin") {
    		echo "flase";
    	}
    	
    }
	
}