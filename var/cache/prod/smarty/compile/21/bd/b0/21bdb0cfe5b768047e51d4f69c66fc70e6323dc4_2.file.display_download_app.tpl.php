<?php
/* Smarty version 3.1.33, created on 2020-06-07 15:59:42
  from '/home/mcgoo/domains/ekofajni.pl/public_html/modules/tbcmscustomsetting/views/templates/front/display_download_app.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edd0eeea86047_97082878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21bdb0cfe5b768047e51d4f69c66fc70e6323dc4' => 
    array (
      0 => '/home/mcgoo/domains/ekofajni.pl/public_html/modules/tbcmscustomsetting/views/templates/front/display_download_app.tpl',
      1 => 1591524254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edd0eeea86047_97082878 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='tbcmsapp-logo col-lg-4 col-md-12'><div class='tbapp-logo'><div class="tbapp-logo-content-box"><div class="tbapp-logo-link-wrapper"><div class="tbapp-logo-content-inner"><?php if ($_smarty_tpl->tpl_vars['show_fields']->value['app_title']) {?><div class='tbdekstop-footer-all-title-wrapper'><div class='tbfooter-title'><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['link_title'], ENT_QUOTES, 'UTF-8');?>
</span></div></div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['app_sub_title']) {?><div class='tbdekstop-footer-all-sub-title-wrapper'><div class='tbfooter-subtitle'><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['link_sub_title'], ENT_QUOTES, 'UTF-8');?>
</span></div></div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['app_desc']) {?><div class='tbdekstop-footer-all-desc-wrapper'><div class='tbfooter-desc'><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['link_desc'], ENT_QUOTES, 'UTF-8');?>
</span></div></div><?php }?></div><div class="tbapp-logo-app-wrapper"><?php if ($_smarty_tpl->tpl_vars['show_fields']->value['apple_app_link']) {?><div class='tbapp-logo-wrapper tbapp-logo-apple'><a href='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['apple_link'], ENT_QUOTES, 'UTF-8');?>
' title='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Apple App Link",'mod'=>"tbcmscustomsetting"),$_smarty_tpl ) );?>
'><div class="tbapp-logo-image"></div>							</a></div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['google_app_link']) {?><div class='tbapp-logo-wrapper tbapp-logo-google'><a href='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['google_link'], ENT_QUOTES, 'UTF-8');?>
' title='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Google App Link",'mod'=>"tbcmscustomsetting"),$_smarty_tpl ) );?>
'><div class="tbapp-logo-image"></div>							</a></div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['microsoft_app_link']) {?><div class='tbapp-logo-wrapper tbapp-logo-microsoft'><a href='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['microsoft_link'], ENT_QUOTES, 'UTF-8');?>
' title='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Microsoft App Link",'mod'=>"tbcmscustomsetting"),$_smarty_tpl ) );?>
'><div class="tbapp-logo-image"></div>							</a></div><?php }?></div></div></div></div></div>
<?php }
}
