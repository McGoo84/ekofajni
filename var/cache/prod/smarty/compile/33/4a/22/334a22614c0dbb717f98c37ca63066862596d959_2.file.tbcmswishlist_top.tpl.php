<?php
/* Smarty version 3.1.33, created on 2020-06-07 15:59:42
  from '/home/mcgoo/domains/ekofajni.pl/public_html/modules/tbcmswishlist/views/templates/front/tbcmswishlist_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edd0eee695ca7_65329973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '334a22614c0dbb717f98c37ca63066862596d959' => 
    array (
      0 => '/home/mcgoo/domains/ekofajni.pl/public_html/modules/tbcmswishlist/views/templates/front/tbcmswishlist_top.tpl',
      1 => 1591524254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edd0eee695ca7_65329973 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>var wishlistProductsIds='';var baseDir ='<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['content_dir']->value,"htmlall","UTF-8" )), ENT_QUOTES, 'UTF-8');?>
';var static_token='<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['static_token']->value,"htmlall","UTF-8" )), ENT_QUOTES, 'UTF-8');?>
';var isLogged ='<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['isLogged']->value,"htmlall","UTF-8" )), ENT_QUOTES, 'UTF-8');?>
';var loggin_required='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must be logged in to manage your wishlist.','mod'=>'tbcmswishlist','js'=>1),$_smarty_tpl ) );?>
';var added_to_wishlist ='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The product was successfully added to your wishlist.','mod'=>'tbcmswishlist','js'=>1),$_smarty_tpl ) );?>
';var mywishlist_url='<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tbcmswishlist','mywishlist',array(),true),'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';<?php if (isset($_smarty_tpl->tpl_vars['isLogged']->value) && $_smarty_tpl->tpl_vars['isLogged']->value) {?>var isLoggedWishlist=true;<?php } else { ?>var isLoggedWishlist=false;<?php }
echo '</script'; ?>
><div id="_desktop_wishtlistTop" class="pull-right tbcmsdesktop-view-wishlist"><a class="wishtlist_top tbdesktop-wishlist" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tbcmswishlist','mywishlist',array(),true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><div class="tbwishlist-icon tbheader-right-icon"><i class='material-icons'>&#xe87d;</i></div><div class="tbwishlist-name"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist ','mod'=>'tbcmswishlist'),$_smarty_tpl ) );?>
</span><span>(</span><span class="cart-wishlist-number tbwishlist-number"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s','sprintf'=>array($_smarty_tpl->tpl_vars['count_product']->value),'mod'=>'tbcmswishlist'),$_smarty_tpl ) );?>
</span><span>)</span></div></a></div><?php }
}
