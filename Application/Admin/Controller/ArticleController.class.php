<?php
namespace Admin\Controller;
use \Think\Controller;


class ArticleController extends BaseController 
{
    public function add()
    {
   		$this->display();
    }

    public function alist()
    {
      $model = M('article');
      $total = $model->field('count(*)')->select();
		  $total = $total[0]['count(*)'];
      $this->assign('total',$total);
    	$list = $model->page(1,3)->select();
      $this->assign('list',$list);
    	$this->display();
    }

    public function doadd()
    {
    	$upload = new \Think\Upload();// 实例化上传类
  		$upload->maxSize = 3145728 ;// 设置附件上传大小
  		$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
  		$upload->rootPath = './Uploads/'; // 设置附件上传根目录
  		$upload->savePath = '/article/'; // 设置附件上传（子）目录
  		$info = $upload->uploadOne($_FILES['bgpic']);
      dump($_FILES);die;

  		if(!$info) {// 上传错误提示错误信息
  		$this->error($upload->getError());
  		}else{// 上传成功

	    // $image = new \Think\Image();
			// $image->open('./Uploads'.$info['savepath'].$info['savename']);
			// //将图片裁剪为400x400并保存为corp.jpg
			// $image->thumb(150, 150)->save('./Uploads'. $info['savepath'].'o_'.$info['savename']);

			$data['bgpic'] = '/Uploads'.$info['savepath'].$info['savename'];
			$data['content'] =  htmlspecialchars($_POST['editorValue']);
			$data['title'] = $_POST['title'];
			$data['description'] = $_POST['description'];
			$data['ctime'] = date('y-m-d h:i:s',time());

	        // echo  "<div class='content'>".htmlspecialchars_decode($pic)."</div>";
	        // echo  "<div class='content'>".htmlspecialchars_decode($content)."</div>";
			$article = M('article');

			    if (!$article->create()) {
	            $this->error($article->getError());
	        } else {
	            if (M('article')->add($data) > 0) {
	               $this->success('恭喜您,添加成功!',U('article/alist'));
	            } else {
	               $this->error('添加失败....');
	            }
	        }

	    }
    }

    public function content()
    {
    	$id = I('get.id/d');
    	if(empty($id)){
    		$this->redirect('Article/alist');
    	}
    
    	$content = M('article')->field('content')->where('id='.$id)->find();

    	echo  "<div class='content'>".htmlspecialchars_decode($content['content'])."</div>";
    }
  
     public function del()
     {
        $id = I('get.id/d');
        if(empty($id)){
          $this->redirect('alist');
          exit;
        }
        if(M('article')->delete($id) > 0){
          $this->success('删除成功');
        }else{
          $this->error('删除失败');
        }
    }
     
     //下架ajax
     public function xajax()
     {
    
        $id = I('get.p/d');
        $num = I('get.num/d');
        $where = $_GET['title'];
        if(empty($id) || empty($num)){

          $this->redirect('Article/alist');
        }
        $state = M('article')->field('state')->where('id='.$id)->find();
        if($state['state'] == 0){

          $data['id'] = $id;
          $data['state'] = 1;
          M('article')->save($data);
        }else{

          $data['id'] = $id;
          $data['state'] = 0;
          M('article')->where('id='.$id)->save($data);
        }
        $model = M('article');
        $total = $model->field('count(*)')->select();
        $total = $total[0]['count(*)'];
        $this->assign('total',$total);
        $list = $model->page($num,3)->where($where)->select();
        $this->assign('list',$list);
        $ajax = $this->fetch('Article/xajax');
        $this->ajaxReturn($ajax);
     }
     //搜索分页ajax
     public function lajax()
     {
       $num = I('get.num/d');
       if(empty($num)){
          $this->redirect('Article/alist');
       }
       $where = $_GET['title'];
       $article = M('article');
       $lists = $article->where($where)->select();
       $total = count($lists);
       $this->assign('total',$total);

       $total = ceil($total/3);
       $num = $num>$total?$total:$num;
        
       $list = $article->where($where)->page($num,3)->select();
       $sql = $article->getLastSql();

       $this->assign('list',$list);
        // $this->display();  
       $ajax = $this->fetch('article/lajax');
       $this->ajaxReturn($ajax);
              
     }
     public function edit()
     {
      $id = I('get.id/d');
      if(empty($id)){
          $this->redirect('Article/alist');
      }
      $data = M('article')->where('id='.$id)->find();
      $this->assign('v',$data);
      $this->display();
     }
     
     public function update()
     {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728 ;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Uploads/'; // 设置附件上传根目录
        $upload->savePath = '/article/'; // 设置附件上传（子）目录
        $info = $upload->uploadOne($_FILES['bgpic']);
        // $image = new \Think\Image();
        // $image->open('./Uploads'.$info['savepath'].$info['savename']);
        // //将图片裁剪为400x400并保存为corp.jpg
        // $image->thumb(150, 150)->save('./Uploads'. $info['savepath'].'o_'.$info['savename']);
        $data['id'] = $_POST['id'];
        
        if(!$info){
          $data['bgpic'] = $_POST['bgpic'];
        }else{
          $data['bgpic'] = '/Uploads'.$info['savepath'].$info['savename'];
        }
          $data['content'] =  htmlspecialchars($_POST['editorValue']);
          $data['title'] = $_POST['title'];
          $data['description'] = $_POST['description'];
          $data['ctime'] = date('y-m-d h:i:s',time());
          // echo  "<div class='content'>".htmlspecialchars_decode($pic)."</div>";
          // echo  "<div class='content'>".htmlspecialchars_decode($content)."</div>";
          // var_dump($_POST);
          // var_dump($data);die;
          $article = M('article');

          if (!$article->create()) {
                  $this->error($article->getError());
              } else {
                  if (M('article')->save($data) > 0) {
                     $this->success('恭喜您,修改成功!',U('article/alist'));
                  } else {
                     $this->error('修改失败....');
                  }
              }

        
     }





}