<?php
/* Smarty version 3.1.33, created on 2020-06-07 15:59:42
  from '/home/mcgoo/domains/ekofajni.pl/public_html/modules/tbcmsproductcompare/views/templates/front/display_nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edd0eee69cff1_73569153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4803d1996c177c4cf824f627339e910131a4615' => 
    array (
      0 => '/home/mcgoo/domains/ekofajni.pl/public_html/modules/tbcmsproductcompare/views/templates/front/display_nav.tpl',
      1 => 1591524254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edd0eee69cff1_73569153 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tbcmsdesktop-view-compare"><a class="link_wishlist tbdesktop-view-compare tbcmscount-compare-product" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tbcmsproductcompare','productcomparelist'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Compare','mod'=>'tbcmsproductcompare'),$_smarty_tpl ) );?>
"><div class="tbdesktop-compare-icon tbheader-right-icon"><i class='material-icons'>&#xe043;</i></div><div class="tbdesktop-view-compare-name"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare','mod'=>'tbcmsproductcompare'),$_smarty_tpl ) );?>
  <span class="count-product">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tot_comp_prod']->value, ENT_QUOTES, 'UTF-8');?>
)</span></div></a></div><?php }
}
