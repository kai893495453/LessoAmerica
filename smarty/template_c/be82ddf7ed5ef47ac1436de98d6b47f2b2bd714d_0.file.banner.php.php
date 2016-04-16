<?php /* Smarty version 3.1.27, created on 2016-04-16 14:11:07
         compiled from "smarty\template\include\banner.php" */ ?>
<?php
/*%%SmartyHeaderCode:214765711d77b38dab6_14668618%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be82ddf7ed5ef47ac1436de98d6b47f2b2bd714d' => 
    array (
      0 => 'smarty\\template\\include\\banner.php',
      1 => 1460717000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214765711d77b38dab6_14668618',
  'variables' => 
  array (
    'banner' => 0,
    'key' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5711d77b39d4b6_48280102',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5711d77b39d4b6_48280102')) {
function content_5711d77b39d4b6_48280102 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '214765711d77b38dab6_14668618';
?>
<div class="row banner">
	<div class="col-md-12">
		<div id="carousel-generic" class="slide" data-ride="carousel">
	      <ol class="carousel-indicators">
      		<?php
$_from = $_smarty_tpl->tpl_vars['banner']->value;
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
	        <li data-target="#carousel-generic" data-slide-to="0" class="<?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>active<?php }?>"></li>
	        <?php
$_smarty_tpl->tpl_vars['val'] = $foreach_val_Sav;
}
?>
	      </ol>
	      <div class="carousel-inner" role="listbox">
	      	<?php
$_from = $_smarty_tpl->tpl_vars['banner']->value;
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
	        <div class="item <?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>active<?php }?>">
	          <img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['imgSrc'];?>
">
	        </div>
	        <?php
$_smarty_tpl->tpl_vars['val'] = $foreach_val_Sav;
}
?>
	      </div>
	    </div>
	</div>
</div><?php }
}
?>