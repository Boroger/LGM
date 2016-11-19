<?php 

namespace Admin\Controller;
use Think\Controller;
class AdminController extends BaseController
{
	// 管理员添加
	public function adminAdd()
	{	
        $role = M('role');
        $data = $role->select();
        // var_dump($data);
        // die;
        $this->assign('data',$data);
		$this->display();
	}
	public function adminDoAdd()
	{
        $_POST['date'] = date('Y-m-d,H:i:s',time());
        $admin = M('admin');
        if (!$admin->create()) {
            //如果创建数据失败,表示验证没有通过
            //输出错误信息 并且跳转
            $this->error($admin->getError());
        } else {
            //验证通过 执行添加操作
            //执行添加
            // 获取新创建adminID
            $adminid = $admin->add();         
            foreach ($_POST as $k => $v) {
                if(strncmp ($k,"roleid",6) == 0){
                    $dataList[] = array('adminid'=>$adminid,'roleid'=>$v);
                }
            }
            $admin_role = M('admin_role');
            // $role_perm->addAll($dataList);
            if ($admin_role->addAll($dataList) > 0) {
               $this->success('恭喜您,添加成功!', U('Admin/adminList'));
                // echo "恭喜您,添加成功!";
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
            if (M('admin_role')->where("adminid=$id")->delete() >0){
			$this->success('删除成功',U('adminList'));
            } else {
                $this->error('删除关联信息失败',U('adminList'));         
            }
		} else {
			$this->error('删除管理员失败',U('adminList'));
		}
	}

	// 管理员编辑
	public function adminEdit()
	{
        $adminid = I('get.id/d');
        $data = M('admin')->find($adminid);
        $list1 = M('admin_role')->where("adminid=$adminid")->select();
        foreach ($list1 as $k => $v) {
            $list2[] = $v['roleid'];
        }
        $list3 = M('role')->select();
        // var_dump($list1);
        // var_dump($list2);
        // var_dump($list3);
        // die;
        $this->assign('data',$data);//当前管理员信息
        $this->assign('list2',$list2);//当前管理员的角色id
        $this->assign('list3',$list3);//所有角色信息
		$this->display();
	}
    public function adminUpdate()
	{
		if (empty($_POST)) {
            $this->redirect('Admin/admin/adminEdit');
            exit;
        }
        $admin = M('admin');
        $admin_role = M('admin_role');
        if (!$admin->create() || !$admin_role->create()) {
            //如果创建数据失败,表示验证没有通过
            //输出错误信息 并且跳转
            $this->error($admin->getError());
            $this->error($admin_role->getError());
        } else {
            //验证通过 执行添加操作
            //先执行admin表的修改
            $adminid = I('post.id/d');
            // var_dump($roleid);
            // die;
            $admin->save(); 
            // 删除role_perm里原先关于此roleid的记录
            $admin_role->where("adminid=$adminid")->delete();
            // 全部重新创建
            foreach ($_POST as $k => $v) {
                if(strncmp ($k,"roleid",6) == 0){
                    $dataList[] = array('adminid'=>$adminid,'roleid'=>$v);
                }
            }
            if ($admin_role->addAll($dataList) > 0) {
               $this->success('恭喜您,修改成功!', U('Admin/adminList'));
                // echo "恭喜您,添加成功!";
            } else {
               $this->error('修改失败....');
            }
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
		$list = $perm->where($where)->select();
        $this->assign('list',$list);
		$this->display();	
	}
/***************************************************************************************/ 
	//角色管理主页 
	public function roleList()
	{
		$role = M('role');
		$total = $role->field('count(*)')->select();
		$total = $total[0]['count(*)'];
        $this->assign('totals',$total);
		// $list = $role->where($where)->page($num,5)->select();
		// $this->assign('total',ceil($total/5));
		$list = $role->where($where)->select();
        $this->assign('list',$list);
		$this->display();	
	}
	// 角色添加
	public function roleAdd()
	{
		$perm = M('perm');
		$list = $perm->select();
		$this->assign('list',$list);
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
            // 获取新创建roleID
        	$roleid = M('role')->add();        	
        	foreach ($_POST as $k => $v) {
        		if(strncmp ($k,"permid",6) == 0){
        			$dataList[] = array('roleid'=>$roleid,'permid'=>$v);
        		}
        	}
        	$role_perm = M('role_perm');
        	// $role_perm->addAll($dataList);
            if ($role_perm->addAll($dataList) > 0) {
               $this->success('恭喜您,添加成功!', U('Admin/roleList'));
            	// echo "恭喜您,添加成功!";
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
        $data = M('admin_role')->where("roleid=$id")->select();
        if (!empty($data)) {
            return false;
            exit;
        }
		if (M('role')->delete($id)>0) {
			    $this->success('删除成功',U('roleList'));
		} else {
			$this->error('删除角色失败',U('roleList'));
		}
	}
	//角色修改
	public function roleEdit()
	{
    $id = I('get.id/d');
		//读取所有权限
		// $perm = M('perm');
		// $list1 = $perm->select();
  //       $this->assign('list1',$list1);
        // 读取当前角色拥有权限
        $role_perm = M('role_perm');
        $data = $role_perm->where("roleid=$id")->field('permid')->select();
        foreach ($data as $k2 => $v2){
        	$list2[] = $v2['permid'];
        }
        $this->assign('list2',$list2);
        // 读取当前角色信息
        $list3 = M('role')->find($id);
        $this->assign('list3',$list3);
		$this->display();
 
		// var_dump($list1);
		// var_dump($list2);
		// var_dump($list3);

	}
    public function roleUpdate()
	{
		$role = M('role');
        $role_perm = M('role_perm');
		if (!$role->create() || !$role_perm->create()) {
            //如果创建数据失败,表示验证没有通过
            //输出错误信息 并且跳转
            $this->error($role->getError());
            $this->error($role_perm->getError());
        } else {
            //验证通过 执行添加操作
            //先执行role表的修改
        	$roleid = I('post.id/d');
            // var_dump($roleid);
            // die;
            $role->save(); 
            // 删除role_perm里原先关于此roleid的记录
            $role_perm->where("roleid=$roleid")->delete();
            // 全部重新创建
            foreach ($_POST as $k => $v) {
                if(strncmp ($k,"permid",6) == 0){
                    $dataList[] = array('roleid'=>$roleid,'permid'=>$v);
                }
            }
            if ($role_perm->addAll($dataList) > 0) {
               $this->success('恭喜您,修改成功!', U('Admin/roleList'));
                // echo "恭喜您,添加成功!";
            } else {
               $this->error('修改失败....');
            }
        }
	}
	// 角色管理页点击查看所属用户
  public function checkAdmin()
  {
    $roleid = I('get.id/d');
    // var_dump($roleid);
    // die;
    $admin_role = M('admin_role');
    $admin = M('admin');
    $data = $admin_role->where("roleid=$roleid")->select();
    foreach ($data as $k => $v) {
      $adminid = $v['adminid'];
      $list = $admin->field('name')->where("id=$adminid")->select();
      foreach ($list as $k2 => $v2) {
        $adminname[] = $v2['name'];
      }
    }
    // var_dump($adminname);
    // die;
    $this->assign('adminname',$adminname);
    $this->display();
  }

  // 角色管理页点击查看拥有权限
  public function checkPerm()
  {
    $roleid = I('get.id/d');
    $role_perm = M('role_perm');
    $perm = M('perm');
    $data = $role_perm->where("roleid=$roleid")->select();
    foreach ($data as $k => $v) {
      $permid = $v['permid'];
      $list = $perm->field('perm')->where("id=$permid")->select();
      foreach ($list as $k2 => $v2) {
        $permname[] = $v2['perm'];
      }
    }
    // var_dump($permname);
    // die;
    $this->assign('permname',$permname);
    $this->display();
  }
  // 管理员主页点击查看拥有角色
  public function checkRole()
  {
    $adminid = I('get.id/d');
    $admin_role = M('admin_role');
    $role = M('role');
    $data = $admin_role->where("adminid=$adminid")->select();
    foreach ($data as $k => $v) {
      $roleid = $v['roleid'];
      $list = $role->field('role')->where("id=$roleid")->select();
      foreach ($list as $k2 => $v2) {
        $rolename[] = $v2['role'];
      }
    }
    // var_dump($permname);
    // die;
    $this->assign('rolename',$rolename);
    $this->display();
  }
}



