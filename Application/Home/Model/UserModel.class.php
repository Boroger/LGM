<?php
namespace Home\Model;
use \Think\Model;

class UserModel extends Model
{
	   protected $pk = 'id';
	   
	   protected $_validate = array(
	    //array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]),
	    //在新增时验证name是否唯一
	    array('name','','用户名已存在!!ヽ(o_ _)o摔倒',0,'unique',1),
	);

}
