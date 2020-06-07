<?php
/* Smarty version 3.1.33, created on 2020-06-07 15:59:42
  from '/home/mcgoo/domains/ekofajni.pl/public_html/modules/tbcmssearch/views/templates/front/display_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edd0eee7ad040_05442990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3db7536deca37fe7f1b880bf560048088cf0c7c' => 
    array (
      0 => '/home/mcgoo/domains/ekofajni.pl/public_html/modules/tbcmssearch/views/templates/front/display_search.tpl',
      1 => 1591524254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edd0eee7ad040_05442990 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="search-widget tbcmsheader-search" data-search-controller-url="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_controller_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><div class="tbsearch-top-wrapper"><div class="tbheader-sarch-display"><div class="tbheader-search-display-icon"><div class="tbsearch-open"></div><div class="tbsearch-close"><i class='material-icons'>&#xe5cd;</i></div></div></div><div class="tbsearch-header-display-full"><div class="tbsearch-header-display-wrappper"><form method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_controller_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="controller" value="search" /><select class="tbcms-select-category"><option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All','mod'=>'tbcmssearch'),$_smarty_tpl ) );?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['id_category'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><div class="tbheader-top-search"><div class="tbheader-top-search-wrapper-info-box"><input type="text" name="s" class='tbcmssearch-words'  placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search our catalog','mod'=>'tbcmssearch'),$_smarty_tpl ) );?>
" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'tbcmssearch'),$_smarty_tpl ) );?>
" autocomplete="off"/></div></div><div class="tbheader-top-search-wrapper"><button type="submit" class="tbheader-search-btn"><i class='material-icons'>&#xe8b6;</i><span class="tbserach-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'tbcmssearch'),$_smarty_tpl ) );?>
</span></button></div></form><div class='tbsearch-result'></div></div></div></div></div>
<?php }
}
