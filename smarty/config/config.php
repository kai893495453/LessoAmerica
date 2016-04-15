<?php 
	date_default_timezone_set("PRC");
	$smarty = new Smarty;
	$smarty->setCompileDir("smarty/template_c");
	$smarty->caching = false;
	$smarty->setCacheLifetime(30);
	$smarty->setCacheDir("smarty/cache");
	$smarty->setTemplateDir("smarty/template");
	$smarty->setLeftDelimiter("{{");
	$smarty->setRightDelimiter("}}");
	include "common.fun.php";
?>