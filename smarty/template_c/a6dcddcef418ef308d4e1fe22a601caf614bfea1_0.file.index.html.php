<?php /* Smarty version 3.1.27, created on 2016-04-16 14:11:15
         compiled from "smarty\template\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:133855711d783ce24f1_73372724%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6dcddcef418ef308d4e1fe22a601caf614bfea1' => 
    array (
      0 => 'smarty\\template\\index.html',
      1 => 1460707274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133855711d783ce24f1_73372724',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5711d783d47e19_73502231',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5711d783d47e19_73502231')) {
function content_5711d783d47e19_73502231 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '133855711d783ce24f1_73372724';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<div class="container mAuto">
		<?php echo $_smarty_tpl->getSubTemplate ("include/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php echo $_smarty_tpl->getSubTemplate ("include/banner.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<main class="main">
			<div class="row">
				<div class="col-md-7 col-md-offset-1 product">
					<h1 class="fl">OUR BUSINESS</h1>
					<a href="#" class="control">&gt;</a>
					<a href="#" class="control">&lt;</a>
					<div class="cb"></div>
					<ul class="productList">
						<li class="item">
							<a href="#"><img src="images/product/product01.png"></a>
							<div class="title">DWV Fittings</div>
							<a href="#" class="more">Read More <span>&gt;</span></a>
						</li>
						<li class="item">
							<a href="#"><img src="images/product/product01.png"></a>
							<div class="title">DWV Fittings</div>
							<a href="#" class="more">Read More <span>&gt;</span></a>
						</li>
						<li class="item lastItem">
							<a href="#"><img src="images/product/product01.png"></a>
							<div class="title">DWV Fittings</div>
							<a href="#" class="more">Read More <span>&gt;</span></a>
						</li>
						<div class="cb"></div>
					</ul>
				</div>
				<div class="col-md-3 vedio">
					<h1>VEDIO</h1>
					<video src="others/test.ogg" controls="controls" height="195px" preload="preload" width="243px"></video>
					<div class="details">LESSO AMERICA, INC. is a wholly owned subsidiary of ChinaLESSO ...</div>
				</div>
			</div>
			<div class="row bottom">
				<div class="col-md-7 col-md-offset-1 info">
					<img src="images/companyInfo.png" alt="">
					<div class="title">LESSO AMERICA, INC. </div>
					<div class="details">
						Based in Corona, CA, LESSO AMERICA, INC. is a wholly owned subsidiary of China LESSO Group Holdings Limited. LESSO America absorbed decades of field experience in the plumbing and irrigation field from its listed parent aleading player in the field.
					</div>
					<a href="#" class="more">Read More <span>&gt;</span></a>
					<div class="cb"></div>
				</div>
				<div class="col-md-3 aboutUs">
					<div class="item">
						<img src="images/company/company1.png">
						<div class="title">CHINA <span class="otherColor">LESSON</span></div>
						<div class="details">As China’s largest plastic pipes ...</div>
						<div class="cb"></div>
					</div>
					<div class="item lastItem">
						<img src="images/company/company1.png">
						<div class="title">CONTACT US</div>
						<div class="details">Any question please call our hotline...</div>
						<div class="cb"></div>
					</div>
				</div>
			</div>
		</main>
		<?php echo $_smarty_tpl->getSubTemplate ("include/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	</div>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-1.12.0.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>