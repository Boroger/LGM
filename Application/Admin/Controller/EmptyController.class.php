<?php
namespace Admin\Controller;
use \Think\Controller;

class EmptyController extends Controller
{
	public function _empty($name){
		echo "<h1>Controller 404</h1>";
	}
}
