<?php
namespace Admin\Controller;
use \Think\Controller;

class AdminController extends Controller
{
	
   public function _initialize()
   {
   	   date_default_timezone_set('PRC');
	   if(empty($_SESSION['name']))
	        {
	             $this->redirect('Login/login');
	             exit;
	        }
    }

	public function _empty($name)
	{
		echo "<h1>404</h1>";
	}
}