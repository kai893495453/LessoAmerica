<?php /* Smarty version 3.1.27, created on 2016-04-16 14:23:47
         compiled from "smarty\template\include\menu.php" */ ?>
<?php
/*%%SmartyHeaderCode:292955711da73906473_21349256%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfbab43187f8b9d08ca484eb0161d4f60c31d068' => 
    array (
      0 => 'smarty\\template\\include\\menu.php',
      1 => 1460787823,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '292955711da73906473_21349256',
  'variables' => 
  array (
    'menuTitle' => 0,
    'menu' => 0,
    'v' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5711da73983496_76375821',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5711da73983496_76375821')) {
function content_5711da73983496_76375821 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '292955711da73906473_21349256';
?>
<dl class="menu">
	<dt>
		<?php echo $_smarty_tpl->tpl_vars['menuTitle']->value['title'];?>

		<div class="divider"></div>
	</dt>
	<?php
$_from = $_smarty_tpl->tpl_vars['menu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
	<dd class="aLink <?php if ($_smarty_tpl->tpl_vars['v']->value['href'] == $_smarty_tpl->tpl_vars['url']->value) {?>active<?php }?>"><a href="index.php?c=<?php echo $_smarty_tpl->tpl_vars['v']->value['href'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
&currentId=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
<span>&lt;</span></a></dd>
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	<dd class="lastItem">
		<div class="f16">Contact Us</div>
		<div class="f12">For more infomation call</div>
		<div class="f24">(888) 988-8839</div>
		<div class="f12">Or Fax to</div>
		<div class="f16">(951) 547-6886</div>
	</dd>
</dl><?php }
}
?>