<?php /* Smarty version 3.1.27, created on 2016-04-15 15:50:57
         compiled from "smarty\template\global.html" */ ?>
<?php
/*%%SmartyHeaderCode:2794357109d615bff34_04240741%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78beb75bf4851ec6f29c194850d09ca4bf9a4eaa' => 
    array (
      0 => 'smarty\\template\\global.html',
      1 => 1460706616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2794357109d615bff34_04240741',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57109d6160a2c9_30125944',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57109d6160a2c9_30125944')) {
function content_57109d6160a2c9_30125944 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2794357109d615bff34_04240741';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Global Network</title>
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/global.css">
</head>
<body>
	<div class="container mAuto">
		<?php echo $_smarty_tpl->getSubTemplate ("include/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
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
					<h1>GLOBAL</h1>
					<div class="author divider">Network</div>
					<div class="details devider">
						<img src="images/global.png" alt="" class="imgs">
						<p class="pt40 detailInfos">LESSO has established a complete domestic sales network comprised of nearly 1,000 4S dealers and service stations. 
Our  overseas markets also have nearly 540 sales and service outlets in 14 countries.</p>
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