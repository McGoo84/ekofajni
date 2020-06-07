<?php
/* Smarty version 3.1.33, created on 2020-06-07 15:59:42
  from '/home/mcgoo/domains/ekofajni.pl/public_html/themes/TB_129_PS_Furniture_Wood_root/templates/_partials/stylesheets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edd0eee633fb1_86862309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c377df85b32da8618fff56ec56bf80d506b349ed' => 
    array (
      0 => '/home/mcgoo/domains/ekofajni.pl/public_html/themes/TB_129_PS_Furniture_Wood_root/templates/_partials/stylesheets.tpl',
      1 => 1591524254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edd0eee633fb1_86862309 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['external'], 'stylesheet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
?><link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
"><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['inline'], 'stylesheet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
?><style><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>
</style><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (Configuration::get('TBCMSCUSTOMSETTING_CUSTOM_FONT_TITLE_COLOR_STATUS') == '1') {
if (!empty(Configuration::get('TBCMSCUSTOMSETTING_THEME_FONT_TYPE_LINK_URL')) && Configuration::get('TBCMSCUSTOMSETTING_THEME_FONT_TYPE') != '0') {?><link href="<?php echo htmlspecialchars(Configuration::get('TBCMSCUSTOMSETTING_THEME_FONT_TYPE_LINK'), ENT_QUOTES, 'UTF-8');?>
" rel="stylesheet"><link href="<?php echo htmlspecialchars(Configuration::get('TBCMSCUSTOMSETTING_THEME_FONT_TYPE_LINK_URL'), ENT_QUOTES, 'UTF-8');?>
" rel="stylesheet"><?php }
if (!empty(Configuration::get('TBCMSCUSTOMSETTING_THEME_FONT_TYPE_LINK_2_URL')) && Configuration::get('TBCMSCUSTOMSETTING_THEME_FONT_TYPE') != '0') {?><link href="<?php echo htmlspecialchars(Configuration::get('TBCMSCUSTOMSETTING_THEME_FONT_TYPE_LINK_2'), ENT_QUOTES, 'UTF-8');?>
" rel="stylesheet"><link href="<?php echo htmlspecialchars(Configuration::get('TBCMSCUSTOMSETTING_THEME_FONT_TYPE_LINK_2_URL'), ENT_QUOTES, 'UTF-8');?>
" rel="stylesheet"><?php }
if (!empty(Configuration::get('TBCMSCUSTOMSETTING_THEME_CUSTOM_TITLE_COLOR'))) {?><link href="<?php echo htmlspecialchars(Configuration::get('TBCMSCUSTOMSETTING_THEME_CUSTOM_TITLE_COLOR'), ENT_QUOTES, 'UTF-8');?>
" rel="stylesheet"><?php }
}
}
}
