<?php /* Smarty version Smarty-3.1.19, created on 2017-11-12 16:42:09
         compiled from "/var/www/html/admin/themes/default/template/helpers/list/list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2100428705a086bd197f972-86595873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9a89b28ea1237ca1ad2329b8265955520170562' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/list/list_action_removestock.tpl',
      1 => 1510501050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2100428705a086bd197f972-86595873',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a086bd199fb43_80976485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a086bd199fb43_80976485')) {function content_5a086bd199fb43_80976485($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-circle-arrow-down"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>