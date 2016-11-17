<?php
namespace Admin\Controller;
use \Think\Controller;

class 	GroupController extends BaseController 
{
   public function alist(){

	  $model = M('group');
    $total = $model->field('count(*)')->select();
	  $total = $total[0]['count(*)'];
    $this->assign('total',$total);
	  $list = $model->page(1,3)->select();
    $this->assign('list',$list);
	  $this->display();
   }
   
   public function add()
   {
  
   	$this->display('Group/add');
   }
   public function insert()
   {
	    $upload = new \Think\Upload();// 实例化上传类
  		$upload->maxSize = 3145728 ;// 设置附件上传大小
  		$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
  		$upload->rootPath = './Uploads/'; // 设置附件上传根目录
  		$upload->savePath = '/group/'; // 设置附件上传（子）目录
  		$infob = $upload->uploadOne($_FILES['bgpic']);
  		$infol = $upload->uploadOne($_FILES['logo']);
  		if(!$infob) {// 上传错误提示错误信息

	  	   $this->error('背景图片'.$upload->getError());
	  		exit;
  		}
  		if(!$infol) {
  			$this->error('小组Logo'.$upload->getError());
	  		exit;
  		}

  		$data['name'] = $_POST['name'];
  		$data['description'] = $_POST['description'];
  		$data['bgpic'] = '/Uploads'.$infob['savepath'].$infob['savename'];
  		$data['logo'] = '/Uploads'.$infol['savepath'].$infol['savename'];
  		$data['ctime'] = date('y-m-d h:i:s',time());
        
        $group = M('group');

  		if (!$group->create()) {
  	        $this->error($group->getError());
  	    } else {
  	        if ($group->add($data) > 0) {
  	           $this->success('恭喜您,添加成功!','alist');
  	        	  // $this->redirect('group/list');
  	        	// $this->redirect('group/list','', 1,'页面跳转中...');
  	        } else {
  	           $this->error('添加失败....');
  	        }
  	     }
    }

    public function lajax()
    {
      $num = I('get.num/d');
       if(empty($num)){
          $this->redirect('group/alist');
       }
       $where = $_GET['group'];
       // Global $pnum;
       // $pnum = empty($_GET['pnum'])?3:$_GET['pnum'];
       $article = M('group');
       $lists = $article->where($where)->select();
       // $this->ajaxReturn($where);
       // die;
       $total = count($lists);
       $this->assign('total',$total);

       $total = ceil($total/3);
       $num = $num>$total?$total:$num;
        
       $list = $article->where($where)->page($num,3)->select();
       // $sql = $article->getLastSql();

       $this->assign('list',$list);
      
       $ajax = $this->fetch('group/lajax');
       $this->ajaxReturn($ajax);
    }
    // public function page()
    // {
    //    $where = $_GET['group'];
    //    $pnum = $_GET['pnum'];
    //    $num = I('get.num/d');
    //    $article = M('group');
    //    $lists = $article->where($where)->select();
    //    $total = count($lists);
    //    $list = $article->where($where)->page($num,$pnum)->select();
    //    $this->assign('select',$pnum);
    //    $this->assign('total',$total);
    //    $this->assign('list',$list);
    //    $this->display('Group/list');
       
    // }
    public function image()
    {
      $id = $_GET['id'];
      $state = $_GET['state'];
      if($state == 2){

        $bgpic = M('group')->field('bgpic')->where('id='.$id)->find();
        $this->assign('v',$bgpic['bgpic']);
        $this->display();
      }else{

        $logo = M('group')->field('logo')->where('id='.$id)->find();
        $this->assign('v',$logo['logo']);
        $this->display();
      }
    }
    public function edit()
    {
      $id = I('get.id/d');
      if(empty($id)){
        // $this->redirect('group/list');
        echo '访问错误';
        exit;
      }  
     
      $list = M('group')->where('id='.$id)->find();
      $this->assign('list',$list);
      $this->display('edit');
    }
    public function update()
    {
      $upload = new \Think\Upload();// 实例化上传类
      $upload->maxSize = 3145728 ;// 设置附件上传大小
      $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
      $upload->rootPath = './Uploads/'; // 设置附件上传根目录
      $upload->savePath = '/group/'; // 设置附件上传（子）目录
      $infob = $upload->uploadOne($_FILES['bgpic']);
      $infol = $upload->uploadOne($_FILES['logo']);
      if(!$infob) {// 上传错误提示错误信息
        $data['bgpic'] = $_POST['bgpic'];
      }else{
        $data['bgpic'] = '/Uploads'.$infob['savepath'].$infob['savename'];
      }
      if(!$infol) {
        $data['logo'] = $_POST['logo'];
      }else{
        $data['logo'] = '/Uploads'.$infol['savepath'].$infol['savename'];
      }
      $data['id'] = $_POST['id'];
      $data['name'] = $_POST['name'];
      $data['description'] = $_POST['description'];
      $data['ctime'] = date('y-m-d h:i:s',time());

      $article = M('group');

        if (!$article->create()) {
                $this->error($article->getError());
            } else {
                if (M('group')->save($data) > 0) {
                  $this->success('修改成功',U('alist'));
                } else {
                   $this->error('修改失败....');
                }
            }

    }
    public function del()
    {
      $id = I('get.id/d');
      if(empty($id)){
        $this->redirect('alist');
        exit;
      }
      if(M('group')->delete($id) > 0){
        $this->success('删除成功',U('alist'));
      }else{
        $this->error('删除失败');
      }
    }
}