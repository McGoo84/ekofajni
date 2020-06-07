<?php
/* Smarty version 3.1.33, created on 2020-06-07 15:59:42
  from '/home/mcgoo/domains/ekofajni.pl/public_html/modules/tbcmscookiesnotice/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edd0eee64a722_01868841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22014f39a718a8ba31aceb3b1e1578f9c63be48d' => 
    array (
      0 => '/home/mcgoo/domains/ekofajni.pl/public_html/modules/tbcmscookiesnotice/views/templates/front/display_home.tpl',
      1 => 1591524254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edd0eee64a722_01868841 (Smarty_Internal_Template $_smarty_tpl) {
if (!isset($_COOKIE['cokkie_set'])) {?><div class='tbcmscookies-notice'><div class='tbcookies-notice-img-wrapper'><div class="tbcookies-notice-img-inner"><div class="tbcookie-content-box"><div class='tbcookies-notice-title'><?php echo $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['title'];?>
</div></div><div class="tbcoockies-btn-wrapper"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cms',null,null,'id_cms=3'), ENT_QUOTES, 'UTF-8');?>
" class="tbcoockies-btn" rel="noreferrer noopener">Terms &amp; Conditions</a><a href="Javascript:void(0);" class="close-cookie tbcoockies-accept"><div class="tbcoockies-accept"><span class="tbcookies-text">Accept</span><i class="material-icons"></i></div></a></div></div>	</div></div><?php }
}
}
