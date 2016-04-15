<?php 
	require 'class/DB.Class.php';
	//查导航
	$nav = db()->get_all("select * from nav where fid = 0");
	$smarty->assign("nav",$nav);
	$smarty->assign("url",substr($_SERVER['DOCUMENT_URI'],1));

	//查轮播图
	$columnId = max(@$_GET['id'],1);
	$banner = db()->get_all("select imgSrc from `banner` where n_id = {$columnId}");
	$smarty->assign("banner",$banner);

?>