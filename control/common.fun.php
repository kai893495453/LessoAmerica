<?php 
	//查导航
	$nav = db()->get_all("select * from nav where fid = 0");
	$smarty->assign("nav",$nav);
	$substr = substr($_SERVER['QUERY_STRING'],2);
	$strpos = strpos($substr,'&');//寻找位置
	$smarty->assign("url",substr($_SERVER['QUERY_STRING'],2,$strpos));

	//查轮播图
	$columnId = max(@$_GET['id'],1);
	$banner = db()->get_all("select imgSrc from `banner` where n_id = {$columnId}");
	$smarty->assign("banner",$banner);

	//查询左边子菜单标题
	$menuTitle = db()->get_one("select * from nav where id = {$columnId}");
	$smarty->assign("menuTitle",$menuTitle);

	//查左边子菜单列表
	$menu = db()->get_all("select * from nav where fid = {$columnId}");
	$smarty->assign("menu",$menu);

	$smarty->assign("columnId",$columnId);
	//无限级分类做面包屑导航
	function get_all_nav($fid){
		if(is_array($fid)){$fid=$fid['id'];}
		//通过当前id查fid是否为0.不是0就继续递归
		$nav = db()->get_all("select * from nav where id={$fid}");
		//判断数组
		if(is_array($nav)){
			foreach($nav as $key=>$val){
				echo "<li><a>{$val['title']}</a></li>";
				$nav[$key]['subnav']=get_all_nav($val['fid']);
			}
		}
		return $nav;
	}
	$smarty->registerPlugin("function","get_all_nav","get_all_nav");
?>