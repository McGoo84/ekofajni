<?php
/* Smarty version 3.1.33, created on 2020-06-07 15:59:42
  from 'module:pssocialfollowpssocialfol' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edd0eee7eee58_08256860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ac9ddb06fe7b43ffdd2f5cd1185536480d2577' => 
    array (
      0 => 'module:pssocialfollowpssocialfol',
      1 => 1591524254,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edd0eee7eee58_08256860 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19155522065edd0eee7df559_71415033', 'block_social');
?>

<?php }
/* {block 'block_social'} */
class Block_19155522065edd0eee7df559_71415033 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_social' => 
  array (
    0 => 'Block_19155522065edd0eee7df559_71415033',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tbcmsfooter-social-icon"><ul id="footer_sub_menu_social_icon" class="tbfooter-social-icon-wrapper"><?php if (!empty(Configuration::get('BLOCKSOCIAL_FACEBOOK'))) {?><li class="facebook"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_FACEBOOK'), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><span class="social-icon"></span><span class="tbsocial-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facebook','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span></a></li><?php }
if (!empty(Configuration::get('BLOCKSOCIAL_TWITTER'))) {?><li class="twitter"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_TWITTER'), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><span class="social-icon"></span><span class="tbsocial-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Twitter','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span></a></li><?php }
if (!empty(Configuration::get('BLOCKSOCIAL_RSS'))) {?><li class="rss"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_RSS'), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><span class="social-icon"></span><span class="tbsocial-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rss','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span></a></li><?php }
if (!empty(Configuration::get('BLOCKSOCIAL_YOUTUBE'))) {?><li class="youtube"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_YOUTUBE'), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><span class="social-icon"></span><span class="tbsocial-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Youtube','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span></a></li><?php }
if (!empty(Configuration::get('BLOCKSOCIAL_GOOGLE_PLUS'))) {?><li class="googleplus"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_GOOGLE_PLUS'), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><span class="social-icon"></span><span class="tbsocial-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google plus','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span></a></li><?php }
if (!empty(Configuration::get('BLOCKSOCIAL_PINTEREST'))) {?><li class="pinterest"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_PINTEREST'), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><span class="social-icon"></span><span class="tbsocial-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pinterest','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span></a></li><?php }
if (!empty(Configuration::get('BLOCKSOCIAL_VIMEO'))) {?><li class="vimeo"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_VIMEO'), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><span class="social-icon"></span><span class="tbsocial-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vimeo','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span></a></li><?php }
if (!empty(Configuration::get('BLOCKSOCIAL_INSTAGRAM'))) {?><li class="instagram"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_INSTAGRAM'), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><span class="social-icon"></span><span class="tbsocial-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instagram','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span></a></li><?php }?></ul></div><?php
}
}
/* {/block 'block_social'} */
}
