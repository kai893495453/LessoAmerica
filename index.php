<?php 
	require 'class/DB.class.php';
	require 'smarty/libs/Smarty.class.php';
	require 'smarty/config/config.php';
	//获取请求的GET地址
	$control = @$_GET['c'];
	if(!$control){$control = "index";}
	define("IS_INDEX",true);
	//判断该文件是否存在
	if(!file_exists("control/{$control}.php")){
		//不存在就报错
		die("炸了。该页面不存在");
	}
	include("control/common.fun.php");
	include("control/{$control}.php");
	$smarty->display("{$control}.html");
?>