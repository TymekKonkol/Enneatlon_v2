<?php /* Smarty version Smarty-3.1.19, created on 2017-11-10 20:57:10
         compiled from "/var/www/html/admin/themes/default/template/helpers/tree/tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12523401255a060496da3325-03107638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '911ae27a96e8bad21250ce15324f7b91fa313bbc' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/tree/tree_node_item.tpl',
      1 => 1510343663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12523401255a060496da3325-03107638',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a060496dadd79_76661099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a060496dadd79_76661099')) {function content_5a060496dadd79_76661099($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>