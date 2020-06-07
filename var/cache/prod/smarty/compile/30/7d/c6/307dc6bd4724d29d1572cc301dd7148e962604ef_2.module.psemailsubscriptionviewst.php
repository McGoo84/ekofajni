<?php
/* Smarty version 3.1.33, created on 2020-06-07 15:59:42
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edd0eee7cb372_84698405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1591524254,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edd0eee7cb372_84698405 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<div class="tbcms-newsletter-wrapper"><div class="tbcms-newsletter-inner"><div class="block_newsletter tb-newsletter-wrapeer"><div class="tbnewsletter-block clearfix"><div class="tbcmsnews-title-wrapper"><div class="tbcms-news-title">							<?php if (Configuration::get('TBCMSCUSTOMSETTING_NEWSLETTER_SHORT_DESC',$_smarty_tpl->tpl_vars['language']->value['id'])) {?><div class="tbnews-desc"><?php echo htmlspecialchars(Configuration::get('TBCMSCUSTOMSETTING_NEWSLETTER_SHORT_DESC',$_smarty_tpl->tpl_vars['language']->value['id']), ENT_QUOTES, 'UTF-8');?>
</div><?php }?></div></div><div class="tbnewsletter-input"><form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post"><div class="tbnewsletter-description"><?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?><p class="alert-description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p><?php }
if ($_smarty_tpl->tpl_vars['msg']->value) {?><p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>
</p><?php }
if (isset($_smarty_tpl->tpl_vars['id_module']->value)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );
}?></div><div class="tbnewsleeter-input-button-wraper"><div class="input-wrapper"><input name="email" type="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
" aria-labelledby="block-newsletter-label" ></div><div class="tbnewsleteer-btn-wrapper"><button class='btn btn-primary' name="submitNewsletter" type="submit"><span class='tbnewslatter-btn-title hidden-sm-down'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span><span class='tbnewslatter-btn-title hidden-md-up'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>								</button></div></div><input type="hidden" name="action" value="0"></form></div></div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySocialMediaBlock'),$_smarty_tpl ) );?>
</div></div></div>
<?php }
}
