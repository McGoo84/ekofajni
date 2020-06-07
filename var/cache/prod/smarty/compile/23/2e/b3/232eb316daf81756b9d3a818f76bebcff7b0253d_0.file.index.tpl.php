<?php
/* Smarty version 3.1.33, created on 2020-06-07 15:56:31
  from '/home/mcgoo/domains/ekofajni.pl/public_html/modules/tbcmscustomsetting/views/templates/admin/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edd0e2f0b4d91_83639414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '232eb316daf81756b9d3a818f76bebcff7b0253d' => 
    array (
      0 => '/home/mcgoo/domains/ekofajni.pl/public_html/modules/tbcmscustomsetting/views/templates/admin/index.tpl',
      1 => 1591524254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edd0e2f0b4d91_83639414 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tbadmincustom-setting"><div class="tbadmincustom-setting-all-tabs"><?php if ($_smarty_tpl->tpl_vars['show_fields']->value['form_1'] == true) {?><div tab-number='#fieldset_0' class="tbadmincustom-setting-tab <?php if ($_smarty_tpl->tpl_vars['tab_number']->value == '#fieldset_0') {?>tbadmincustom-setting-active<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Theme Configuration','mod'=>'tbcmscustomsetting'),$_smarty_tpl ) );?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['form_2'] == true) {?><div tab-number='#fieldset_1_1' class="tbadmincustom-setting-tab <?php if ($_smarty_tpl->tpl_vars['tab_number']->value == '#fieldset_1_1') {?>tbadmincustom-setting-active<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'App Link','mod'=>'tbcmscustomsetting'),$_smarty_tpl ) );?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['form_3'] == true) {?><div tab-number='#fieldset_2_2' class="tbadmincustom-setting-tab <?php if ($_smarty_tpl->tpl_vars['tab_number']->value == '#fieldset_2_2') {?>tbadmincustom-setting-active<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom Titles','mod'=>'tbcmscustomsetting'),$_smarty_tpl ) );?>
</div><?php }?></div></div><div><input type="hidden" name="tbcmscustom_setting_tab_number" id='tbcmscustom-setting-tab-number' value="<?php echo $_smarty_tpl->tpl_vars['tab_number']->value;?>
"></div><?php }
}
