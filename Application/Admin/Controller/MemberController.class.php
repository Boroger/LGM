<?php 

namespace Admin\Controller;
use Think\Controller;
class MemberController extends AdminController
{   
    //会员主页  查
	public function member()
	{
        $total = M('user')->field('count(*)')->where('del=0')->select();
        $total = $total[0]['count(*)'];
        $this->assign('total',$total);
        $list = M('user')->where('del=0')->page(1,5)->select();
        $this->assign('list',$list);
		$this->display();
	}

    //搜索分页ajax
    public function showajax()
    {
        // if (!IS_AJAX) {
        //     $this->redirect('User/index','',3,'非法访问');
        // } else {
                $num = I('get.num/d');
                if(empty($num)){
                   $this->redirect('Member/member');
                }
                // $where = $_GET['title'];
                $where['username'] = array('like',"%".$_GET['title']."%");
                $where['del'] = 0;
                $user = M('user');
                $lists = $user->where($where)->select();
                $total = count($lists);
                $total = ceil($total/5);
                $num = $num>$total?$total:$num;
                

                $list = $user->where($where)->page($num,5)->select();
                $sql = $user->getLastSql();
                // $this->ajaxReturn($sql);die;
                $this->assign('list',$list);
                // $this->display();  
                $ajax = $this->fetch('Member/pageajax');
                $this->ajaxReturn($ajax);
        // }
        
    }

    // 添加页
    public function add()
    {
        $this->display();
    }

    //查看用户名是否存在ajax
    public function addajax()
    {
        if (!IS_AJAX) {
            $this->redirect('User/index','',3,'非法访问');
        } else {
            $username = $_GET['username'];
            $res = M('user')->field('id')->where("username='$username'")->find();
            if (!$res) {
                echo "true";
            } else {
                echo "false";
            }
        }
        
    }

    public function doadd()
    {   
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728 ;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Uploads/'; // 设置附件上传根目录
        $upload->savePath = '/member/'; // 设置附件上传（子）目录
        $info = $upload->uploadOne($_FILES['file-2']);

        if(!$info) {// 上传错误提示错误信息
            $_POST['pic'] = '/Public/home/image/head1.jpg';
        }else{// 上传成功
            $_POST['pic'] = '/Uploads'.$info['savepath'].$info['savename'];
        }
        $_POST['date'] = time();
        $user = M('user');
        if (!$user->create()) {
            $this->error($article->getError());
        } else {
            if (M('user')->add() > 0) {
               $this->success('恭喜您,添加成功!',U('member/member'));
            } else {
               $this->error('添加失败....');
            }
        }
    } 

    //停用ajax
    public function stopajax()
    {
        $id = I('get.num/d');
        $user = M('user');
        $state = $user->where('id='.$id)->field('state')->find();

        if ($state['state'] == '1') {
            $num = 0;
        } else {
            $num = 1;
        }
        $data['state'] = $num;
        $res = $user->where("id=".$id)->save($data);
        $this->ajaxReturn($res);

    }

    //ajax删除  把用户del状态改为1
    public function delajax()
    {
        $id = I('get.num/d');
        $user = M('user');
        $data['del'] = 1;

        if($user->where('id='.$id)->save($data) > 0){
            $this->ajaxReturn("删除的id为:$id");
        } else {
            $this->ajaxReturn("删除失败");
        }
    }

    //删除的会员
    public function del()
    {   
        $total = M('user')->field('count(*)')->where('del=1')->select();
        $total = $total[0]['count(*)'];
        $this->assign('total',$total);
        $list = M('user')->where('del=1')->page(1,5)->select();
        $this->assign('list',$list);
        $this->display();
    }

    public function showdellistajax()
    {
        $num = I('get.num/d');
        if(empty($num)){
           $this->redirect('Member/del');
        }
        // $where = $_GET['title'];
        $where['username'] = array('like',"%".$_GET['title']."%");
        $where['del'] = 1;
        $user = M('user');
        $lists = $user->where($where)->select();
        $total = count($lists);
        $total = ceil($total/5);
        $num = $num>$total?$total:$num;
        
        $list = $user->where($where)->page($num,5)->select();
        $sql = $user->getLastSql();
        // $this->ajaxReturn($sql);die;
        $this->assign('list',$list);
        // $this->display();  
        $ajax = $this->fetch('Member/showdellistajax');
        $this->ajaxReturn($ajax);
    }

    // public function delajax()
    // {
    //     $id = I('get.num/d');
    //     $user = M('user');
    //     if($user->delete($id) > 0){
    //         $this->ajaxReturn("删除的id为:$id");
    //     } else {
    //         $this->ajaxReturn("删除失败");
    //     }
    // }

    
    

}


