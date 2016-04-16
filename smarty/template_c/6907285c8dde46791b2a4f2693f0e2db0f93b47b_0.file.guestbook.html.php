<?php /* Smarty version 3.1.27, created on 2016-04-16 14:26:01
         compiled from "smarty\template\guestbook.html" */ ?>
<?php
/*%%SmartyHeaderCode:180595711daf9b43b43_20252006%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6907285c8dde46791b2a4f2693f0e2db0f93b47b' => 
    array (
      0 => 'smarty\\template\\guestbook.html',
      1 => 1460707277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180595711daf9b43b43_20252006',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5711daf9bbcce9_61573232',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5711daf9bbcce9_61573232')) {
function content_5711daf9bbcce9_61573232 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '180595711daf9b43b43_20252006';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>guestbook</title>
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/guestbook.css">
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
					<h1>GUESTBOOK</h1>
					<div class="author divider">Message</div>
					<div class="details devider">
						<form action="#" method="post" class="form-horizontal">
							<fieldset>
								<legend>
									Please fill in the following information, and we will give you feedback as soon as possible. ( * is Required )
								</legend>
								<div class="form-group">
									<label for="firstName" class="col-md-2">First Name:</label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="firstName">
									</div>
									<div class="col-md-1 star">*</div>
									<label for="surName" class="col-md-2">Surname:</label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="surName">
									</div>
									<div class="col-md-1 star">*</div>
								</div>
								<div class="form-group">
									<label for="phone" class="col-md-2">Cell Phone:</label>
									<div class="col-md-3">
										<input type="number" class="form-control" id="phone">
									</div>
									<div class="col-md-1 star">*</div>
									<label for="company" class="col-md-2">Company:</label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="company">
									</div>
									<div class="col-md-1 star">*</div>
								</div>
								<div class="form-group">
									<label for="email" class="col-md-2">Email:</label>
									<div class="col-md-3">
										<input type="email" class="form-control" id="email">
									</div>
									<div class="col-md-1 star">*</div>
									<label for="city" class="col-md-2">City:</label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="city">
									</div>	
								</div>
								<div class="form-group">
									<label for="message" class="col-md-2">Message：</label>
									<div class="col-md-9">
										<textarea class="form-control" rows="7" id="message"></textarea>
									</div>
									<div class="col-md-1 star">*</div>
								</div>
								<div class="form-group mt30">
									<div class="col-md-offset-8 col-md-4">
										<input type="reset" class="btn btn-reset" value="Refill">
										<input type="submit" class="btn btn-confirm" value="Submit">
										<div class="cb"></div>
									</div>
								</div>
							</fieldset>
						</form>
						

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