<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$this->display();
    }
    //主页无限制加载 ajax
    public function indexajax()
    {
    	$num = I('get.num/d');
    	$ajax = $this->fetch('index/indexajax');
		$this->ajaxReturn($ajax);
    }


}

