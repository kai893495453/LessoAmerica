<?php /* Smarty version 3.1.27, created on 2016-04-15 15:59:13
         compiled from "smarty\template\product.html" */ ?>
<?php
/*%%SmartyHeaderCode:3083457109f510b8426_12860502%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '928206bad12ab695429c4b57a02a6b8b4643cd35' => 
    array (
      0 => 'smarty\\template\\product.html',
      1 => 1460707107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3083457109f510b8426_12860502',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57109f511027b3_99787998',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57109f511027b3_99787998')) {
function content_57109f511027b3_99787998 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3083457109f510b8426_12860502';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>产品介绍</title>
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/product.css">
</head>
<body>
	<div class="container mAuto">
		<header class="row header">
			<div class="col-md-3 col-md-offset-1 icon fl"><img src="images/logo.png" height="32" width="275" alt=""></div>
			<div class="col-md-7 navbar">
				<form action="#" class="navbar-form navbar-right">
					<div class="form-group">
						<input type="text" class="form-control searchInput" placeholder="Search">
						<button type="submit" class="searchBtn">
							<span class="glyphicon glyphicon-search"></span>
						</button>
						<div class="cb"></div>
					</div>
				</form>
				<div class="cb"></div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">HOME</a></li>
					<li><a href="#" class="active">COMPANY PROFILE</a></li>
					<li><a href="#">OUR BUSINESS</a></li>
					<li><a href="#">DOWNLOAD</a></li>
					<li><a href="#">CONTACT</a></li>
				</ul>
			</div>
		</header>
	</div>
	<main class="main">
		<img src="images/product/item/product0.png" alt="" class="itemImg">
		<div class="container mAuto">
			<div class="infosTitle row">
				<div class="active col-md-4 head">Description</div>
				<div class="col-md-4 head">Specifications</div>
				<div class="col-md-4 head lastItem">Contact Now</div>
			</div>
			<div class="infoDetails" id="Description">
				<h2>1Female Adapter (Hub × FIPT) </h2>
LESSO America ABS DWV fittings are cost-effective with elegant appearance, corrosion resistance, high flow capacity, low installation costs and third-party 
certification. They are used in drain, waste vent applications (non-pressure)
			</div>
			<div class="infoDetails hidden" id="Specifications">
				<h2>2Female Adapter (Hub × FIPT) </h2>
LESSO America ABS DWV fittings are cost-effective with elegant appearance, corrosion resistance, high flow capacity, low installation costs and third-party 
certification. They are used in drain, waste vent applications (non-pressure)
			</div>
			<div class="infoDetails hidden" id="Contact">
				<h2>3Female Adapter (Hub × FIPT) </h2>
LESSO America ABS DWV fittings are cost-effective with elegant appearance, corrosion resistance, high flow capacity, low installation costs and third-party 
certification. They are used in drain, waste vent applications (non-pressure)
			</div>
			<ul class="listInfos">
				<li class="productTitle">ASTM D2661</li>
				<li class="number">Part Number</li>
				<li class="size">Size(in)</li>
				<li class="mstr">Mstr Ctn</li>
				<li class="code">UPC Code</li>
				<div class="cb"></div>
				<li class="productTitle">CSA B181.1</li>
				<li class="number">LN101-012</li>
				<li class="size">1-1/4''</li>
				<li class="mstr">125</li>
				<li class="code">848154080062</li>
				<div class="cb"></div>
				<li class="productTitle">NSF/ANSI 14</li>
				<li class="number">LN101-015</li>
				<li class="size">1-1/2''</li>
				<li class="mstr">100</li>
				<li class="code">848154080079</li>
				<div class="cb"></div>
				<li class="productTitle">Size range 1-1/4'' to 4''</li>
				<li class="number">LN101-020</li>
				<li class="size">2</li>
				<li class="mstr">75</li>
				<li class="code">848154080086</li>
				<div class="cb"></div>
				<li class="productTitle">3-year limited warranty</li>
				<li class="number">LN101-030</li>
				<li class="size">3</li>
				<li class="mstr">30</li>
				<li class="code">848154080093</li>
				<div class="cb"></div>
				<li class="productTitle">Solvent cementing Threading </li>
				<li class="number">LN101-040</li>
				<li class="size">4</li>
				<li class="mstr">25</li>
				<li class="code">848154080109</li>
				<div class="cb"></div>
			</ul>
		</div>
	</main>
	<div class="container mAuto">
		<?php echo $_smarty_tpl->getSubTemplate ("include/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	</div>
</html><?php }
}
?>