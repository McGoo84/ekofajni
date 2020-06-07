<?php
/* Smarty version 3.1.33, created on 2020-06-07 15:59:42
  from 'module:psmainmenupsmainmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edd0eee6744e8_46480391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41df1985130dffd7d3fe4cb369091546a0b40be7' => 
    array (
      0 => 'module:psmainmenupsmainmenu.tpl',
      1 => 1591524254,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edd0eee6744e8_46480391 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu' => 
  array (
    'compiled_filepath' => '/home/mcgoo/domains/ekofajni.pl/public_html/var/cache/prod/smarty/compile/41/df/19/41df1985130dffd7d3fe4cb369091546a0b40be7_2.module.psmainmenupsmainmenu.tpl.php',
    'uid' => '41df1985130dffd7d3fe4cb369091546a0b40be7',
    'call_name' => 'smarty_template_function_menu_5989500815edd0eee661e08_92552815',
  ),
));
$_smarty_tpl->_assignInScope('_counter', 0);?><div id='tbcmsdesktop-main-menu'><div class='tbcmsmain-menu-wrapper' ><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('nodes'=>$_smarty_tpl->tpl_vars['menu']->value['children']), true);?>
<div class="clearfix"></div><div class="tbmenu-button-wrapper"><div class="tbmenu-button"><i class='material-icons'>&#xe5d2;</i></div></div></div></div><?php }
/* smarty_template_function_menu_5989500815edd0eee661e08_92552815 */
if (!function_exists('smarty_template_function_menu_5989500815edd0eee661e08_92552815')) {
function smarty_template_function_menu_5989500815edd0eee661e08_92552815(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0,'parent'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
if (count($_smarty_tpl->tpl_vars['nodes']->value)) {?><ul class="tb-header-menu" <?php if ($_smarty_tpl->tpl_vars['depth']->value == 0) {?>id="tb-top-menu"<?php }?> data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['depth']->value == 0) {?><li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>current <?php }?> tbmain-menu-wrapper "><div class="tbmenu-link-wrapper"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
" data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
"><span class="tbmain-menu-text-box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span></a></div></li><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
?><li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['type'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['node']->value['current']) {?> current <?php }?> tbmain-menu-wrapper <?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>tb-has-child<?php }?>" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['page_identifier'], ENT_QUOTES, 'UTF-8');?>
" <?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])) {
$_smarty_tpl->_assignInScope('_expand_id', mt_rand(10,100000));?> data-child-dropdown='top_sub_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
'<?php }?>><?php $_smarty_tpl->_assignInScope('_counter', $_smarty_tpl->tpl_vars['_counter']->value+1);?><div class="tbmenu-link-wrapper"><a class="<?php if ($_smarty_tpl->tpl_vars['depth']->value === 1) {?> tbdropdown-submenu<?php }?> tbmenu-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['url'], ENT_QUOTES, 'UTF-8');?>
" data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['node']->value['open_in_new_window']) {?> target="_blank" <?php }?>><span class="tbmain-menu-text-box"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></a><?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])) {?><span class="tbmenu-toggle-icon"><i class='material-icons tbhorizontal-menu-drop-down-icon'>&#xe313;</i></span><?php }?></div><?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])) {?><div <?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?>  class="tbmain-menu-dropdown tbmain-menu-sub-menu tbmain-menu-mobile-dropdown" <?php } elseif ($_smarty_tpl->tpl_vars['depth']->value === 1) {?> class="tbmain-menu-mobile-dropdown"<?php } else { ?>class=""<?php }?> ><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['node']->value['depth'],'parent'=>$_smarty_tpl->tpl_vars['node']->value), true);
if ($_smarty_tpl->tpl_vars['depth']->value === 0 && $_smarty_tpl->tpl_vars['node']->value['children'][0]['children']) {
if ($_smarty_tpl->tpl_vars['node']->value['image_urls']) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['image_urls'], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?><div class="tbheader-top-menu-img"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['label'], ENT_QUOTES, 'UTF-8');?>
"></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}?></div><?php }?></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }
}}
/*/ smarty_template_function_menu_5989500815edd0eee661e08_92552815 */
}
