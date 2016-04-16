<?php /* Smarty version 3.1.27, created on 2016-04-16 14:25:36
         compiled from "smarty\template\include\header.php" */ ?>
<?php
/*%%SmartyHeaderCode:194615711dae0337501_17903735%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db5852fb212cd76723249e20fd7cd5b6612b06d3' => 
    array (
      0 => 'smarty\\template\\include\\header.php',
      1 => 1460787933,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194615711dae0337501_17903735',
  'variables' => 
  array (
    'nav' => 0,
    'val' => 0,
    'menuTitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5711dae039ce21_98456948',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5711dae039ce21_98456948')) {
function content_5711dae039ce21_98456948 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '194615711dae0337501_17903735';
?>
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
			<?php
$_from = $_smarty_tpl->tpl_vars['nav']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['val']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
$foreach_val_Sav = $_smarty_tpl->tpl_vars['val'];
?>
			<li><a href="index.php?c=<?php echo $_smarty_tpl->tpl_vars['val']->value['href'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['val']->value['title'] == $_smarty_tpl->tpl_vars['menuTitle']->value['title']) {?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</a></li>
			<?php
$_smarty_tpl->tpl_vars['val'] = $foreach_val_Sav;
}
?>
		</ul>
	</div>
</header><?php }
}
?>