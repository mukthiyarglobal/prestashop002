<?php
/* Smarty version 3.1.39, created on 2023-10-16 20:47:12
  from '/var/www/html/prestashop/admin570hs59fb/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652d53f842b919_51713886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5daaab0694c949c2890156fe531de5c2e57e6fe' => 
    array (
      0 => '/var/www/html/prestashop/admin570hs59fb/themes/default/template/content.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d53f842b919_51713886 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
