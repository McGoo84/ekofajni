<?php
/* Smarty version 3.1.33, created on 2020-06-07 15:59:42
  from '/home/mcgoo/domains/ekofajni.pl/public_html/themes/TB_129_PS_Furniture_Wood_root/templates/catalog/_partials/product-activation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edd0eee650ec2_51166232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52eb1cf5f18fce0d125855fa33caa59189520a28' => 
    array (
      0 => '/home/mcgoo/domains/ekofajni.pl/public_html/themes/TB_129_PS_Furniture_Wood_root/templates/catalog/_partials/product-activation.tpl',
      1 => 1591524254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edd0eee650ec2_51166232 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?><div class="alert alert-warning row" role="alert"><div class="container"><div class="row"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value['admin_notifications'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?><div class="col-sm-12"><i class="material-icons float-xs-left">&#xE001;</i><p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div><?php }
}
}
