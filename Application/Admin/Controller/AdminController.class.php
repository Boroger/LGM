<?php 

namespace Admin\Controller;
use Think\Controller;
class AdminController extends BaseController
{
	// 管理员添加
	public function adminAdd()
	{	
		$this->display();
	}
	public function adminDoAdd()
	{
		// $_POST['date'] = NOW_TIME;
		$_POST['date'] = date('Y-m-d,H:i:s',time());
		$admin = M('admin');
		if (!$admin->create()) {
            //如果创建数据失败,表示验证没有通过
            //输出错误信息 并且跳转
            $this->error($admin->getError());
        } else {
            //验证通过 执行添加操作
            //执行添加
            if (M('admin')->add() > 0) {
               // $this->success('恭喜您,添加成功!', U('Index/index'));
            	echo "恭喜您,添加成功!";
            } else {
               $this->error('添加失败....');
            }
        }

	}
	// 管理员删除
	public function adminDel()
	{
		if (empty($_GET['id'])) {
			$this->redirect('Admin/admin/adminList');
		}
		$id = I('get.id/d');
		if (M('admin')->delete($id)>0) {
			$this->success('删除成功',U('adminList'));
		} else {
			$this->error('删除失败',U('adminList'));
		}
	}

	// 管理员编辑
	public function adminEdit()
	{
        $id = I('get.id/d');
        $data = M('admin')->find($id);
        $this->assign('data',$data);
		$this->display();
	}
    public function adminUpdate()
	{
		if (empty($_POST)) {
            $this->redirect('Admin/admin/adminEdit');
            exit;
        }
        $data = M('admin')->create();

        //执行修改
        if (M('admin')->save() > 0) {
            $this->success('恭喜您,修改成功!', U('adminList'));
        } else {
        	$this->error('修改失败....');
        }
	}

	// 修改启用状态
	public function adminChangeState()
	{	
		$id = I('get.id/d');
		$state = I('get.state/d');
		$admin = M("admin");
        $data = $admin->find($id);
        $state = $data['state'];
        if ($state == 1) {
    		$result = $admin->where("id = $id")->setField('state',0);
        }else{
        	$result = $admin->where("id = $id")->setField('state',1);
        }
    	if($result !== false){
            $this->redirect('adminList');
     	    // $this->success('恭喜您,修改成功!', U('adminList'));
	    }else{
	        $this->error('修改失败....');
	    }
	}

	//管理员列表主页
	public function adminList()
	{	
		$admin = M('admin');
		$total = $admin->field('count(*)')->select();
		$total = $total[0]['count(*)'];
        $this->assign('totals',$total);
		$list = $admin->where($where)->page($num,5)->select();
		// $lists = $admin->where($where)->select();
		// $total = count($lists);
		$this->assign('total',ceil($total/5));
        $this->assign('list',$list);
		$this->display();	
	}
	// 主页ajax分页
	public function adminListAjax()
	{
		$num = I('get.p/d');
		$where = I('get.name');
		$admin = M('admin');
		$lists = $admin->where($where)->select();
		$total = count($lists);
        $this->assign('total',$total);

		$total = ceil($total/5);
		$num = $num>$total?$total:$num;
		
		$list = $admin->where($where)->page($num,5)->select();
		$this->assign('list',$list);
		// $this->display(); 	
		$ajax = $this->fetch('admin/adminListAjax');
		$this->ajaxReturn($ajax);
	}
/***************************************************************************************/ 
	//权限管理主页 
	public function permList()
	{
		$perm = M('perm');
		$total = $perm->field('count(*)')->select();
		$total = $total[0]['count(*)'];
        $this->assign('totals',$total);
		$list = $perm->where($where)->page($num,5)->select();
		$this->assign('total',ceil($total/5));
        $this->assign('list',$list);
		$this->display();	
	}
	// 权限节点添加
	public function permAdd()
	{
		$this->display();
	}
	public function permDoAdd()
	{
		$perm = M('perm');
		if (!$perm->create()) {
            //如果创建数据失败,表示验证没有通过
            //输出错误信息 并且跳转
            $this->error($perm->getError());
        } else {
            //验证通过 执行添加操作
            //执行添加
            if (M('perm')->add() > 0) {
               // $this->success('恭喜您,添加成功!', U('Index/index'));
            	echo "恭喜您,添加成功!";
            } else {
               $this->error('添加失败....');
            }
        }
	}

	// 权限节点删除
	public function permDel()
	{
		if (empty($_GET['id'])) {
			$this->redirect('Admin/admin/permList');
		}
		$id = I('get.id/d');
		if (M('perm')->delete($id)>0) {
			$this->success('删除成功',U('permList'));
		} else {
			$this->error('删除失败',U('permList'));
		}
	}
	// 权限节点修改
	public function permEdit()
	{
        $id = I('get.id/d');
        $data = M('perm')->find($id);
        $this->assign('data',$data);
		$this->display();
	}
    public function permUpdate()
	{
		if (empty($_POST)) {
            $this->redirect('Admin/admin/permEdit');
            exit;
        }
        $data = M('perm')->create();

        //执行修改
        if (M('perm')->save() > 0) {
            $this->success('恭喜您,修改成功!', U('permList'));
        } else {
        	$this->error('修改失败....');
        }
	}

/***************************************************************************************/ 
	//角色管理主页 
	public function roleList()
	{
		$role = M('role');
		$total = $role->field('count(*)')->select();
		$total = $total[0]['count(*)'];
        $this->assign('totals',$total);
		$list = $role->where($where)->page($num,5)->select();
		$this->assign('total',ceil($total/5));
        $this->assign('list',$list);
		$this->display();	
	}
	// 角色添加
	public function roleAdd()
	{
		$this->display();
	}
	public function roleDoAdd()
	{
		$role = M('role');
		if (!$role->create()) {
            //如果创建数据失败,表示验证没有通过
            //输出错误信息 并且跳转
            $this->error($role->getError());
        } else {
            //验证通过 执行添加操作
            //执行添加
            if (M('role')->add() > 0) {
               // $this->success('恭喜您,添加成功!', U('Index/index'));
            	echo "恭喜您,添加成功!";
            } else {
               $this->error('添加失败....');
            }
        }
	}

	// 角色删除
	public function roleDel()
	{
		if (empty($_GET['id'])) {
			$this->redirect('Admin/admin/roleList');
		}
		$id = I('get.id/d');
		if (M('role')->delete($id)>0) {
			$this->success('删除成功',U('roleList'));
		} else {
			$this->error('删除失败',U('roleList'));
		}
	}
	//角色修改
	public function roleEdit()
	{
        $id = I('get.id/d');
        $data = M('role')->find($id);
        $this->assign('data',$data);
		$this->display();
	}
    public function roleUpdate()
	{
		if (empty($_POST)) {
            $this->redirect('Admin/admin/roleEdit');
            exit;
        }
        $data = M('role')->create();

        //执行修改
        if (M('role')->save() > 0) {
            $this->success('恭喜您,修改成功!', U('roleList'));
        } else {
        	$this->error('修改失败....');
        }
	}
	
}

