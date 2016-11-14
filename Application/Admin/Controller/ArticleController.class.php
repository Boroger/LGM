<?php
namespace Admin\Controller;
use \Think\Controller;


class ArticleController extends AdminController 
{
    public function add(){
   		$this->display();
    }

    public function list()
    {
        $model = M('article');
        $total = $model->field('count(*)')->select();
		$total = $total[0]['count(*)'];
        $this->assign('total',$total);
    	$list = $model->select();
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

		if(!$info) {// 上传错误提示错误信息
		$this->error($upload->getError());
		}else{// 上传成功

	  //       $image = new \Think\Image();
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
	               $this->success('恭喜您,添加成功!',U('article/list'));
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
    		$this->redirect('Article/list');
    	}
    
    	$content = M('article')->field('content')->where('id='.$id)->find();

    	echo  "<div class='content'>".htmlspecialchars_decode($content['content'])."</div>";
    }
   public function xiaj()
   {
   	$id = I('get.id/d');
   	if(empty($id)){
    		$this->redirect('Article/list');
    }
    $state = M('article')->field('state')->where('id='.$id)->find();
    // var_dump($state);
    if($state['state'] == 0){
    	$data['id'] = $id;
    	$data['state'] = 1;
    	M('article')->save($data);
    }else{
    	$data['id'] = $id;
    	$data['state'] = 0;
    	M('article')->where('id='.$id)->save($data);
    }
    $this->redirect('Article/list');
    
   }   
   public function del()
   {
   	var_dump($_GET);
   }
}