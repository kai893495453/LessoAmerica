<?php /* Smarty version 3.1.27, created on 2016-04-15 17:18:56
         compiled from "smarty\template\download.html" */ ?>
<?php
/*%%SmartyHeaderCode:230715710b200b8a744_76081985%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10c682b5597c8a6d9c721ec048e296a7773c6174' => 
    array (
      0 => 'smarty\\template\\download.html',
      1 => 1460707281,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '230715710b200b8a744_76081985',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5710b200c2a9f4_88583251',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5710b200c2a9f4_88583251')) {
function content_5710b200c2a9f4_88583251 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '230715710b200b8a744_76081985';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>download</title>
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/download.css">
</head>
<body>
	<div class="container mAuto">
		<?php echo $_smarty_tpl->getSubTemplate ("include/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php echo $_smarty_tpl->getSubTemplate ("include/banner.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<main class="row main">
			<div class="col-md-3">
				<?php echo $_smarty_tpl->getSubTemplate ("include/menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			</div>
			<div class="col-md-9">
				<?php echo $_smarty_tpl->getSubTemplate ("include/breadcrumbs.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

				<div class="content">
					<h1>DOWNLOAD</h1>
					<div class="author divider">Resource</div>
					<div class="details devider">
						<div class="row downloadBtn">
							<div class="col-md-4">
								<a href="#">
									<img src="images/button/download00.png" alt="">
									Company Brochure
								</a>
							</div>
							<div class="col-md-4">
								<a href="#">
									<img src="images/button/download01.png" alt="">
									Product Picture Album
								</a>
							</div>
							<div class="col-md-4">
								<a href="#">
									<img src="images/button/download02.png" alt="">
									Price List
								</a>
							</div>
						</div>
						<div class="row downloadBtn">
							<div class="col-md-4">
								<a href="#">
									<img src="images/button/download03.png" alt="">
									Technical Manual
								</a>
							</div>
							<div class="col-md-4">
								<a href="#">
									<img src="images/button/download04.png" alt="">
									Certification information
								</a>
							</div>
							<div class="col-md-4">
								<a href="#">
									<img src="images/button/download05.png" alt="">
									More
								</a>
							</div>
						</div>
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