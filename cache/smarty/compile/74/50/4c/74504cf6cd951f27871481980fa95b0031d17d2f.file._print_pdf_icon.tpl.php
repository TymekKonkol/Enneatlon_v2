<?php /* Smarty version Smarty-3.1.19, created on 2017-11-12 16:42:00
         compiled from "/var/www/html/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20001032335a086bc8758800-23431346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74504cf6cd951f27871481980fa95b0031d17d2f' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl',
      1 => 1510501056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20001032335a086bc8758800-23431346',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'order_slip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a086bc877a280_14882394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a086bc877a280_14882394')) {function content_5a086bc877a280_14882394($_smarty_tpl) {?>



<a class="btn btn-default _blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateOrderSlipPDF&amp;id_order_slip=<?php echo intval($_smarty_tpl->tpl_vars['order_slip']->value->id);?>
">
	<i class="icon-file-text"></i>
	<?php echo smartyTranslate(array('s'=>'Download credit slip'),$_smarty_tpl);?>

</a>

<?php }} ?>