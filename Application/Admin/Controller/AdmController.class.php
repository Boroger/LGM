<?php 

namespace Admin\Controller;
use Think\Controller;
class AdmController extends AdminController
{

	public function add()
	{	
		$this->display();
	}

	public function doadd()
	{
		$admin = M('admin');
		if (!$admin->create()) {
            //如果创建数据失败,表示验证没有通过
            //输出错误信息 并且跳转
            $this->error($admin->getError());
        } else {
            //验证通过 执行添加操作
            //执行添加
            if (M('admin')->add() > 0) {
               $this->success('恭喜您,添加成功!', U('Index/index'));
            } else {
               $this->error('添加失败....');
            }
        }

	}

	//管理员列表
	public function admlist()
	{	
		$admin = M('admin');
		$total = $admin->field('count(*)')->select();
		$total = $total[0]['count(*)'];
        $this->assign('totals',$total);
		$list = $admin->where($where)->page($num,2)->select();
		$lists = $admin->where($where)->select();
		$total = count($lists);
		$this->assign('total',$total/2);
        $this->assign('list',$list);
		$this->display();
		
	}

	public function listajax()
	{
		// $num = $_GET['p'];
		$num = I('get.p/d');
		$where = $_GET['name'];
		$admin = M('admin');
		$lists = $admin->where($where)->select();
		$total = count($lists);
        $this->assign('total',$total);

		$total = ceil($total/2);
		$num = $num>$total?$total:$num;
		
		$list = $admin->where($where)->page($num,2)->select();
		$this->assign('list',$list);
		// $this->display(); 	
		$ajax = $this->fetch('adm/listajax');
		$this->ajaxReturn($ajax);
	}

	//编辑页面
	public function edit()
	{
        $id = I('get.id/d');
        $data = M('admin')->find($id);
        $this->assign('data',$data);
		$this->display();
	}
	//执行修改
    public function update()
	{
		if (empty($_POST)) {
            $this->redirect('Admin/adm/add');
            exit;
        }
        $data = M('admin')->create();

        //执行修改
        if (M('admin')->save() > 0) {
           $this->success('恭喜您,修改成功!', U('admlist'));
        } else {
        	$this->error('修改失败....');
        }
	}

	public function del()
	{
		if (empty($_GET['id'])) {
			$this->redirect('Admin/adm/add');
		}
		$id = I('get.id/d');
		if (M('admin')->delete($id)>0) {
			$this->success('删除成功',U('admlist'));
		} else {
			$this->error('删除失败',U('admlist'));
		}
	}

	public function permission()
	{
		$this->display();
	}
	
}

