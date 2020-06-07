<?php
/* Smarty version 3.1.33, created on 2020-06-07 15:59:42
  from '/home/mcgoo/domains/ekofajni.pl/public_html/modules/tbcmsinstagramslider/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edd0eeea7c9b8_54485703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b7b354d54f85f9624f8c0beb9dac9bc5d613db6' => 
    array (
      0 => '/home/mcgoo/domains/ekofajni.pl/public_html/modules/tbcmsinstagramslider/views/templates/front/display_home.tpl',
      1 => 1591524254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edd0eeea7c9b8_54485703 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['instagram_pics']->value) && count($_smarty_tpl->tpl_vars['instagram_pics']->value) > 0) {?><div class=" tbcmsinstagram-slider col-xl-3 col-lg-3 col-md-12 col-xs-12 col-sm-12"><div class='tbinstagram-slider'><?php if (!empty(Configuration::get('CS_TITLE',$_smarty_tpl->tpl_vars['language']->value['id']))) {?><div class="tbinstagram-slider-title-wrapper"><div class="tbinstagram-slider-title-inner"><div class="tbinstagram-slider-title-outer tbfooter-title-wrapper collapsed" data-target="#tbinstagram-slider-inner" data-toggle="collapse"><span class="tbinstagram-title tbfooter-title"><?php echo htmlspecialchars(Configuration::get('CS_TITLE',$_smarty_tpl->tpl_vars['language']->value['id']), ENT_QUOTES, 'UTF-8');?>
</span><span class="float-xs-right tbfooter-toggle-icon-wrapper"><span class="navbar-toggler collapse-icons tbfooter-toggle-icon"><i class="material-icons add">&#xE313;</i><i class="material-icons remove">&#xE316;</i></span></span></div></div></div><?php }?><div id="tbinstagram-slider-inner" class="collapse"><div class='tbinstagram-slider-content-box owl-theme owl-carousel'><?php $_smarty_tpl->_assignInScope('count', 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['instagram_pics']->value, 'pic');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pic']->value) {
if ($_smarty_tpl->tpl_vars['count']->value == 1) {?><div class="item tbinstagram-slider-wrapper-info wow zoomIn"><?php }?><div class="tbinsta-img-block"><a class='tbinsta-img-block-link' href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pic']->value['link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pic']->value['caption'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="nofollow"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pic']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pic']->value['caption'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" /></a></div><?php if ($_smarty_tpl->tpl_vars['count']->value == 2) {?></div><?php $_smarty_tpl->_assignInScope('count', 0);
}
$_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['count']->value != 1) {?></div><?php }?></div></div></div></div><?php }
}
}
