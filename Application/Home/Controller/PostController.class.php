<?php
namespace Home\Controller;
use Think\Controller;
class PostController extends BaseController 
{
	public function index()
	{
		$this->display();
	}
	public function add()
	{
		// $gid = I('get.gid/d');
		// if(empty($gid)){
		// 	$this->redirect('group/index');
		// }
		$group = M('group');
		$data = $group->field('id,name')->select();
	    $this->assign('oppo',$data);
		// $this->assign('gid',$gid);
		$this->display();
	}
	public function insert()
	{
	   $data['title'] = $_POST['title'];
	   $data['gid'] = $_POST['gid'];
	   $data['content'] = $_POST['editorValue'];

	   $post = M('post');
       if ($post->add($data) > 0) {
               $this->success('帖子发表成功!',U('group/index',array('gid'=>$_POST['gid'])));
            } else {
               $this->error('发帖失败....');
            }
		
	}
}