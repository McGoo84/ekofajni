<?php
/* Smarty version 3.1.33, created on 2020-06-07 15:59:42
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edd0eee76d561_74854933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1591524254,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' => 1,
  ),
),false)) {
function content_5edd0eee76d561_74854933 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="_desktop_cart" class="tbcms-header-cart"><div class="blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>active<?php } else { ?>inactive<?php }?> tb-header-cart" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
"><div class="tbheader-cart-wrapper"><div class='tbheader-cart-btn-wrapper'><a rel="nofollow" href="JavaScript:void(0);" data-url='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
' title='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Cart",'d'=>"Shop.Theme.Checkout"),$_smarty_tpl ) );?>
'><div class="tbcart-icon-text-wrapper"><div class="tb-cart-icon tbheader-right-icon"><i class="material-icons shopping-cart">&#xe8f8;</i></div><div class="tb-cart-cart-inner">                            <span class="tb-cart-title"><?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['cart']->value['products']), ENT_QUOTES, 'UTF-8');?>
</span></div></div></a></div><div class="tbcmscart-show-dropdown"><?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?><div class="tbcart-product-list"><div class="tbcart-product-totle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Cart: ','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['cart']->value['products']), ENT_QUOTES, 'UTF-8');?>
 <?php if (count($_smarty_tpl->tpl_vars['cart']->value['products']) == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Item','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Items','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );
}?></div><div class="tbcart-product-content-box tbscroll-container"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?><div class="tbcart-product-wrapper items"><?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="tbcart-product-list-total-info"><div class="tbcart-product-list-subtotal-prod"><span class="tbshoping-cart-subtotal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subtotal','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span><span class="tbcart-product-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['value'], ENT_QUOTES, 'UTF-8');?>
</span></div>                    </div></div><div class="tbcart-product-list-btn-wrapper"><div class="tbcart-product-list-viewcart"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</a></div><div class="tbcart-product-list-checkout"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',null,$_smarty_tpl->tpl_vars['language']->value['id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Process To CheckOut','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</a></div></div><?php } else { ?><div class="tbcart-no-product"><div class='tbcart-no-product-label'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Product Add in Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</div></div><?php }?></div></div></div></div>
<?php }
}
