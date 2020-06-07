<?php
/* Smarty version 3.1.33, created on 2020-06-07 15:59:42
  from '/home/mcgoo/domains/ekofajni.pl/public_html/modules/tbcmsfooterlogo/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edd0eee7f74e8_45120243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb2e8f510086113a4356d17bc310ff22aab6cabb' => 
    array (
      0 => '/home/mcgoo/domains/ekofajni.pl/public_html/modules/tbcmsfooterlogo/views/templates/front/display_home.tpl',
      1 => 1591524254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edd0eee7f74e8_45120243 (Smarty_Internal_Template $_smarty_tpl) {
if (Configuration::get('TBCMSFOOTERLOGO_IMG')) {?><div class='tbfooter-about-logo-wrapper col-xl-3 col-lg-3 col-md-12 col-xs-12 col-sm-12'><div class=" tbfooter-about-logo-content"><div class='tbfooter-logo-block tbfooter-title-wrapper-content'><?php if ($_smarty_tpl->tpl_vars['show_fields']->value['main_image']) {?><div class='tbfooter-img-block'><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(Configuration::get('TBCMSFOOTERLOGO_IMG'), ENT_QUOTES, 'UTF-8');?>
" data-org-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(Configuration::get('TBCMSFOOTERLOGO_IMG'), ENT_QUOTES, 'UTF-8');?>
" /></div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['main_title']) {?><div class='tbfooter-logo-title tbfooter-title'><?php echo htmlspecialchars(Configuration::get('TBCMSFOOTERLOGO_TITLE',$_smarty_tpl->tpl_vars['id_lang']->value), ENT_QUOTES, 'UTF-8');?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['main_short_description']) {?><div class='tbfooter-logo-short-title'><?php echo htmlspecialchars(Configuration::get('TBCMSFOOTERLOGO_SUB_DESCRIPTION',$_smarty_tpl->tpl_vars['id_lang']->value), ENT_QUOTES, 'UTF-8');?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['main_description']) {?><div class='tbfooter-logo-desc'><?php echo htmlspecialchars(Configuration::get('TBCMSFOOTERLOGO_DESCRIPTION',$_smarty_tpl->tpl_vars['id_lang']->value), ENT_QUOTES, 'UTF-8');?>
</div><?php }?></div></div></div><?php }
}
}
