<?php 
namespace Admin\Model;
use \Think\Model;

class UserModel extends Model
{
    protected $_validate = array(
        //array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]),
        //在新增时验证name是否唯一
        array('name','checkName','帐号错误！',1,'function',4),
        array('password','checkPwd','密码错误！',1,'function',4),
    );

}


