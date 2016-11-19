<?php
namespace Home\Controller;
use Think\Controller;
class CommunityController extends BaseController {

	public function index()
    {   
    	$group= M('group');
        $list = $group->where('cid = 0')->select();
        $this->assign('list',$list);
    	$this->display(); 
    }
    public function group(){
    	$c = I('get.cid/d');
        $cid = empty($c)?0:$c;
        $group = M('group');
        $list = $group->where('cid='.$cid)->select();
        var_dump($list);die;
        $this->assign('list',$list);
        $this->display('index');
    }
    public function enter()
    {
        
    }

}