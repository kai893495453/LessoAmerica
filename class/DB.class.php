<?php 
	function db(){
		return DB::init("localhost","root","qingkai","lesso");
	}
	class DB{
		private $host = "";
		private $username = "";
		private $password = "";
		private $charset = "";
		private $link = "";
		public static $self;
		public static function init($host,$username,$password,$db="",$charset="utf8"){
			if(!(self::$self instanceof DB)){
				self::$self = new DB($host,$username,$password,$db,$charset);
			}
			return self::$self;
		}
		private function __construct($host,$username,$password,$db,$charset="utf8"){
			$this->host = $host;
			$this->username = $username;
			$this->password = $password;
			$this->charset = $charset;
			$this->connect();
			if($db){
				mysqli_select_db($this->link,$db);
			}
			if($charset){
				$this->query("set names {$charset}");
			}
		}
		function connect(){
			$this->link = mysqli_connect($this->host,$this->username,$this->password);
			if(!($this->link)){
				showMessage("数据库连接失败");
				die;
			}
		}
		function showMessage($msg=""){
			echo $msg;
		}
		function query($sql){
			if(@$_GET['debug']){echo $sql;}
			$d = mysqli_query($this->link,$sql);
			if(!$d){
				$this->showMessage("炸了！--->".$sql);
			}
			return $d;
		}
		function get_one($sql){
			$d = $this->query($sql);
			return mysqli_fetch_array($d);
		}
		function get_all($sql){
			$d = $this->query($sql);
			while($arr = mysqli_fetch_array($d)){
				$arrs[] = $arr;
			}
			return $arrs;
		}
	}
?>