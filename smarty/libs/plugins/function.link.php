<?php 
	function smarty_function_link($params,$template){
		return "<a href='{$params['href']}' class='{$params['class']}'>{$params['name']}</a>";
	}
?>