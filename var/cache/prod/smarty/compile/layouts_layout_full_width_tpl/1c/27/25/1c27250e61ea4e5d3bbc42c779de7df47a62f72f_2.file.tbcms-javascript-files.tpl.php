<?php
/* Smarty version 3.1.33, created on 2020-06-07 15:59:42
  from '/home/mcgoo/domains/ekofajni.pl/public_html/themes/TB_129_PS_Furniture_Wood_root/templates/_partials/tbcms-javascript-files.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edd0eeea9ceb4_93553919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c27250e61ea4e5d3bbc42c779de7df47a62f72f' => 
    array (
      0 => '/home/mcgoo/domains/ekofajni.pl/public_html/themes/TB_129_PS_Furniture_Wood_root/templates/_partials/tbcms-javascript-files.tpl',
      1 => 1591524254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edd0eeea9ceb4_93553919 (Smarty_Internal_Template $_smarty_tpl) {
if (Configuration::get('TBCMSFRONTSIDE_THEME_SETTING_SHOW')) {?><!-- START THEME_CONTROL --><link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
jquery.minicolors.css" rel="stylesheet"><link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
bootstrap-toggle.min.css" rel="stylesheet"><?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['js_url'], ENT_QUOTES, 'UTF-8');?>
templatebeta/jquery.minicolors.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['js_url'], ENT_QUOTES, 'UTF-8');?>
templatebeta/bootstrap-toggle.min.js"><?php echo '</script'; ?>
><div class="tbcms-custom-theme"></div><div class="tbcms-custom-font-1"></div><div class="tbcms-custom-font-2"></div><div class="tbcms-custom-color"></div><!-- END THEME_CONTROL --><?php }
if (Configuration::get('TBCMSCUSTOMSETTING_THEME_OPTION')) {?><!-- START THEME_CONTROL CUSTOM COLOR CSS --><?php if (Configuration::get('TBCMSCUSTOMSETTING_THEME_OPTION') == 'theme_custom') {?><link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(Configuration::get('TBCMSCUSTOMSETTING_THEME_CSS_PATH'), ENT_QUOTES, 'UTF-8');?>
"><?php } else { ?><link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
theme/<?php echo htmlspecialchars(Configuration::get('TBCMSCUSTOMSETTING_THEME_OPTION'), ENT_QUOTES, 'UTF-8');?>
.css"><?php }?><!-- END THEME_CONTROL CUSTOM COLOR CSS --><?php }
}
}
