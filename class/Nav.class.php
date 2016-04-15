<?php 
	include 'DB.class.php';
	function nav(){
		return Nav::init("localhost","root","qingkai","lesso");
	}
	class Nav extends DB{}
?>