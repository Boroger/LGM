<?php
namespace Home\Controller;
use Think\Controller;
class GroupController extends BaseController 
{
	public function index()
	{
		$gid = I('get.gid/d');
		if(empty($gid)){
			$this->redirect('community/index');
		}
		$this->assign('gid',$gid);
		$group = M('group')->where('id='.$gid)->select();

		$this->assign('group',$group[0]);
		$post = M('post');

		$list = $post->table('user u,post p')
					 ->where('u.id = p.uid and p.gid ='.$gid)
					 ->field('u.username as name ,p.id as id,p.content as content,p.title as title,p.comment as comment,p.ctime as ctime,p.glance as glance,p.likes as likes')
					 ->select();
		$this->assign('lists',$list);
	    // echo "<div class='content'>".htmlspecialchars_decode($list[0]['content'])."</div>";
        // echo $match[1]; 
        foreach ($list as $k => $v) {
            $id = $v['id'];
        	preg_match_all('/<img.*?src="(.*?)".*?>/',$list[$k]['content'],$array[$id]);
        }
      // var_dump($array);die;
        foreach ($array as $k => $v) {
        	foreach ($v[1] as $key => $val) {
        		 preg_match('/\/umeditor.*?g/',$val,$sub[$k][$key]);
        	}
        }

        foreach ($sub as $k => $v) {
        	foreach ($v as $ke => $va) {
        		$pic[$k][$ke] = $va[0];
        	}
        }

        $this->assign('pic',$pic);
		$this->display();
	}
}