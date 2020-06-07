<?php
/* Smarty version 3.1.33, created on 2020-06-07 15:59:42
  from '/home/mcgoo/domains/ekofajni.pl/public_html/themes/TB_129_PS_Furniture_Wood_root/templates/_partials/notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edd0eee78b036_96400991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b53daf098a46e0a99b3e439c6e0bd727132f44f1' => 
    array (
      0 => '/home/mcgoo/domains/ekofajni.pl/public_html/themes/TB_129_PS_Furniture_Wood_root/templates/_partials/notifications.tpl',
      1 => 1591524254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edd0eee78b036_96400991 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if (isset($_smarty_tpl->tpl_vars['notifications']->value)) {?><aside id="notifications"><div class="container"><?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11185917535edd0eee7844b5_81191526', 'notifications_error');
}
if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17239858335edd0eee786197_36595899', 'notifications_warning');
}
if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10053624425edd0eee787c35_57122616', 'notifications_success');
}
if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11992118695edd0eee7896b0_10643645', 'notifications_info');
}?></div></aside><?php }
}
/* {block 'notifications_error'} */
class Block_11185917535edd0eee7844b5_81191526 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_error' => 
  array (
    0 => 'Block_11185917535edd0eee7844b5_81191526',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<article class="alert alert-danger" role="alert" data-alert="danger"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['error'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?><li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></article><?php
}
}
/* {/block 'notifications_error'} */
/* {block 'notifications_warning'} */
class Block_17239858335edd0eee786197_36595899 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
    0 => 'Block_17239858335edd0eee786197_36595899',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<article class="alert alert-warning" role="alert" data-alert="warning"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['warning'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?><li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></article><?php
}
}
/* {/block 'notifications_warning'} */
/* {block 'notifications_success'} */
class Block_10053624425edd0eee787c35_57122616 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_success' => 
  array (
    0 => 'Block_10053624425edd0eee787c35_57122616',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<article class="alert alert-success" role="alert" data-alert="success"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['success'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?><li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></article><?php
}
}
/* {/block 'notifications_success'} */
/* {block 'notifications_info'} */
class Block_11992118695edd0eee7896b0_10643645 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_info' => 
  array (
    0 => 'Block_11992118695edd0eee7896b0_10643645',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<article class="alert alert-info" role="alert" data-alert="info"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['info'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?><li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></article><?php
}
}
/* {/block 'notifications_info'} */
}
