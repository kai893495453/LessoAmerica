<?php /* Smarty version 3.1.27, created on 2016-04-16 14:23:56
         compiled from "smarty\template\LESSO_Americal.html" */ ?>
<?php
/*%%SmartyHeaderCode:152285711da7cdeec19_92182237%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '977cfc8b6608ad6ae135f03e88dd5ff7b3190f30' => 
    array (
      0 => 'smarty\\template\\LESSO_Americal.html',
      1 => 1460707270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152285711da7cdeec19_92182237',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5711da7cef47c6_49487058',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5711da7cef47c6_49487058')) {
function content_5711da7cef47c6_49487058 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '152285711da7cdeec19_92182237';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>America LESSO</title>
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/company.css">
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
					<h1>LESSO</h1>
					<div class="author divider">America,INC.</div>
					<div class="title">LESSO AMERICA, INC.  </div>
					<div class="details devider"><img src="images/company/company2.png" alt="" align="right" class="pageImg">
						Based in Corona, CA, LESSO AMERICA, INC. is a wholly owned subsidiary of China LESSO Group Holdings Limited. LESSO America absorbed decades of field experience in the plumbing and irrigation field from its listed parent, a leading player in the field.To sustain its flawless plastic injection-molded product line and sales network, LESSO America manufactures and delivers high-quality plastic fittings with the latest injection mold tools and technology  
						through distribution centers from coast to coast. With 100% dedication and commitment, LESSO  America is leveraging the inherited success of its mother company’s model to provide an outstanding customer experience for our clients.
						<div class="title">QUALITY</div>
						LESSO America ’s plastic fittings line is renowned worldwide for its superior quality, which complies with cNSFus and cUPC certifications, and exceeds the requirements of ASTM standards.
						<div class="title">REFERENTIAL STANDARDS(PVC DWV AND ABS DWV)</div>
						ASTM D 2466 Standard Specification for Poly(Vinyl Chloride) (PVC) Plastic Pipe Fittings, Schedule 40
	ASTM D 2665 Standard Specification for Poly(Vinyl Chloride)(PVC) Plastic Drain, Waste, and Vent Pipe and Fittings
	ASTM D 2661 Standard Specification for Acrylonitrile-Butadiene-Styrene(ABS) Plastic Drain,Waste and Vent Pipe and Fittings
					</div>
					<div class="productList pt40 row">
						<div class="col-md-4"><a href="#"><img src="images/company/America/company00.png" alt=""></a></div>
						<div class="col-md-4"><a href="#"><img src="images/company/America/company01.png" alt=""></a></div>
						<div class="col-md-4"><a href="#"><img src="images/company/America/company02.png" alt=""></a></div>
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