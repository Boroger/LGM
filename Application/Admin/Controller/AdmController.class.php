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
		$data = $admin->select();
		$total = $admin->field('count(*)')->select();
		$total = $total[0]['count(*)'];

        $this->assign('total',$total);
        $this->assign('list',$data);
		$this->display();
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
        // dump($data);
        // echo '<hr>';
        // die;
        //执行修改
        if (M('admin')->save() > 0) {
        	echo M('admin')->getLastSql();
        	// die;
           $this->success('恭喜您,修改成功!', U('admlist'));
        } else {
        	echo M('admin')->getLastSql();
        	// die;
        	$this->error('修改失败....');

        }
	}

	public function del()
	{

	}
}

