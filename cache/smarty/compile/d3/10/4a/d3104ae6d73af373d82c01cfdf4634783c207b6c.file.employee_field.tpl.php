<?php /* Smarty version Smarty-3.1.19, created on 2017-11-12 16:41:45
         compiled from "/var/www/html/admin/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3355018325a086bb976a4c5-38196968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3104ae6d73af373d82c01cfdf4634783c207b6c' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1510501072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3355018325a086bb976a4c5-38196968',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a086bb977bdc0_25855459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a086bb977bdc0_25855459')) {function content_5a086bb977bdc0_25855459($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
