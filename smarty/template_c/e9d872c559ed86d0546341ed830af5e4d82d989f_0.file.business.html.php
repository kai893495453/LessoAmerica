<?php /* Smarty version 3.1.27, created on 2016-04-16 14:15:06
         compiled from "smarty\template\business.html" */ ?>
<?php
/*%%SmartyHeaderCode:126225711d86a688a08_00825829%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9d872c559ed86d0546341ed830af5e4d82d989f' => 
    array (
      0 => 'smarty\\template\\business.html',
      1 => 1460707287,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126225711d86a688a08_00825829',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5711d86a7b56d9_10330052',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5711d86a7b56d9_10330052')) {
function content_5711d86a7b56d9_10330052 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '126225711d86a688a08_00825829';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Our Business</title>
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/business.css">
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
					<h1>OUR BUSINESS</h1>
					<div class="author divider">Products</div>
					<div class="details devider">
						<div class="searchBox">
							<form action="" class="form-horizontal">
								<label for="search">Search</label>
								<input type="text" id="search" class="input-search">
								<input type="submit" value="GO" class="btn-go">
								<div class="jumpBox fr mr20 mt5">
									<span><span class="active">1</span>/6</span>
									<a href="" class="active">&gt;</a>
									<a href="">&lt;</a>
								</div>
							</form>
						</div>
						<ul class="productList">
							<li class="item">
								<img src="images/business/product00.png" alt="" class="productImg">
								<h2 class="productTitle">ASTM D2466</h2>
								<div class="infos">cNSF and cUPC available</div>
								<a href="#" class="a-more">Read more <span>&gt;</span></a>
							</li>
							<li class="item">
								<img src="images/business/product00.png" alt="" class="productImg">
								<h2 class="productTitle">ASTM D2466</h2>
								<div class="infos">cNSF and cUPC available</div>
								<a href="#" class="a-more">Read more <span>&gt;</span></a>
							</li>
							<li class="item lastItem">
								<img src="images/business/product00.png" alt="" class="productImg">
								<h2 class="productTitle">ASTM D2466</h2>
								<div class="infos">cNSF and cUPC available</div>
								<a href="#" class="a-more">Read more <span>&gt;</span></a>
							</li>
							<li class="item">
								<img src="images/business/product00.png" alt="" class="productImg">
								<h2 class="productTitle">ASTM D2466</h2>
								<div class="infos">cNSF and cUPC available</div>
								<a href="#" class="a-more">Read more <span>&gt;</span></a>
							</li>
							<li class="item">
								<img src="images/business/product00.png" alt="" class="productImg">
								<h2 class="productTitle">ASTM D2466</h2>
								<div class="infos">cNSF and cUPC available</div>
								<a href="#" class="a-more">Read more <span>&gt;</span></a>
							</li>
							<li class="item lastItem">
								<img src="images/business/product00.png" alt="" class="productImg">
								<h2 class="productTitle">ASTM D2466</h2>
								<div class="infos">cNSF and cUPC available</div>
								<a href="#" class="a-more">Read more <span>&gt;</span></a>
							</li>
							<li class="item">
								<img src="images/business/product00.png" alt="" class="productImg">
								<h2 class="productTitle">ASTM D2466</h2>
								<div class="infos">cNSF and cUPC available</div>
								<a href="#" class="a-more">Read more <span>&gt;</span></a>
							</li>
							<li class="item">
								<img src="images/business/product00.png" alt="" class="productImg">
								<h2 class="productTitle">ASTM D2466</h2>
								<div class="infos">cNSF and cUPC available</div>
								<a href="#" class="a-more">Read more <span>&gt;</span></a>
							</li>
							<li class="item lastItem">
								<img src="images/business/product00.png" alt="" class="productImg">
								<h2 class="productTitle">ASTM D2466</h2>
								<div class="infos">cNSF and cUPC available</div>
								<a href="#" class="a-more">Read more <span>&gt;</span></a>
							</li>
							<div class="cb"></div>
						</ul>
						<div class="skipBox">
							<a href="#">&lt;&lt;</a>
							<a href="#">&lt;</a>
							<a href="#">1</a>
							<a href="#" class="active">2</a>
							<a href="#">3</a>
							<a href="#">&gt;</a>
							<a href="#">&gt;&gt;</a>
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